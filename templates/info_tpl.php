<script language='javascript'>
  function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }

</script>
<div class="container">
	<div class="tt-index-cont" style="margin-top: 10px;">
		<div class="tt-title">
		    <h1>Thông tin cá nhân</h1>
		</div>
		<div class="tt-desc">
			<div class="div_content">
				<form method="post" action="thong-tin-ca-nhan.html" id="frm_register" name="frm_register">
					<input type="hidden" name="ok" value="1">
					<div class="form_log">
						<div class="form_log_left">
							<div class="item_login">
								<label>Họ tên: </label>
								<input type="text" class="text" id="name" name="name" value="<?=$user[0]['ten']?>" placeholder="">
							</div>
							<div class="item_login">
								<label>Email: </label>
								<input type="text" class="text" id="email" name="email" value="<?=$user[0]['email']?>" readonly placeholder="">
							</div>
							<div class="item_login">
								<label>Giới tính: </label>
								<select name="sex" class="select_sex">
									<option value="0" <?php if($user[0]['sex']==0){echo 'selected="selected"';}?>>Nam</option>
									<option value="1" <?php if($user[0]['sex']==1){echo 'selected="selected"';}?>>Nữ</option>
							  	</select>
							</div>
							<div class="item_login">
								<label>Điện thoại: </label>
								<input type="text" class="text"  id="phone" name="phone" onKeyPress="return isNumberKey(event)" value="<?=$user[0]['dienthoai']?>" placeholder="">
							</div>
							<div class="item_login">
								<label>Địa chỉ: </label>
								<input type="text" class="text"  id="address" name="address" value="<?=$user[0]['diachi']?>" placeholder="">
							</div>
							<div class="item_login align-right">
								<input type="submit" value="<?=_capnhat?>" class="button_log">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>