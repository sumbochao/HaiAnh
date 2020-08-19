<section id="cauchuyen" class="cauchuyen-top w-100 clearfix">
  <?php if($source=='index' && count($cauchuyen_xemnhieu)>0){ ?>
  <div class="container">
    <div class="title bx-border w-100 mb-20">
      <h3>Câu chuyện trang sức</h3>
    </div>
    <div class="content w-100 mt-20 clearfix">
      <div class="box-tintuc slickTinTuc">
        <?php for($i=1;$i<=count($cauchuyen_xemnhieu);$i++){ ?>
        <div>
          <div class="box-tintuc-item">
            <div class="img">
              <a href="dich-vu/<?=$cauchuyen_xemnhieu[$i-1]['tenkhongdau']?>" title="<?=$cauchuyen_xemnhieu[$i-1]['ten']?>">
                <img class="insImageload" data-load="true" data-src="resize/310x310/1/<?=_upload_baiviet_l.$cauchuyen_xemnhieu[$i-1]['photo']?>" alt="<?=$cauchuyen_xemnhieu[$i-1]['ten']?>">
              </a>
            </div>
            <div class="desc mt-10">
              <p>
                <?=catchuoi(strip_tags($cauchuyen_xemnhieu[$i-1]['mota']),150)?>
              </p>
              <h5><a href="dich-vu/<?=$cauchuyen_xemnhieu[$i-1]['tenkhongdau']?>" title="<?=$cauchuyen_xemnhieu[$i-1]['ten']?>">
                <?=$cauchuyen_xemnhieu[$i-1]['ten']?>

              </a></h5>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php } ?>
</section>

<section id="tintuc" class="tintuc-top w-100 clearfix">
  <?php if($source=='index' && count($tintuc_noibat)>0){ ?>
  <div class="container">
    <div class="title bx-border w-100 mb-20">
      <h3>Blog trang sức</h3>
    </div>
    <div class="content w-100 mt-20 clearfix">
      <div class="box-tintuc slickTinTuc">
        <?php for($i=1;$i<=count($tintuc_noibat);$i++){ ?>
        <div>
          <div class="box-tintuc-item">
            <div class="img">
              <a href="dich-vu/<?=$tintuc_noibat[$i-1]['tenkhongdau']?>" title="<?=$tintuc_noibat[$i-1]['ten']?>">
                <img class="insImageload" data-load="true" data-src="resize/310x310/1/<?=_upload_baiviet_l.$tintuc_noibat[$i-1]['photo']?>" alt="<?=$tintuc_noibat[$i-1]['ten']?>">
              </a>
            </div>
            <div class="desc mt-10">
              <p>
                <?=catchuoi(strip_tags($tintuc_noibat[$i-1]['mota']),150)?>
              </p>
              <h5><a href="dich-vu/<?=$tintuc_noibat[$i-1]['tenkhongdau']?>" title="<?=$tintuc_noibat[$i-1]['ten']?>">
                <?=$tintuc_noibat[$i-1]['ten']?>

              </a></h5>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php } ?>
</section>