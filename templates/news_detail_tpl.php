<div class="content mb-20 clearfix">
  <div class="other-news">
    <div class="detail" id="div_print">
      <div class="detail mb-10">
        <div class="author">
         <h1 class="mg-0"><?=$title?></h1>
        </div>
        <div class="author">
          <p>Đăng bởi: <strong><?=getAuthor($row_detail['adminup'])?></strong>, ngày <?=date('d/m/Y H:i A', $row_detail['ngaytao'])?></p>
        </div>
      </div>
      <div class="detail" >
        <?=stripcslashes($row_detail['noidung_'.$lang])?>
      </div>
    </div>
    <div class="detail mt-20">
      <div class="socialmediaicons">
          <!-- Twitter -->
          <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
          <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
          <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
          <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
          <a href="javascript:;" onclick="printdiv('div_print');" rel="nofollow" class="fa fa-print"></a>
      </div>
    </div>
  </div>
</div>

<div class="title mt-20">
  <h3>Có thể bạn quan tâm</h3>
</div>
<div class="content mb-20 mt-20 clearfix">
  <?php if(count($tintuc)>0){ ?>
  <div class="tintuc-desc f-left">
    <?php for($i=0;$i<count($tintuc);$i++){ ?>
    <div class="tintuc-item bx-border pl-15 pr-15 mb-20 f-left">
      <div class="img w-100 f-left">
        <a href="<?=$tintuc[$i]['type']?>/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
          <img src="resize/440x400/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
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
    <?php } ?>
  </div>
  <div class="tintuc-desc pt-20 f-left">
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