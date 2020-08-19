<section id="about" class="about-top clearfix">
 <div class="box-gioithieu">
    <div class="tieude-gioithieu">
      <h4>
        <a href="gioi-thieu" title="<?=$gioithieu_index['ten']?>"><?=$gioithieu_index['ten']?></a>
      </h4>
    </div>
    <div class="box-nh mt-30">
      <div class="container">
        <div>
          <?=$gioithieu_index['mota']?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="product-bc" class="product-bc-top bg-content-top p-relative clearfix">
  <div class="container">
    <div class="desc">
      <div class="box-slide-new">
      <?php for($i=1;$i<=count($sanpham_nb_list);$i++){ ?>
        <div class="box-slide-new-item">
          <div class="box-hover-slide">
            <div class="img p-relative">
              <a href="<?=$sanpham_nb_list[$i-1]['tenkhongdau']?>" title="<?=$sanpham_nb_list[$i-1]['ten']?>">
                <img src="resize/200x160/1/<?=_upload_baiviet_l.$sanpham_nb_list[$i-1]['photo']?>" alt="<?=$sanpham_nb_list[$i-1]['ten']?>">
              </a>
            </div>
            <div class="desc t-left">
              <h5>
                <a href="<?=$sanpham_nb_list[$i-1]['tenkhongdau']?>" title="<?=$sanpham_nb_list[$i-1]['ten']?>">
                  <?=$sanpham_nb_list[$i-1]['ten']?>
                </a>
              </h5>
              <p>
                <?=catchuoi($sanpham_nb_list[$i-1]['mota'],100)?>
              </p>
              <p class="t-left mt-5">
                <a href="<?=$sanpham_nb_list[$i-1]['tenkhongdau']?>" title="<?=$sanpham_nb_list[$i-1]['ten']?>">
                  Xem thêm
                </a>
              </p>
            </div>
          </div>
        </div> 
        <?php } ?>
      </div>
    </div>
  </div>
</section>


<section id="chinhsach" class="chinhsach-top  clearfix">
  <div class="container">
    <div class="title">
      <h4 class="ds-inline-block p-relative"><a href="" class="p-relative">Dịch vụ nổi bật</a></h4>
    </div>
    <div class="desc mt-40">
      <ul class="chinhsach mt-20 clearfix">
        <?php for($i=0;$i<count($dichvu_nb);$i++){ ?>
        <li class="bx-border pd-10 f-left">
           <div class="box">
            <p class="top-img">
              <span><img src="<?=_upload_baiviet_l.$dichvu_nb[$i]['photo']?>" alt="<?=$dichvu_nb[$i]['ten']?>"></span>
            </p>
            <div class="box-mex">
              <h5><a href="dich-vu/<?=$dichvu_nb[$i]['tenkhongdau']?>" title="<?=$dichvu_nb[$i]['ten']?>"><?=$dichvu_nb[$i]['ten']?></a></h5>
              <p><?=$dichvu_nb[$i]['mota']?></p>
              <p><a href="dich-vu/<?=$dichvu_nb[$i]['tenkhongdau']?>" title="Xem thêm">Xem thêm</a></p>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>