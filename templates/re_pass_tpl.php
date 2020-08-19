<script type="text/javascript">
	
	function checkValue(){
		
		if($('#oldpass').val() == ''){
			alert('Chưa nhập mật khẩu cũ');
			$('#oldpass').focus();
			return false;	
		}
		if($('#pass').val() == ''){
			alert('Chưa nhập mật khẩu mới');
			$('#pass').focus();
			return false;	
		}
		if($('#repass').val() == ''){
			alert('Chưa nhập lại mật khẩu');
			$('#repass').focus();
			return false;	
		}

		if($('#repass').val() != $('#pass').val()){
			alert('Mật khẩu mới và mật khẩu xác nhận chưa trùng khớp');
			$('#repass').focus();
			return false;	
		}

		document.frm_re_pass.submit();
		
	}
	
</script>
<div class="tt-index-cont">
	<div class="tt-right-title">
		<h1>Đổi mật khẩu tài khoản</h1>
	</div>
	<div class="tt-right-desc">
		<form method="post" action="doi-mat-khau.html" id="frm_re_pass" name="frm_re_pass">
			<div class="form_log">
				<div class="form_log_left">
					<table cellspacing="10" width="100%">
						<tr>
							<td><span style="color:#036;">Email</span></td>
							<td><b style="color: #ff5555"><?=$_SESSION['logging']['email']?></b></td>
						</tr>  
						<tr>
							<td><span style="color:#036;"><?=_oldpass?></span></td>
							<td><input type="password" name="oldpass" id="oldpass" value="" class="input_log" /></td>
						</tr>
						<tr>
							<td><span style="color:#036;"><?=_newpass?></span></td>
							<td><input type="password" name="pass" id="pass" value="" class="input_log" /></td>
						</tr>
						<tr>
							<td><span style="color:#036;">Xác nhận mật khẩu</span></td>
							<td><input type="password" name="repass" id="repass" value="" class="input_log" /></td>
						</tr>
						<tr>
							<td></td>
							<td ><input type="button" value="<?=_capnhat?>" class="button_log" onclick="checkValue()" /></td>
						</tr>
					</table>
				</div>
			</div>
		</form>
	</div>
</div>