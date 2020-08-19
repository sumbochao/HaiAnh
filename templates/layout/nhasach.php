<div class="container">
  <div class="tt-index-cont">
    <div class="tt-title">
      <h3>Trường học</h3>
    </div>
    <div class="tt-desc ">
        <?php for($i=0;$i<count($nhasach);$i++){ ?>
        <div class="tt-product-item1 <?php if(($i+1)%5==0) echo 'mr0'; ?>">
          <div class="tt-product1">
              <div class="tt-product-img1">
                  <a href="nha-sach/<?=$nhasach[$i]['id']?>/<?=$nhasach[$i]['tenkhongdau']?>.html" title="<?=$nhasach[$i]['ten_'.$lang]?>">
                      <img src="resize/200x200/2/<?=_upload_baiviet_l.$nhasach[$i]['photo']?>" alt="<?=$nhasach[$i]['ten_'.$lang]?>">
                  </a>
              </div>
              <div class="tt-product-title1">
              <h4><a href="nha-sach/<?=$nhasach[$i]['id']?>/<?=$nhasach[$i]['tenkhongdau']?>.html" title="<?=$nhasach[$i]['ten_'.$lang]?>">
                <?=$nhasach[$i]['ten_'.$lang]?>
              </a></h4>
              <p class="price">
                Giá: 
                <span class="price">
                  <?=number_format($nhasach[$i]['giaban'],0, ',', '.')?> VNĐ
                </span>
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

    </div>
  </div>
</div>