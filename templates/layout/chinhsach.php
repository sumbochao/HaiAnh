<section id="chinhsach" class="chinhsach-top clearfix">
	<div class="container">
		<div class="title">
	      <h3>Giá trị cốt lỗi</h3>
	    </div>
		<div class="box-csach">
			<div class="chinhsach">
				<?php for($i=0;$i<count($thongtinslider);$i++){ ?>
				<div class="al-chinh bx-border pd-10 f-left">
					<div class="info_policy cursor-pointer clearfix" onclick="window.location.href='<?=$thongtinslider[$i]['link']?>'">
						<span class="name-icon f-left">
							<img src="resize/75x74/2/<?=_upload_hinhanh_l.$thongtinslider[$i]['photo']?>" alt="<?=$thongtinslider[$i]['ten']?>">
						</span>
						<div class="description f-left">
							<h4><?=$thongtinslider[$i]['ten']?></h4>
							<p><?=$thongtinslider[$i]['mota']?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
