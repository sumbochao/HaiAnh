<?php
	
	if(isset($_POST['ok-mail']))
	{
		
		$email_khachhang=$_POST['email_khachhang'];
		
		$d->reset();
		$sql_mail="SELECT email FROM table_newsletter WHERE email='".$email_khachhang."'";
		$d->query($sql_mail);
		$mail2=$d->result_array();

		if(count($mail2)>0)
		{
			$s="Gửi thất bại";
			echo '<script language="javascript"> alert("'.$s.'") </script>';
		}
		else
		{

			$email_khachhang = trim(strip_tags($email_khachhang));
			$email_khachhang = mysql_real_escape_string($email_khachhang);

			if($_SESSION['dem-moc']<3){
				$sql = "INSERT INTO  table_newsletter (email) VALUES ('$email_khachhang')";	
				if($d->query($sql)== true)
				{
					$s="Gửi thành công";
					$_SESSION['dem-moc'] = $_SESSION['dem-moc'] + 1;
					echo '<script language="javascript"> alert("'.$s.'") </script>';
				}
			}else{
				echo '<script language="javascript"> alert("Bạn không thể gửi liên lục") </script>';
			}
			
		}
		
	}
?>
<section id="mail" class="mail-top w-100 clearfix">
	<div class="container">
		<div class="box-mail">
			<h6>kết nối với kim cương hải anh</h6>
		    <form class=" w-100 o-hidden" name="nhanemail" id="nhanemail" method="post" action="index.php">
		        <input type="text" class="text-mail " name="email_khachhang" id="email_khachhang" placeholder="Nhập địa chỉ email..."/>
		        <input type="hidden" name="ok-mail" id="ok-mail" />
		        <div id="btn-mail" class="btn-mail" onclick="submitMail()">
		        	Đăng ký
		        </div>
		    </form>
		</div>
	</div>
</section>
<!-- #search -->
<?php /*<section id="mail" class="mail-top w-100 clearfix" style="background: url('<?=_upload_hinhanh_l.$bg_mail['photo']?>') no-repeat top center; background-size: cover;">
	<div class="container">
		<div class="box-mail">
			<div class="right-mail">
				<div>
					<div class="title-mail">
						<h6>Đăng ký đơn đặt hàng</h6>
					</div>
				    <div class="desc-mail">
				    	<form method="post" id="frm_contact" name="frm_contact" action="lien-he">
							<div class="w-100 clearfix">
								<div class="w-49 f-left row-contact mb-10">
									<input name="hoten" type="text" class="input" id="hoten" size="50" placeholder="Nhập họ và tên của bạn...." />
									<p class="error-text cl-red"></p>
								</div>

								<div class="w-49 f-right row-contact mb-10">
									<input name="dienthoai" type="text" class="input" id="dienthoai" size="50" placeholder="Nhập điện thoại của bạn..."  />
									<p class="error-text cl-red"></p>
								</div>
								<div class="w-49 f-right row-contact mb-10">
									<input name="email" type="text" class="input" id="email" size="50" placeholder="Nhập email của bạn..." />
									<p class="error-text cl-red"></p>
								</div>
								<div class="w-49 f-left row-contact mb-10">
									<input name="diachi" type="text"  class="input" size="50" id="diachi" placeholder="Nhập địa chỉ của bạn..." />
									<p class="error-text cl-red"></p>
								</div>
								<div class="w-100 f-left ds-none row-contact mb-10">
									<textarea name="noidung" class="noidung" id="noidung" placeholder="<?=_noidung?>" >Nội dung đang được cập nhật</textarea>
									<p class="error-text cl-red"></p>
								</div>
								<div class="row-contact">
									<input class="button1" type="button" id="btn-submit-contact" value="<?=_send?>"/>
								</div>
							</div>
						</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>*/?>
<!-- #search -->