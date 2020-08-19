<div class="content mt-20">
  <div class="other-news">
    <div class="detail" id="div_print">
      <div class="detail mb-10">
        <div class="author">
         <h1 class="mg-0"><?=$title?></h1>
        </div>
        <div class="author">
          <p>Đăng bởi: <strong>Admin</strong>, ngày <?=date('d/m/Y H:i A', $row_detail['ngaytao'])?></p>
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
