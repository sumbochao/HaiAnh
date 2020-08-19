<div class="content mt-20 mb-20 clearfix">
	<div class="map-desc">
		<div class="map-right mb-20 w-50 bx-border">
			<div class="scroll-able" style="<?=(count($hethongchinhanh)>3) ? 'overflow-y: scroll':''?>">
				<?php for($i=0;$i<count($hethongchinhanh);$i++){ ?>
				<div class="item-cn cursor-pointer <?=($i==0) ? 'active':''?> mb-10" data-id="<?=$hethongchinhanh[$i]['id']?>">
					<div class="titles">
						<h3><?=$hethongchinhanh[$i]['ten_'.$lang]?></h3>
					</div>
					<div class="box-un">
						<div class="desc">
							<p>Địa chỉ: <?=$hethongchinhanh[$i]['dientich']?></p>
							<p>Hotline: <?=$hethongchinhanh[$i]['hangmuc']?></p>
							<p>Email: <?=$hethongchinhanh[$i]['chuduan']?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
	   	</div>
	   	<div class="map-left w-50 bx-border">
			<div id="map-box">
				<?php for($i=0;$i<count($hethongchinhanh);$i++){ ?>
				<div class="box-map" id="box-map<?=$hethongchinhanh[$i]['id']?>" style="<?=($i==0) ? 'display: block':'display: none'?>">
					<?=$hethongchinhanh[$i]['thongso_vi']?>
				</div>
				<?php } ?>
			</div>
	   </div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.item-cn').click(function(event) {
			var id = $(this).data('id');
			$('.item-cn').removeClass('active');
			$(this).addClass('active');
			$('.box-map').css('display', 'none');
			$('#box-map'+id).css('display', 'block');
		});
	});
</script>