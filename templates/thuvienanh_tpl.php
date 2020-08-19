<div class="title bx-border pd-0 mg-0 bg-white w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<?php if(count($tintuc)>0){ ?>
<div class="content mt-10 w-100 clearfix">
  <div class="box-gallery">
    <?php for($i=0;$i<count($tintuc);$i++){ ?>
    <div class="box-gallery-item">
			<div class="img">
				<a href="album-cuoi/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
					<img src="resize/1100x800/1/<?=_upload_album_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
				</a>
			</div>
			<div class="desc t-center">
				<a href="album-cuoi/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
					<?=$tintuc[$i]['ten_'.$lang]?>
				</a>
			</div>
		</div>
    <?php } ?>
  </div>
</div>
<div class="content w-100 mt-20 clearfix">
  <div class="box-gallery">
    <div class="w-100 bx-border pl-10 pr-10">
      <div class="pagination t-center"><?=$paging?></div>
    </div>
  </div>
</div>
<?php }else{ ?>

<div class="content w-100 mt-20 clearfix">
  <div class="box-gallery">
    <div class="w-100 bx-border pl-10 pr-10">
      Không tìm thấy sản phẩm nào.
    </div>
  </div>
</div>
<?php } ?>