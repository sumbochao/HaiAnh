<div class="title bx-border pd-0 mg-0 w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<div class="content mt-10 mb-20 clearfix">
	<div class="desc bg-white clearfix bx-border pd-10 pt-20 pb-20">
		<div class="box-contact-index">
			<div class="contact-right mb-20 w-100 bx-border">
				<?=stripcslashes($row_detail['noidung_'.$lang])?>
		   	</div>
		   	<div class="contact-left w-100 bx-border">
				<form method="post" id="frm_contact" name="frm_contact" action="lien-he.html">
					<div class="w-100 f-left row-contact mb-10">
						<input name="hoten" type="text" class="input" id="hoten" size="50" placeholder="Nhập họ và tên của bạn...." />
						<p class="error-text cl-red"></p>
					</div>

					<div class="w-49 f-left row-contact mb-10">
						<input name="dienthoai" type="text" class="input" id="dienthoai" size="50" placeholder="Nhập điện thoại của bạn..."  />
						<p class="error-text cl-red"></p>
					</div>
					<div class="w-49 f-right row-contact mb-10">
						<input name="email" type="text" class="input" id="email" size="50" placeholder="Nhập email của bạn..." />
						<p class="error-text cl-red"></p>
					</div>
					<div class="w-100 f-left row-contact mb-10">
						<input name="diachi" type="text"  class="input" size="50" id="diachi" placeholder="Nhập địa chỉ của bạn..." />
						<p class="error-text cl-red"></p>
					</div>
					<div class="w-100 f-left row-contact mb-10">
						<input name="tieude" type="text" class="input" id="tieude" size="50" placeholder="Nhập chủ đề liên hệ...." />
						<p class="error-text cl-red"></p>
					</div>
					<div class="w-100 f-left row-contact mb-10">
						<textarea name="noidung" class="noidung" id="noidung" placeholder="<?=_noidung?>" ></textarea>
						<p class="error-text cl-red"></p>
					</div>
					<div class="row-contact">
						<input class="button bg-primary cl-white t-uppercase" type="button" id="btn-submit-contact" value="<?=_send?>"/>
						<input class="button bg-danger cl-white t-uppercase" type="button" value="<?=_reset?>" onclick="document.frm_contact.reset();" />
					</div>
				</form>
		   </div>
		</div>
	</div>

</div>

<div class="content clearfix">
	<div id="map-content">
		<?=$row_setting['toado']?>
	</div>
</div>
