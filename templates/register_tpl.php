<div class="content w-100 clearfix">
   <div class="show-register">
       <div class="box-register bx-border bg-white pd-20 w-100 f-left">
       		<form method="post" action="dang-ky.html" id="frm-register" name="frm-register">
       			<div class="row-input mb-10 clearfix">
					<h3 class="ds-inline-block f-left t-uppercase"><?=$title?></h3>
					<p class="ds-inline-block f-right login">Đã là thành viên? <a href="dang-nhap.html" class="cl-blue" title="Đăng nhập">Đăng nhập</a> tại đây</p>
				</div>
				<div class="row-input mb-15 clearfix">
					<input type="text" class="txt-input" id="hoten" name="data[hoten]" value="" placeholder="Họ tên của bạn">
					<p class="error-text cl-red"></p>
				</div>
				<div class="row-input mb-15 clearfix">
					<input type="text" class="txt-input" id="email" name="data[email]" value="" placeholder="Email đăng nhập">
					<p class="error-text cl-red"></p>
				</div>
				<div class="row-input mb-15 clearfix">
					<input type="password" class="txt-input" id="password" name="data[password]" value="" placeholder="Mật khẩu">
					<p class="error-text cl-red"></p>
				</div>
				<div class="row-input mb-15 clearfix">
					<input type="password" class="txt-input" id="password-confirm" name="data[password-confirm]" value="" placeholder="Xác nhận mật khẩu">
					<p class="error-text cl-red"></p>
				</div>

				<div class="row-input mb-15 clearfix">
					<p>
						Bằng việc đăng kí, bạn đã đồng ý về <a href="dieu-khoan-su-dung" class="cl-orange" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a> &amp; <a href="chinh-sach-bao-mat" class="cl-orange" title="Chính sách bảo mật">Chính sách bảo mật</a>
					</p>
				</div>
				<div class="row-input t-right clearfix">
			  		<input type="button" onclick="window.location.href=''" class="button bg-light cl-gray t-uppercase" value="Thoát">
					<input type="button" value="<?=_register?>" id="register" class="button bg-orange cl-white t-uppercase">
				</div>
       		</form>
       </div>
    </div>
</div>
<script type="text/javascript">
	function validateEmail($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  return emailReg.test( $email );
	}

	$(document).ready(function() {
		$('#register').click(function(event) {
			var error = true;
			var hoten = $('#hoten').val();
			var email = $('#email').val();
			var password = $('#password').val();
			var password_confirm = $('#password-confirm').val();
			
			if(hoten==''){
				error = true;
				$('#hoten').addClass('has-error');
				$('#hoten').next('p').html('Quý khách chưa nhập họ tên');
				return false;
			}else{
				error = false;
				$('#hoten').removeClass('has-error');
				$('#hoten').next('p').html('');
			}
			
			if(email==''){
				error = true;
				$('#email').addClass('has-error');
				$('#email').next('p').html('Quý khách chưa nhập email');
				return false;
			}else{
				if(!validateEmail(email)){
					error = true;
					$('#email').addClass('has-error');
					$('#email').next('p').html('Email không đúng định dạng');
					return false;
				}else{
					error = false;
					$('#email').removeClass('has-error');
					$('#email').next('p').html('');
				}
			}
			if(password==''){
				error = true;
				$('#password').addClass('has-error');
				$('#password').next('p').html('Quý khách chưa nhập mật khẩu');
				return false;
			}else{
				error = false;
				$('#password').removeClass('has-error');
				$('#password').next('p').html('');
			}
			if(password_confirm==''){
				error = true;
				$('#password-confirm').addClass('has-error');
				$('#password-confirm').next('p').html('Quý khách chưa nhập mật khẩu xác nhận');
				return false;
			}else{
				error = false;
				$('#password-confirm').removeClass('has-error');
				$('#password-confirm').next('p').html('');
			}

			if(password_confirm!=password){
				error = true;
				$('#password-confirm').addClass('has-error');
				$('#password-confirm').next('p').html('Mật khẩu và Mật khẩu xác nhận không giống nhau');
				return false;
			}else{
				error = false;
				$('#password-confirm').removeClass('has-error');
				$('#password-confirm').next('p').html('');
			}
			if(error == false){
				$('#frm-register').submit();
			}else{
				return false;
			}
		});
	});
</script>