<div class="content w-100 clearfix">
   <div class="show-register">
       <div class="box-register bx-border bg-white pd-20 w-100 f-left">
       		<form method="post" action="dang-nhap.html" id="frm-login" name="frm-login">
       			<div class="row-input mb-10 clearfix">
					<h3 class="ds-inline-block f-left t-uppercase"><?=$title?></h3>
					<p class="ds-inline-block f-right login">Chưa là thành viên? <a href="dang-ky.html" class="cl-blue" title="Đăng ký">Đăng ký</a> tại đây</p>
				</div>
				<div class="row-input mb-15 clearfix">
					<input type="text" class="txt-input" id="email" name="data[email]" value="<?=$email?>" placeholder="Nhập email đăng nhập....">
					<p class="error-text cl-red"><?=$error_email?></p>
				</div>
				<div class="row-input mb-15 clearfix">
					<input type="password" class="txt-input" id="password" name="data[password]" value="<?=$password?>" placeholder="Nhập mật khẩu....">
					<p class="error-text cl-red"><?=$error_password?></p>
				</div>
				<div class="row-input mb-15 clearfix">
					<p class="ds-inline-block f-right login"><a href="quen-mat-khau.html" class="cl-blue" title="Đăng ký">Quên mật khẩu?</a></p>
				</div>
				<div class="row-input t-right clearfix">
			  		<input type="button" onclick="window.location.href=''" class="button bg-light cl-gray t-uppercase" value="Thoát">
					<input type="button" value="<?=_login?>" id="btn-login" class="button bg-orange cl-white t-uppercase">
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
		$('#btn-login').click(function(event) {
			var error = true;
			var email = $('#email').val();
			var password = $('#password').val();
			
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
			if(error == false){
				$('#frm-login').submit();
			}else{
				return false;
			}
		});
	});
</script>