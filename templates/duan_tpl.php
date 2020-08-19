<div class="title mt-20">
  <h3><?=$title?></h3>
</div>
<?php if(count($tintuc)>0){ ?>
<div class="content mt-10 w-100 clearfix">
  <div class="show-duan">
   <?php for($i=0;$i<count($tintuc);$i++){ ?>
    <div class="box-duan-item">
        <div class="img">
          <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
            <img  class="insImageload" data-load="true" data-src="resize/270x200/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
          </a>
        </div>
        <div class="desc">
            <h4><a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
              <?=$tintuc[$i]['ten_'.$lang]?>
            </a></h4>
            <p class="t-center">
              Diện tích: <?=$tintuc[$i]['dientich']?>
            </p>
            <p class="t-center">
              <span>
                <i class="fa fa-file"></i> <?=$tintuc[$i]['hangmuc']?>
              </span>
              <a href="<?=$tintuc[$i]['bando']?>" target="_blank">
                <i class="fa fa-map-marker"></i> Bản đồ
              </a>
            </p>
        </div>
    </div>
    <?php } ?>
  </div>
</div>
<div class="content w-100 mt-20 clearfix">
  <div class="w-100 bx-border">
    <div class="pagination t-center"><?=$paging?></div>
  </div>
</div>
<?php }else{ ?>

<div class="content w-100 mt-20 clearfix">
  <div class="w-100 bx-border">
    Không tìm thấy sản phẩm nào.
  </div>
</div>

<?php } ?>