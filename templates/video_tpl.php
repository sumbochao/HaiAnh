<div class="title bx-border pd-0 mg-0 bg-white w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>

<div class="content mb-20 mt-10 clearfix">
   <?php if(count($tintuc)>0){ ?>
    <div class="box-gallery">
        <?php for($i=0;$i<count($tintuc);$i++){ ?>
        <div class="box-gallery-item">
			<div class="img">
				<a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
					<img src="resize/560x400/1/<?=_upload_hinhanh_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
				</a>
			</div>
			<div class="desc t-center">
				<a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
					<?=$tintuc[$i]['ten_'.$lang]?>
				</a>
			</div>
		</div>
        <?php } ?>
    </div>
    <div class="tintuc-desc f-left">
      <div class="w-100 bx-border pl-15 pr-15">
        <div class="pagination t-center"><?=$paging?></div>
      </div>
    </div>
   <?php }else{ ?>
    <div class="tintuc-desc f-left">
      <div class="w-100 bx-border pl-15 pr-15">
        <?=_tb?>
      </div>
    </div>  
   <?php } ?>
</div>
<?php /*

<div class="container">
	<div class="tt-index-cont">
		<div class="tt-title">
		    <h1><?=$title?></h1>
		</div>
		<div class="tt-desc">
			<div class="div_content">
				<?php for($i=0;$i<count($tintuc);$i++){ ?>
				<div class="item_gallery">
					<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?=youtobi($tintuc[$i]['links'])?>?autoplay=1"" title="<?=$tintuc[$i]['ten_'.$lang]?>">
						<img src="http://i1.ytimg.com/vi/<?=youtobi($tintuc[$i]['links'])?>/0.jpg" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
					</a>
					<h3>
						<a class="fancybox-media" href="http://www.youtube.com/watch?v=<?=youtobi($tintuc[$i]['links'])?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
							<?=$tintuc[$i]['ten_'.$lang]?>
						</a>
					</h3>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
*/?>