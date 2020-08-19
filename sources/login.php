<?php
	$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';

	if(!empty($_POST)){
		$error_bool = true;
		$data = $_POST['data'];

		if($data['email']!=''){
			$email = (string)$data['email'];
		}else{
			$error_bool = false;
			$error_email = 'Bạn chưa nhập email';
		}
		if($data['password']!=''){
			$password = $data['password'];
			$password_md5 = md5($data['password']);
		}else{
			$error_bool = false;
			$error_password = 'Bạn chưa nhập password';
		}
		if($error_bool == true){
			$d->reset();
			$sql = "select * from table_thanhvien where email='".$email."' and type='member'";
			$d->query($sql);
			$row_user = $d-> fetch_array();
			if($d->num_rows()>0){
				if($row_user['password'] == $password_md5){
					if($row_user['hienthi']==1){
						$_SESSION['logging']['id'] = $row_user['id'];
						$_SESSION['logging']['email'] = $row_user['email'];
						$_SESSION['logging']['activation'] = $row_user['activation'];
						$_SESSION['logging']['hoten'] = $row_user['hoten'];
						$_SESSION['logging']['ngaysinh'] = $row_user['ngaysinh'];
						$_SESSION['logging']['diachi'] = $row_user['diachi'];
						$_SESSION['logging']['dienthoai'] = $row_user['dienthoai'];
						$_SESSION['logging']['photo'] = $row_user['photo'];
						$_SESSION['logging']['hienthi'] = $row_user['hienthi'];
						if($_POST['remember'] == 1){
							setcookie('email', $row_user['email'], time()+60*60*24*365);
							setcookie('password', $row_user['password'], time()+60*60*24*365);
						}
						transfer("Bạn đã đăng nhập thành công!", "http://$config_url/");
					}else{
						$error_bool = false;
						$error_email = 'Tài khoản của bạn chưa được kích hoạt.';
					}
				}else{
					$error_bool = false;
					$error_email = 'Dữ liệu không thỏa điểu kiện';
				}
				
			}else{
				$error_bool = false;
				$error_email = 'Email không tồn tại.';
			}
		}else{
			$error_bool = false;
			$error_email = 'Dữ liệu không thỏa điểu kiện';
		}
	}
?>