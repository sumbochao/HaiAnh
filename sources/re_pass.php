<?php 	if(!defined('_source')) die("Error");
		
		$d->reset();
		$sql_contact = "select * from #_setting ";
		$d->query($sql_contact);
		$company_mail = $d->fetch_array();
		$title = "Đổi mật khẩu";
		$breadcumb ='<ul id="breadcrumb">
	                <li><a href=""><span class="fa fa-home"> </span></a></li>
	                <li><a href="">'._home.'</a></li>
	                <li><a href="'.$com.'.html">'.$title.'</a></li>
	              </ul>';
		if(!empty($_POST)){
			$d->reset();
			$sql = "select * from #_user where email='".$_SESSION['logging']['email']."' and type='thanh-vien'";
			$d->query($sql);
			if($d->num_rows() == 0) transfer("Thông tin cung cấp của bạn không đúng", "http://$config_url/doi-mat-khau.html");
			$user = $d->fetch_array();
			
			if($user['password'] != md5($_POST['oldpass']))transfer("Mật khẩu cũ không chính xác", "http://$config_url/doi-mat-khau.html");
			
			if($_POST['pass'] != $_POST['repass'])transfer("Xác nhận mật khẩu không chính xác", "http://$config_url/doi-mat-khau.html");
			
			$password = $_POST['pass'];
			$data['password'] = md5($password);
			
			$d->setTable('user');
			$d->setWhere('id',$user['id']);
			
			if($d->update($data)){
				unset($_SESSION['logging']);
				transfer("Mật khẩu của bạn đã được thay đổi.<br/>Xin vui lòng đăng nhập lại", "http://$config_url/dang-nhap.html");
			}else{
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://$config_url/index.html");
			}
		
		}		
	
?>