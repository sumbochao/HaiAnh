<div class="content mb-20 clearfix">
   <div class="dichvu-left f-left">
     <ul class="menu-left">
      <?php for($i=0;$i<count($danhmuc_dv);$i++){ ?>
       <li class="<?=($_GET['idl']==$danhmuc_dv[$i]['tenkhongdau']) ? 'active':''?>"><a href="dich-vu/<?=$danhmuc_dv[$i]['tenkhongdau']?>" title="<?=$danhmuc_dv[$i]['ten_'.$lang]?>"><?=$danhmuc_dv[$i]['ten_'.$lang]?></a></li>
      <?php } ?>
     </ul>
   </div>
   <div class="dichvu-right f-right">
      <div class="detail mb-10">
        <div class="author">
         <h1><?=$title?></h1>
        </div>
        <div class="author">
          <p>Đăng bởi: <strong>Admin</strong>, ngày <?=date('d/m/Y H:i A', $row_detail['ngaytao'])?></p>
        </div>
      </div>
      <div class="detail">
        <?=stripcslashes($row_detail['noidung_'.$lang])?>
      </div>
      <div class="detail mt-20">
        <div class="socialmediaicons">
            <!-- Twitter -->
            <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
            <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
            <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
            <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
            <a href="javascript:;" onclick="window.print()" rel="nofollow" class="fa fa-print"></a>
        </div> 
      </div>
      <div class="title brt-none bx-border pd-10 pb-5 w-100 mb-10 t-center">
        <h6 class="t-uppercase ds-inline-block p-relative pd-0 mg-0">Có thể bạn quan tâm</h6>
      </div>
      <div class="content mb-20 clearfix">
       <?php if(count($tintuc_khac)>0){ ?>
       <div class="tintuc-desc f-left">
          <?php for($i=0;$i<count($tintuc_khac);$i++){ ?>
          <div class="tintuc-item bx-border pl-15 pr-15 mb-20 f-left">
            <div class="img w-100 f-left">
              <a href="<?=$com?>/<?=$tintuc_khac[$i]['tenkhongdau']?>.html" title="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
                <img src="resize/1100x800/1/<?=_upload_baiviet_l.$tintuc_khac[$i]['photo']?>" alt="<?=$tintuc_khac[$i]['ten_'.$lang]?>">
              </a>
            </div>
            <div class="desc w-100 t-center f-left">
              <a href="<?=$com?>/<?=$tintuc_khac[$i]['tenkhongdau']?>.html" title="<?=$tintuc_khac[$i]['ten_'.$lang]?>"><?=$tintuc_khac[$i]['ten_'.$lang]?></a>
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
   </div>
</div>