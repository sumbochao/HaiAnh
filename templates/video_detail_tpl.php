<div class="content mb-20 clearfix">
  <div class="detail mb-10">
    <div class="author">
     <h1 class="mg-0"><?=$title?></h1>
    </div>
    <div class="author">
      <p>Ngày <?=date('d/m/Y H:i A', $row_detail['ngaytao'])?></p>
    </div>
  </div>
  <div class="detail">
    <div id="video_loadx" class="mt1">
       <div class="video-container">
        <iframe src="http://www.youtube.com/embed/<?=youtobi($row_detail['links'])?>?rel=0&amp;wmode=transparent" allowfullscreen frameborder="0"></iframe>
      </div>
    </div>
    <?php /*
    <video id="player1" width="640" height="360" autoplay style="max-width:100%;" poster="<?=_upload_hinhanh_l.$row_detail['photo']?>" preload="none" controls playsinline webkit-playsinline>
      <source src="<?=_upload_video_l.$row_detail['video']?>" type="video/mp4">
    </video>
    */?>
  </div>
  <div class="detail mt-20">
    <?=$row_detail['mota_'.$lang]?>
  </div>
  <div class="detail mt-20">
    <div class="socialmediaicons">
        <!-- Twitter -->
        <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
        <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
        <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
        <a href="mailto:?Subject=<?=$row_setting['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
        <a href="javascript:;" onclick="window.print()" rel="nofollow" class="fa fa-print"></a>
    </div> 
  </div>
</div>

<div class="title bx-border w-100 mt-20">
      <h5 class="t-uppercase ds-inline-block p-relative">Có thể bạn quan tâm</h5>
    </div>
<div class="content mb-20 mt-10 clearfix">
   <?php if(count($tintuc_khac)>0){ ?>
   <div class="box-gallery">
        <?php for($i=0;$i<count($tintuc_khac);$i++){ ?>
        <div class="box-gallery-item">
      <div class="img">
        <a href="<?=$com?>/<?=$tintuc_khac[$i]['tenkhongdau']?>.html" title="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
          <img src="resize/560x400/1/<?=_upload_hinhanh_l.$tintuc_khac[$i]['photo']?>" alt="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
        </a>
      </div>
      <div class="desc t-center">
        <a href="<?=$com?>/<?=$tintuc_khac[$i]['tenkhongdau']?>.html" title="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
          <?=$tintuc_khac[$i]['ten_'.$lang]?>
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
