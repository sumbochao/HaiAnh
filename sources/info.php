<?php  if(!defined('_source')) die("Error");
	
	if(!isset($_SESSION['logging'])){transfer("Bạn chưa đăng nhập vào tài khoản của mình", "http://$config_url/index.html");}
	$d->reset();
	$sql_user = "select * from #_thanhvien where id='".$_SESSION['logging']['id']."'";
	$d->query($sql_user);
	$user = $d->result_array();
	
	$id = $user[0]['id'];
	$date = explode('-',$user[0]['ngaysinh']);

	if(!empty($_POST)){
		
		// $size = 300000;
		// $file_size = $_FILES['file']['size'];
		// if($file_size>$size){
		// 	transfer("Dung lượng hình ảnh vượt quá mức cho phép", "http://$config_url/thong-tin-tai-khoan.html");
		// }
		
		// $name = $_FILES['file']['name'];
		// $name = explode('.',$name);
		// $name = changeTitle($name[0]);
		// if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_hinhanh_l,$name."_".time())){
		// 	$data['photo'] = $photo;
		// 	$d->setTable('thanhvien');
		// 	$d->setWhere('id', $id);
		// 	$d->select();
		// 	if($d->num_rows()>0){
		// 		$row = $d->fetch_array();
		// 		delete_file(_upload_hinhanh.$row['photo']);
		// 	}
		// }
		$data['ten'] = $_POST['name'];
		$data['dienthoai'] = $_POST['phone'];
		$data['sex'] = $_POST['sex'];
		$data['ngaysinh'] = $_POST['dd']."-".$_POST['mm']."-".$_POST['yyyy'];
		$data['diachi'] = $_POST['diachi'];
		
		$d->setTable('user');
		$d->setWhere('id', $id);
		if($d->update($data))
			transfer("Thông tin của bạn đã được cập nhật", "http://$config_url/thong-tin-tai-khoan.html");
		else
			 transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://$config_url/thong-tin-tai-khoan.html");

			
	}
	
?>