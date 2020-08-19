<?php if(!defined('_source')) die("Error");

		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$bread.'</a></li>
              </ul>';

		$d->reset();
		$sql = "select noidung_$lang,title,keywords,description from #_company where type='lienhe' ";
		$d->query($sql);
		$row_detail = $d->fetch_array();

		if(!empty($_POST)){
			if(!empty($_POST['tieude'])){
				$tieude = $_POST['tieude'];
			}else{
				$tieude = 'Đơn đặt hàng từ website';
			}
			
			include_once "phpMailer/class.phpmailer.php";
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Host       = $config_ip;
			$mail->SMTPAuth   = true;
			$mail->Username   = $config_email;
			$mail->Password   = $config_pass;
			$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
			$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
			$mail->Subject    = $tieude." - ".$row_setting['title_'.$lang];
			$mail->IsHTML(true);
			$mail->CharSet = "utf-8";

			
			$body = '<table>';
			$body .= '
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="2"  align="left">Thư liên hệ từ website <a href="http://'.$company_mail['website'].'">'.$company_mail['website'].'</a></th>
				</tr>
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th align="left" style="width: 150px;">Họ tên :</th><td align="left" style="width: 400px;">'.$_POST['hoten'].'</td>
				</tr>
				<tr>
					<th align="left" style="width: 150px;">Địa chỉ :</th><td align="left" style="width: 400px;">'.$_POST['diachi'].'</td>
				</tr>
				<tr>
					<th align="left" style="width: 150px;">Điện thoại :</th><td align="left" style="width: 400px;">'.$_POST['dienthoai'].'</td>
				</tr>
				<tr>
					<th align="left" style="width: 150px;">Email :</th><td align="left" style="width: 400px;">'.$_POST['email'].'</td>
				</tr>

				<tr>
					<th align="left" style="width: 150px;">Tiêu đề :</th><td align="left" style="width: 400px;">'.$tieude.'</td>
				</tr>
				<tr>
					<th align="left" style="width: 150px;">Nội dung :</th><td align="left" style="width: 400px;">'.$_POST['noidung'].'</td>
				</tr>';
			$body .= '</table>';

			$mail->Body = $body;
			$data['ten'] = (string)magic_quote($_POST['hoten']);
			$data['diachi'] = (string)magic_quote($_POST['diachi']);
			$data['dienthoai'] = (string)magic_quote($_POST['dienthoai']);
			$data['email'] = (string)magic_quote($_POST['email']);
			$data['tieude'] = (string)magic_quote($tieude);
			$data['noidung'] = (string)magic_quote($_POST['noidung']);
			$data['ngaytao'] = time();
			$d->setTable('contact');
			$d->insert($data);
			$mail->Body = $body;

			if($mail->Send())
			{
				transfer("Thông tin liên hệ được gửi.<br>Cảm ơn.", "http://".$config_url);
			} else {
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "lien-he");
			}
		}

?>
