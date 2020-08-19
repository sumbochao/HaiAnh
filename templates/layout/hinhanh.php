<div class="container">
	<div class="tt-desc">
		<div class="left_slider">
			<h3>Gallery</h3>
			<div class="hoatdong_slide">
				<?php foreach ($hinhanh_my as $k => $v) { ?>
				<div class="slide">
					<div class="hinhanh_item">
						<a data-fancybox="gallery" href="<?=_upload_hinhanh_l.$v['photo_vi']?>" title="<?=$v['ten_'.$lang]?>">
							<img src="resize/750x388/1/<?=_upload_hinhanh_l.$v['photo_vi']?>" alt="<?=$v['ten_'.$lang]?>">
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="right_slider">
			<h3>Đặt phòng</h3>
			<div class="right_slider_dc">
				<input name="ten1" type="text" class="input1" id="ten1" size="50"  placeholder="Họ tên" />
				<input name="dienthoai1" type="text" class="input1" id="dienthoai1" size="50"  placeholder="Điện thoại" />
				<input name="email1" id="email1" type="text" class="input1" size="50"  placeholder="Email" />
				<textarea name="noidung1" class="noidung1" id="noidung1"  placeholder="Nội dung" ></textarea>
				<input class="button1" type="button" id="click_gui" value="Đăng ký"/>
			</div>
		</div>
	</div>
</div>

