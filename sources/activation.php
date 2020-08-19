<?php
	$title_bar = "Activation | ";
	if($_GET['id']){
		$d->setTable('thanhvien');
		$d->setWhere('activation', $_GET['id']);
		$d->select();
		if($d->num_rows()>0){
			$data['hienthi'] = 1;
			$d->setTable('thanhvien');
			$d->setWhere('activation', $_GET['id']);
			if($d->update($data)) transfer("Tài khoản của bạn đã kích hoạt thành công, xin sử dụng chức năng đăng nhập!", "http://$config_url/");				
		}else{
			transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://$config_url/");		
		}
	}
?>