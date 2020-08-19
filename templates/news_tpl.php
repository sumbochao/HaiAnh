<div class="title">
  <h1><?=$title?></h1>
</div>
<div class="content mb-20 mt-20 clearfix">
  <?php if(count($tintuc)>0){ ?>
  <div class="tintuc-desc f-left">
    <?php for($i=0;$i<count($tintuc);$i++){ ?>
    <div class="tintuc-item bx-border pl-15 pr-15 mb-20 f-left">
      <div class="box-tinx">
        <div class="img w-100 f-left">
          <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
            <img src="<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
          </a>
        </div>
        <div class="desc w-100 t-left f-left">
          <h3>
            <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>"><?=$tintuc[$i]['ten_'.$lang]?></a>
          </h3>
          <p>
            <?=catchuoi($tintuc[$i]['mota_'.$lang],200)?>
          </p>
          <p>
            <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">Xem thêm &gt;&gt; </a>
          </p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="tintuc-desc pt-20 f-left">
    <div class="w-100 bx-border pl-15 pr-15">
      <div class="pagination t-center"><?=$paging?></div>
    </div>
  </div>
  <?php }else{ ?>
  <div class="desc f-left">
    <div class="w-100 bx-border">
      <?=_tb?>
    </div>
  </div>
 <?php } ?>
</div>