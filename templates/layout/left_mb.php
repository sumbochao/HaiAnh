<script type="text/javascript">
	$(document).ready(function(){
		$('.tt-menudanhmuc li').hover(function(){
			$(this).find('ul:first').css({visibility: "visible", display: "none"}).slideDown(500);	
		}, function(){
			$(this).find('ul:first').css({visibility: "hidden"}).hide(300);	
		});
	});
</script>
<div class="tt-leftsub-dm">
	<div class="tt-title-left">
		<h2><span>Danh mục sản phẩm</span></h2>
	</div>
	<div class="tt-desc-left">
		<ul class="dm_sp">
			<?php for($i=0;$i<count($danhmuc_splist);$i++){ ?>
			<li>
				<a href="san-pham/<?=$danhmuc_splist[$i]['tenkhongdau']?>" title="<?=$danhmuc_splist[$i]['ten_'.$lang]?>">
					<p><?=$danhmuc_splist[$i]['ten_'.$lang]?></p>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>

