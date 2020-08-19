<footer id="footer-content" class="footer-content bg-content-top p-relative pt-20 pb-20 clearfix">
  <div class="container">
    <div class="box-footer">
      <div class="item-footer bx-border">
        <div class="desc-footer">
          <p><a href="" title="<?=$row_setting['title_'.$lang]?>" class="ds-block"><img src="<?=_upload_hinhanh_l.$logo_footer['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a></p>
        </div>
      </div>
      <div class="item-footer bx-border">
        <div class="title-footer">
          <h6>Liên hệ</h6>
        </div>
        <div class="desc-footer">
          <?=$footer['noidung']?>
        </div>
      </div>
      <div class="item-footer bx-border">
        <div class="title-footer">
          <h6>Chính sách</h6>
        </div>
        <div class="desc-footer">
          <?php for($i=0;$i<count($chinhsach_menu);$i++){   ?>
          <p class="link">
            <a href="<?=$chinhsach_menu[$i]['type']?>/<?=$chinhsach_menu[$i]['tenkhongdau']?>" title="<?=$chinhsach_menu[$i]['ten']?>"><?=$chinhsach_menu[$i]['ten']?></a>
          </p>
          <?php } ?>
        </div>
      </div>
      <div class="item-footer bx-border t-center">
        <?php /*<div class="title-footer">
          <h6>Kiến thức về kim cương</h6>
        </div>
        <div class="desc-footer">
          <?php for($i=0;$i<count($kienthuc_xemnhieu);$i++){   ?>
          <p class="link">
            <a href="<?=$kienthuc_xemnhieu[$i]['type']?>/<?=$kienthuc_xemnhieu[$i]['tenkhongdau']?>" title="<?=$kienthuc_xemnhieu[$i]['ten']?>"><?=$kienthuc_xemnhieu[$i]['ten']?></a>
          </p>
          <?php } ?>
        </div>*/?>
        <div class="desc-footer mt-50">
          <p class=" t-center-i">
            <?php for($i=0;$i<count($mangxahoi_ft);$i++){   ?>
            <a href="<?=$mangxahoi_ft[$i]['link']?>" title="<?=$mangxahoi_ft[$i]['ten_'.$lang]?>">
              <img class="mxh" src="<?=_upload_hinhanh_l.$mangxahoi_ft[$i]['photo_vi']?>" alt="<?=$mangxahoi_ft[$i]['ten_'.$lang]?>">
            </a>
            <?php } ?>
          </p>

          <p class="link t-center-i">
            <a href="<?=$bocongthuong['link']?>" title="<?=$row_setting['ten_vi']?>">
              <img  src="<?=_upload_hinhanh_l.$bocongthuong['photo']?>" alt="<?=$row_setting['ten_vi']?>">
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="content-copy mt-20">
      <p class="copy-text">2018 Copyright &copy; <?=$row_setting['ten_'.$lang]?> . All rights reserved. Design by <a href="//<?=$config['link-web']?>" target="_blank"><?=$config['link-web']?></a></p>
      <p class="copy-text"><?=_online?>: <?php $count = count_online(); echo $count['dangxem'];?> | <?=_today?>: <?=$today_visitors?> | <?=_month?>: <?=$month_visitors?> | <?=_visited?>: <?=$all_visitors?></p>
    </div>
  </div>
</footer>
