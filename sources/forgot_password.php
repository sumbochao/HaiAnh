<?php
	$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
	if(!empty($_POST)){
		$form = $_POST['data'];
		$d->reset();
		$sql = "select * from table_thanhvien where email='".(string)$form['email']."'";
		$d->query($sql);
		$row_user = $d-> fetch_array();

		if($row_user){
            $password = ChuoiNgauNhien(6); 
            $sql_update_userid = "UPDATE table_thanhvien SET password = '".md5($password)."' WHERE  id = ".$row_user['id']."";
            $result_update_userid = mysql_query($sql_update_userid) or die("Not query sql_update_userid");

            include_once "phpMailer/class.phpmailer.php";   
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host       = $config_ip;
            $mail->SMTPAuth   = true; 
            $mail->Username   = $config_email;
            $mail->Password   = $config_pass;  
            $mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
            $mail->AddAddress($form['email'],$row_setting['ten_'.$lang]);
            $mail->Subject    = "[Activation] - Thay đổi mật khẩu!!!";
            $mail->IsHTML(true);
            //Thiết lập định dạng font chữ
            $mail->CharSet = "utf-8";
            

            $body = '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="background-color:#f2f2f2;font-family:Helvetica,Arial,sans-serif;table-layout:fixed">
                        <tbody>
                            <tr>
                                <td align="center" style="padding-top:30px;padding-bottom:30px">
                                    <a target="_blank">
                                        '.$row_setting['ten_'.$lang].'
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:600px">
                                            <tbody>
                                                <tr>
                                                    <td style="background:#f8f8f8;text-align:center;color:#8d8d8d;font-size:14px;padding-top:18px;padding-bottom:18px;font-family:Helvetica,Arial,sans-serif">Đây là một email tự động, xin vui lòng đừng trả lời</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="padding-top:50px;padding-left:70px;padding-right:70px;background-color:#fff">

                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;font-weight:200">
                                                            <tbody>

                                                                <tr>
                                                                    <td style="padding:5px 0" align="center">
                                                                        <img src="http://'.$config_url.'/images/success.png" height="163" alt="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding:35px 0">
                                                                        <h1 style="font-size:30px;line-height:36px;color:#606060!important;margin:0;font-weight:bold;text-align:center;font-family:Helvetica,Arial,sans-serif">
                                                                            THAY ĐỔI MẬT KHẨU
                                                                        </h1>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding:10px 0">
                                                                        <p style="font-size:15px;line-height:22px;color:#606060!important;font-family:Helvetica,Arial,sans-serif;margin:0;padding:0;text-align:center">
                                                                            Bạn đã yêu cầu thay đổi mật khẩu cho tài khoản
                                                                            <br>
                                                                            <strong><a style="color:#0099FF!important; text-decoration: none;" href="mailto:'.$form['email'].'" target="_blank">'.$form['email'].'</a></strong>
                                                                            <br>
                                                                            <br>Mật khẩu của bạn được thay đổi là: '.$password.'
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td style="padding:20px 0 20px">
                                                                        <p style="font-size:15px;line-height:22px;color:#606060!important;font-family:Helvetica,Arial,sans-serif;margin:0;padding:0">
                                                                            Đối với bất kỳ vấn đề, liên hệ với dịch vụ khách hàng của chúng tôi 24/7: <a style="color:#4fc0e8" href="mailto:'.$row_setting['email'].'" target="_blank">'.$row_setting['email'].'</a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding:20px 0 50px;background:#fff">
                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background-color:#e2e7eb;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px;text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;line-height:18px">
                                                                                        Khi liên hệ với bộ phận hỗ trợ, hãy đảm bảo đề cập đến ID người dùng của bạn: <strong>'.$row_user['userid'].'</strong>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="justify" style="padding:20px 15px 5px">
                                                        <table width="100%" style="text-align:center;font-size:11px;border-top:1px solid #13c1c9;border-bottom:1px solid #13c1c9">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="padding:10px 0">
                                                                        <a href="http://'.$config_url.'/lien-he.html" style="text-decoration:none;font-weight:bold;color:#262626;font-family:Helvetica,Arial,sans-serif">SUPPORT</a>
                                                                    </td>
                                                                    <td style="padding:10px 0">
                                                                        <a href="'.$row_setting['facebook'].'" style="text-decoration:none;font-weight:bold;color:#262626;font-family:Helvetica,Arial,sans-serif">FACEBOOK</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px 70px 0px">
                                                        <p style="font-size:14px;color:#9a9a9a;line-height:22px;text-align:center;margin-bottom:15px;font-family:Helvetica,Arial,sans-serif">
                                                            © 2017 '.$row_setting['ten_'.$lang].'
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="100%" style="text-align:center;font-size:11px;padding-bottom:30px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="padding-left:90px;padding-right:10px">
                                                                        <a href="http://'.$config_url.'" style="text-decoration:none;color:#9a9a9a;font-family:Helvetica,Arial,sans-serif">'.$row_setting['website'].'</a>
                                                                    </td>
                                                                    <td style="padding-right:10px">
                                                                        <a href="http://'.$config_url.'/dieu-khoan-su-dung.html" style="text-decoration:none;color:#9a9a9a;font-family:Helvetica,Arial,sans-serif">Điều khoản sử dụng</a>
                                                                    </td>
                                                                    <td style="padding-right:90px">
                                                                        <ahref="http://'.$config_url.'/chinh-sach-bao-mat.html" style="text-decoration:none;color:#9a9a9a;font-family:Helvetica,Arial,sans-serif">Chính sách bảo mật</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                    </table>';
            
            $mail->Body = $body;
            
            if($mail->Send()) {
                $status = 0;
                $message = "Mật khẩu đã được gửi vào email của bạn.";
            }else{
                $status = 1;
                $message = "Hệ thống phát sinh lỗi gửi mail.";
            }
        }else{
            $status = 1;
            $message = "Email không tồn tại.";
        }
	}
?>