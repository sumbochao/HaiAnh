<script type="text/javascript">
function checkValue(){

	if($('#email').val() == ''){
		alert('Chưa nhập email');
		$('#pass').focus();
		return false;	
	}
	document.frm_re_pass.submit();	
}
</script>

<div class="container">
	<div class="tt-index-cont" style="margin-top: 10px;">
		<div class="tt-title">
		    <h1>Quên mật khẩu</h1>
		</div>
		<div class="tt-desc">
			<div class="div_content">
				<form method="post" action="quen-mat-khau.html" id="frm_re_pass" name="frm_re_pass">
					<div class="form_log">
						<div class="form_log_left">
							<div class="item_login">
								<label>Email đăng nhập: </label>
								<input type="text" class="text" name="email" id="email" value="" placeholder="">
							</div>
							<div class="item_login align-right">
								<input type="button" value="<?=_capnhat?>" class="button_log" onclick="checkValue()" />
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>