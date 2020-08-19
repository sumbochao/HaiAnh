<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "capnhat":
		get_gioithieu();
		$template = "setting/item_add";
		break;
	case "save":
		save_gioithieu();
		break;
		
	default:
		$template = "index";
}

function get_gioithieu(){
	global $d, $item;

	$sql = "select * from #_setting limit 0,1";
	$d->query($sql);
	//if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}

function save_gioithieu(){
	global $d,$config;
	$file_name=images_name($_FILES['file']['name']);
	$file_name1=images_name($_FILES['file1']['name']);
	$file_name2=images_name($_FILES['file2']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=setting&act=capnhat");
		
	if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
		$data['photo'] = $photo;	
	}

	if($photo1 = upload_image("file1", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name1)){
		$data['bgtop'] = $photo1;	
	}

	if($photo2 = upload_image("file2", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name2)){
		$data['bgcontent'] = $photo2;	
	}
	
	foreach ($config['lang'] as $k => $v){
		$data['ten_'.$k] = $_POST['ten_'.$k];
		$data['diachi_'.$k] = magic_quote($_POST['diachi_'.$k]);
		$data['slogan_'.$k] = magic_quote($_POST['slogan_'.$k]);
		$data['desc_tragop_'.$k] = $_POST['desc_tragop_'.$k];
		$data['desc_slider1_'.$k] = $_POST['desc_slider1_'.$k];
		$data['desc_slider2_'.$k] = $_POST['desc_slider2_'.$k];
	}
		
	$data['page_sp'] = (int)$_POST['page_sp'];
	$data['page_ne'] = (int)$_POST['page_ne'];	
	$data['page_in'] = (int)$_POST['page_in'];

	$data['email'] = $_POST['email'];
	$data['website'] = $_POST['website'];
	
	$data['facebook'] = $_POST['facebook'];
	$data['toado'] = $_POST['toado'];
	$data['hotline'] = $_POST['hotline'];
	$data['dienthoai'] = $_POST['dienthoai'];
	
	$data['tags'] = $_POST['tags'];
	$tags = explode(',', $_POST['tags']);
	$tags_list = '';
	foreach ($tags as $k => $v) {
		$tags_list .= changeTitle($v).',';
	}
	$tags_list = substr($tags_list, 0, -1);
	$data['tagskhongdau'] = $tags_list;

	$data['analytics'] = magic_quote($_POST['analytics']);
	$data['vchat'] = magic_quote($_POST['vchat']);

	$data['title'] = $_POST['title'];
	$data['keywords'] = $_POST['keywords'];
	$data['description'] = $_POST['description'];			
	$data['hotlinepage'] = $_POST['hotlinepage'];			
	$data['lienketweb'] = magic_quote($_POST['lienketweb']);			
	$data['disable_web'] = isset($_POST['disable_web']) ? 1 : 0;
	$d->reset();
	$d->setTable('setting');
	if($d->update($data))
		header("Location:index.php?com=setting&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=setting&act=capnhat");
}

?>