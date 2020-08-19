<?php  if(!defined('_source')) die("Error");		
	// thanh tieu de
	$d->reset();
	$sql = "select * from #_setting limit 0,1";
	$d->query($sql);
	$company_mail = $d->fetch_array();
	
	$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';

     
	
	if(!empty($_POST)){
		
    	$hoten=(string)check_dt($_POST['hoten']);
		$dienthoai=(string)check_dt($_POST['dienthoai']);
		$diachi=(string)check_dt($_POST['diachi']);
		$email=(string)check_dt($_POST['email']);
		$noidung=(string)check_dt($_POST['noidung']);
		$city=(int)$_POST['city'];
		$dist=(int)$_POST['dist'];
		$citys = get_fetch_array("select id,ten from #_place_city where hienthi=1 and id='$city' order by id desc");
		$dists = get_fetch_array("select id,ten from #_place_dist where hienthi=1 and id='$dist' order by id desc");

    	if((int)$_POST['use_one_address']==0){
			$hoten_nguoinhan=(string)check_dt($_POST['hoten_nguoinhan']);
			$dienthoai_nguoinhan=(string)check_dt($_POST['dienthoai_nguoinhan']);
			$diachi_nguoinhan=(string)check_dt($_POST['diachi_nguoinhan']);
			$email_nguoinhan=(string)check_dt($_POST['email_nguoinhan']);
			$city_nguoinhan=(int)$_POST['city_nguoinhan'];
			$dist_nguoinhan=(int)$_POST['dist_nguoinhan'];
			$citys_nguoinhan = get_fetch_array("select id,ten from #_place_city where hienthi=1 and id='$city_nguoinhan' order by id desc");
			$dists_nguoinhan = get_fetch_array("select id,ten from #_place_dist where hienthi=1 and id='$dist_nguoinhan' order by id desc");
    	}else{
    		$hoten_nguoinhan=(string)check_dt($_POST['hoten']);
			$dienthoai_nguoinhan=(string)check_dt($_POST['dienthoai']);
			$diachi_nguoinhan=(string)check_dt($_POST['diachi']);
			$email_nguoinhan=(string)check_dt($_POST['email']);
			$city_nguoinhan=(int)$_POST['city'];
			$dist_nguoinhan=(int)$_POST['dist'];
			$citys_nguoinhan = get_fetch_array("select id,ten from #_place_city where hienthi=1 and id='$city' order by id desc");
			$dists_nguoinhan = get_fetch_array("select id,ten from #_place_dist where hienthi=1 and id='$dist' order by id desc");
    	}

		$user = $_SESSION['logging']['id'];
		$httt = $_POST['httt'];	
		settype($httt,"int");

		$data['nguoidat'] =array(
			'hoten' => $hoten, 
			'dienthoai' => $dienthoai, 
			'diachi' => $diachi, 
			'email' => $email, 
			'city' => $city, 
			'dist' => $dist
		);
		$data['nguoinhan'] =array(
			'hoten' => $hoten_nguoinhan, 
			'dienthoai' => $dienthoai_nguoinhan, 
			'diachi' => $diachi_nguoinhan, 
			'email' => $email_nguoinhan, 
			'city' => $city_nguoinhan, 
			'dist' => $dist_nguoinhan
		);

		$json_profile = json_encode($data);
	
	$coloi=false;		
	
	if ($coloi==false) {
			$mahoadon=strtoupper (ChuoiNgauNhien(6));							
			$body ='<table border="1" cellpadding="0" cellspacing="0" style="font-family:Arial, Geneva, sans-serif; font-size:12px;border-collapse: collapse; border: 1px solid #DDD;" width="100%">
				<tr style="background:#FFFFFF; border:  border: 1px solid #FFF; " >
					<th colspan="5" align="center" style="height: 65px;  border: 1px solid #DDD; padding: 10px; text-transform: uppercase; font-size: 20px;">Thông tin đơn hàng <span style="font-weight: bold;">['.$mahoadon.']</span></th>
				</tr>
				<tr style="background:#F0F0F0;">
					<th colspan="2" align="left" style="height: 35px; padding: 10px 10px;"><span style="font-weight: bold;">Thông tin người đặt hàng</span></th>
					<th width="10%" rowspan="7" style="background:#FFF;"></th>
					<th colspan="2" align="left" style="height: 35px; padding: 10px 10px;"><span style="font-weight: bold;">Thông tin người nhận hàng</span></th>
				</tr>
				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Họ tên :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$hoten.'</td>
                  	<th align="left" width="20%" style="height: 35px; padding: 10px;">Họ tên :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$hoten_nguoinhan.'</td>
				</tr>
				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Địa chỉ :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$diachi.'</td>
                  	
                  	<th align="left" width="20%" style="height: 35px; padding: 10px;">Địa chỉ :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$diachi_nguoinhan.'</td>
				</tr>
				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Điện thoại :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$dienthoai.'</td>
                  	
                  	<th align="left" width="20%" style="height: 35px; padding: 10px;">Điện thoại :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$dienthoai_nguoinhan.'</td>
				</tr>
				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Email :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$email.'</td>
                  	
                  	<th align="left" width="20%" style="height: 35px; padding: 10px;">Email :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$email_nguoinhan.'</td>
				</tr>
				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Tỉnh thành :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$citys['ten'].'</td>
                  	
                  	<th align="left" width="20%" style="height: 35px; padding: 10px;">Tỉnh thành :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$citys_nguoinhan['ten'].'</td>
				</tr>
  				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Quận huyện :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$dists['ten'].'</td>
                  	
                  	<th align="left" width="20%" style="height: 35px; padding: 10px;">Quận huyện :</th>
                  	<td width="25%" style="height: 35px; padding: 10px;">'.$dists_nguoinhan['ten'].'</td>
				</tr>
				<tr>
					<th align="left" width="20%" style="height: 35px; padding: 10px;">Ghi chú :</th>
                  	<td width="25%" colspan="4" style="height: 35px; padding: 10px;">'.$noidung.'</td>
				</tr>
				';

			$body .='</table><br/><br/>';

			 $body .='<table border="1" cellpadding="0" cellspacing="0" style="font-family:Verdana, Geneva, sans-serif; font-size:12px;border-collapse: collapse; border: 1px solid #DDD;" width="100%">';
			if(is_array($_SESSION['cart']))
			{
            	$body.='<tr bgcolor="#F0F0F0" style="color:#333;height: 55px;border-collapse: collapse; background:#F0F0F0; border: 1px solid #DDD">
					<td align="center" style="width:4%; border: 1px solid #DDD">Hình SP</td>
					<td align="center" style="border: 1px solid #DDD; padding: 0px 10px;">Tên</td>
					<td align="center" style="border: 1px solid #DDD; padding: 0px 10px;">Đơn giá</td>
					<td align="center" style="border: 1px solid #DDD; padding: 0px 10px;">Số lượng</td>
					<td align="center" style="border: 1px solid #DDD">Thành tiền</td>
				</tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);		
					$phinh=get_product_img($pid,$lang,_upload_product_l,$config_url,100);	
					$giab = get_price($pid);
					if($q==0) continue;
            		 $body.= '<tr  style="text-align: center">
						<td width="3%" align="center" style="border: 1px solid #DDD; padding: 10px;">
							'.$phinh.'
						</td>
						<td width="29%" align="center" style="border: 1px solid #DDD; padding: 10px;">'.$pname.'</td>
						<td width="29%" align="center" style="border: 1px solid #DDD; padding: 10px;">'.number_format(get_price($pid),0, ',', '.').' <sup>đ</sup></td>
						<td width="29%" align="center" style="border: 1px solid #DDD; padding: 10px;">'.$q.'</td>
						<td width="15%" align="center" style="border: 1px solid #DDD; padding: 10px;">'.number_format(get_price($pid)*$q,0, ',', '.').' <sup>đ</sup></td>';
     					$sql = "INSERT INTO  table_order_detail (id_order,id_product,ten,gia,soluong ) VALUES ('$mahoadon','$pid','$pname','$giab','$q')";	
						mysql_query($sql) or die(mysql_error());
				}
				
	            $body .='<tr>
					<td colspan="6" style="background:#F0F0F0; height:35px; text-align:right; padding:10px; border: 1px solid #DDD;">Tổng tiền(Đơn hàng chưa bao gồm phí vận chuyển): '.number_format(get_order_total(),0, ',', '.').'&nbsp;<sup>đ</sup></td>
				  </tr>';
            }
			else{
				$body.='<tr bgColor="#FFFFFF"><td>There are no items in your shopping cart!</td>';
			}
       $body.='</table>';
  			
			$ngaydangky=time();
			$tonggia=get_order_total();
			
			$sql = "INSERT INTO  table_order (id_user,madonhang,httt,tonggia,noidung,profile,hoten,diachi,email,dienthoai,city,dist,hoten_nguoinhan,diachi_nguoinhan,email_nguoinhan,dienthoai_nguoinhan,city_nguoinhan,dist_nguoinhan,ngaytao,trangthai)  VALUES ('$user','$mahoadon','$httt','$tonggia','$noidung','$json_profile','$hoten','$diachi','$email','$dienthoai','$city','$dist','$hoten_nguoinhan','$diachi_nguoinhan','$email_nguoinhan','$dienthoai_nguoinhan','$city_nguoinhan','$dist_nguoinhan','$ngaydangky','1')";	
			mysql_query($sql) or die(mysql_error());
			$iduser = mysql_insert_id();
			
			if($iduser !=''){
			
				include_once "phpMailer/class.phpmailer.php";	
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Host       = $config_ip;
				$mail->SMTPAuth   = true;
				$mail->Username   = $config_email;
				$mail->Password   = $config_pass;  
				$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
				$mail->AddAddress($_POST['email'], $row_setting['ten_'.$lang]);
				$mail->Subject    = "[Đơn hàng] - ".$row_setting['ten_'.$lang]."";
				$mail->IsHTML(true);
				$mail->CharSet = "utf-8";
				
				$mail->Body = $body;
				if($mail->Send()) {
					 unset($_SESSION['cart']); 
					transfer('Cảm ơn bạn đã đặt hàng tại website chúng tôi', "http://$config_url/index.html");
				}else
					 transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://$config_url/index.html");
				
			}
			/*if($httt==2){
				require_once("nganluong.php");
				 //Tài khoản nhận tiền
				$receiver="duyhung862000@yahoo.com";
				//Khai báo url trả về 
				$return_url="http://localhost/tich-hop-nang-cao/complete.php";
				//Giá của cả giỏ hàng 
				$price=$tonggia;
				//Mã giỏ hàng 
				$order_code=$mahoadon;
				//Thông tin giao dịch
				$transaction_info="Hãy lập trình thông tin giao dịch của bạn vào đây";
				//Khai báo đối tượng của lớp NL_Checkout
				$nl= new NL_Checkout();
				//Tạo link thanh toán đến nganluong.vn
				$url= $nl->buildCheckoutUrl($return_url, $receiver, $transaction_info,  $order_code, $price);
				redirect($url);	
			}else{
				 unset($_SESSION['cart']); 
				 transfer("Đơn hàng của bạn đã được gửi", "http://".$config_url."/".$lang."/index.html");
			}*/
			
	}
	
	}
?>