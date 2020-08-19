<?php	if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
include_once "type/type_".$com.".php";

switch($act){
	#===================================================
	case "man":
		get_mans();
		$template = "tailieu/man/items";
		break;
	case "add":		
		$template = "tailieu/man/item_add";
		break;
	case "edit":		
		get_man();
		$template = "tailieu/man/item_add";
		break;
	case "save":
		save_man();
		break;
		
	case "delete":
		delete_man();
		break;	

	default:
		$template = "index";
}
	if($_GET['type']=='tailieu'){

		$title_main = "tailieu";
		$config_images = "true";
		$config_mota= "false";

	}else {

		$title_main = "tailieu";
		$config_images = "true";

	}

#====================================

function get_mans(){
	global $d, $items, $paging,$page;
	
	
	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	
	$where = " #_tailieu ";

	$where .= " where type='".$_GET['type']."' ";
	
	
	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$where.=" and ten_vi LIKE '%$keyword%'";
		$link_add .= "&keyword=".$_GET['keyword'];
	}
	$where .=" order by id desc";

	$sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=tailieu&act=man&type=".$_GET['type']."".$link_add;
	$paging = pagination($where,$per_page,$page,$url);		
	
}

function get_man(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=tailieu&act=man&type=".$_GET['type']);	
	$sql = "select * from #_tailieu where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tailieu&act=man&type=".$_GET['type']);
	$item = $d->fetch_array();	

}

function save_man(){
	global $d,$config,$config_info;
	$file_name=images_name($_FILES['file']['name']);
	$file_name1=images_name($_FILES['file1']['name']);

	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tailieu&act=man&type=".$_GET['type']);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	
	if($id){
		$id =  themdau($_POST['id']);
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_tailieu,$file_name)){
			$data['photo'] = $photo;	
			$data['thumb'] = create_thumb($data['photo'], $config_info['img-width']*$config_info['img-ratio'],$config_info['img-height']*$config_info['img-ratio'], _upload_tailieu,$file_name,$config_info['img-ratio']);		
			$d->setTable('tailieu');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tailieu.$row['photo']);	
				delete_file(_upload_tailieu.$row['thumb']);				
			}
		}
		if($tailieu = upload_image("file1", 'pdf|PDF|doc|DOC|docx|DOCX|rar|RAR|zip|ZIP|xls|XLS|xlsx|XLSX', _upload_tailieu,$file_name1)){
			$data['tailieu'] = $tailieu;		
			$d->setTable('tailieu');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tailieu.$row['tailieu']);	
				delete_file(_upload_tailieu.$row['thumb']);				
			}
		}
		
		foreach ($config['lang'] as $k => $v){
			$data['ten_'.$k] = $_POST['ten_'.$k];
			$data['mota_'.$k] = magic_quote($_POST['mota_'.$k]);
		}

		if($_POST['tenkhongdau']==''){
			$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
		}else{
			$data['tenkhongdau'] = $_POST['tenkhongdau'];
		}
		
		$data['stt'] = $_POST['stt'];
		
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$data['ngaysua'] = time();
		$d->setTable('tailieu');
		$d->setWhere('id', $id);
		if($d->update($data)){
			redirect("index.php?com=tailieu&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
		}
		else{
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=tailieu&act=man&type=".$_GET['type']);
		}
	}else{
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_tailieu,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], $config_info['img-width']*$config_info['img-ratio'],$config_info['img-height']*$config_info['img-ratio'], _upload_tailieu,$file_name,$config_info['img-ratio']);		
		}
		if($tailieu = upload_image("file1", 'pdf|PDF|doc|DOC|docx|DOCX|rar|RAR|zip|ZIP|xls|XLS|xlsx|XLSX', _upload_tailieu,$file_name1)){
			$data['tailieu'] = $tailieu;		
		}		
		
		foreach ($config['lang'] as $k => $v){
			$data['ten_'.$k] = $_POST['ten_'.$k];
			$data['mota_'.$k] = magic_quote($_POST['mota_'.$k]);
		}

		if($_POST['tenkhongdau']==''){
			$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
		}else{
			$data['tenkhongdau'] = $_POST['tenkhongdau'];
		}

		$data['type'] = $_GET['type'];
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		$d->setTable('tailieu');
		if($d->insert($data))
		{	
			$id = mysql_insert_id();
			redirect("index.php?com=tailieu&act=man&type=".$_GET['type']);
		}
		else{
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tailieu&act=man&type=".$_GET['type']);
		}
	}
}

function delete_man(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,photo,thumb,tailieu from #_tailieu where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_tailieu.$row['photo']);
				delete_file(_upload_tailieu.$row['thumb']);
				delete_file(_upload_tailieu.$row['tailieu']);
			}
			$sql = "delete from #_tailieu where id='".$id."'";
			$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=tailieu&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=tailieu&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	} elseif (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
			$sql = "select id,photo,thumb,tailieu from #_tailieu where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_tailieu.$row['photo']);
					delete_file(_upload_tailieu.$row['thumb']);
					delete_file(_upload_tailieu.$row['tailieu']);
				}
				$sql = "delete from #_tailieu where id='".$id."'";
				$d->query($sql);
			}
		}
		redirect("index.php?com=tailieu&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	} else {
		transfer("Không nhận được dữ liệu", "index.php?com=tailieu&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	}
}



?>