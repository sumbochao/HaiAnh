<div class="title bx-border pd-0 mg-0 bg-white w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<?php if(count($tintuc)>0){ ?>
<div class="content w-100 clearfix">
  <div class="slider_page">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1366px;height:550px;overflow:hidden;visibility:hidden;">
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1366px;height:550px;overflow:hidden;">
          <?php for($i=0;$i<count($tintuc);$i++){ ?>
          <div data-b="0">
              <img data-u="image" src="resize/1366x550/1/<?=_upload_album_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>"/>
          </div>
          <?php } ?>
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:16px;height:16px;">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="b" cx="8000" cy="8000" r="5800"></circle>
              </svg>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
      </div>
    </div>
  </div>
</div>
<div class="content w-100 mt-20 clearfix">
  <div class="detail">
    <?=$row_detail['mota_'.$lang]?>
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




<div class="title bx-border pd-0 mg-0 bg-white w-100">
  <h5 class="t-uppercase ds-inline-block p-relative">Album liên quan</h5>
</div>
<?php if(count($tintuc_khac)>0){ ?>
<div class="content mt-10 w-100 clearfix">
  <div class="box-gallery">
    <?php for($i=0;$i<count($tintuc_khac);$i++){ ?>
    <div class="box-gallery-item">
      <div class="img">
        <a href="album-cuoi/<?=$tintuc_khac[$i]['tenkhongdau']?>" title="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
          <img src="resize/1100x800/1/<?=_upload_album_l.$tintuc_khac[$i]['photo']?>" alt="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
        </a>
      </div>
      <div class="desc t-center">
        <a href="album-cuoi/<?=$tintuc_khac[$i]['tenkhongdau']?>" title="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
          <?=$tintuc_khac[$i]['ten_'.$lang]?>
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
      Không có album nào liên quan.
    </div>
  </div>
</div>
<?php } ?>







<?php /*
 <div class="box-gallery">
        <?php for($i=0;$i<count($tintuc);$i++){ ?>
        <div class="box-gallery-item1">
          <div class="img">
            <a data-fancybox="fancybox" href="<?=_upload_album_l.$tintuc[$i]['photo']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
              <img src="<?=_upload_album_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
            </a>
          </div>
        </div>
        <?php } ?>
    </div>
*/?>