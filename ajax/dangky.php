<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../libraries/');
	
	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	$d = new database($config['database']);
	
	$email1=$_POST['email1'];
	$ten1=$_POST['ten1'];
	$dienthoai1=$_POST['dienthoai1'];
	$noidung1=$_POST['noidung1'];
	
	if(isset($_POST)){
		$data['email'] = $_POST['email1'];
		$data['ten'] = $_POST['ten1'];
		$data['diachi'] = $_POST['diachi1'];
		$data['dienthoai'] = $_POST['dienthoai1'];
		$data['noidung'] = $_POST['noidung1'];
		$data['tieude'] = 'Liên hệ từ website';
		$data['view'] = 0;
		$data['ngaytao'] = time();
		$d->setTable('contact');
		if($d->insert($data)){

			include_once "../phpMailer/class.phpmailer.php";	
			$mail = new PHPMailer();
			$mail->IsSMTP(); // Gọi đến class xử lý SMTP
			$mail->Host       = $config_ip; // tên SMTP server
			$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
			$mail->Username   = $config_email; // SMTP account username
			$mail->Password   = $config_pass;  

			//Thiet lap thong tin nguoi gui va email nguoi gui
			$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
			$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
			$mail->Subject    = $data['tieude']." - ".$row_setting['title_'.$lang];
			$mail->IsHTML(true);
			//Thiết lập định dạng font chữ
			$mail->CharSet = "utf-8";	

			$body = '<table>';
			$body .= '
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="2" align="left">Thư liên hệ từ website <a href="http://'.$row_setting['website'].'">'.$row_setting['website'].'</a></th>
				</tr>
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Họ tên :</th><td>'.$_POST['ten1'].'</td>
				</tr>
				<tr>
					<th>Điện thoại :</th><td>'.$_POST['dienthoai1'].'</td>
				</tr>
				<tr>
					<th>Email :</th><td>'.$_POST['email1'].'</td>
				</tr>
				
				<tr>
					<th>Tiêu đề :</th><td>'.$data['tieude'].'</td>
				</tr>
				<tr>
					<th>Nội dung :</th><td>'.$_POST['noidung'].'</td>
				</tr>';
			$body .= '</table>';
			$mail->Body = $body;
			if($mail->Send()){
				echo 1;
			}else{
				echo 2;
			}
			
		}else{
			echo 0;
		}
	}
		

?>
