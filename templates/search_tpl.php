<div class="title w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<?php if(count($tintuc)>0){ ?>
<div class="content mt-20 w-100 clearfix">
  <div class="show-product">
   <?php for($i=0;$i<count($tintuc);$i++){ ?>
    <div class="product-slide cl-4 mb-20 bx-border product-hover f-left">
          <div class="product w-100">
            <div class="product-img">
              <a href="san-pham/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                <img class="insImageload" data-load="true" data-src="resize/276x294/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
              </a>
              <span class="cart" onclick="addCart(<?=$tintuc[$i]['id']?>,1,0)"><img src="images/icon-cart-add.png" alt="add cart"></span>
              <?php if($tintuc[$i]['giacu']!=0 && $tintuc[$i]['giacu']!=$tintuc[$i]['giaban']){ ?><span class="giamgia"><?=giamgia($tintuc[$i]['giacu'],$tintuc[$i]['giaban'])?></span><?php } ?>
            </div>
            <div class="product-title">
              <h4><a href="san-pham/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                <?=$tintuc[$i]['ten_'.$lang]?>
              </a></h4>
              <p class="t-center">
               <span class="price"><?=($tintuc[$i]['giaban']!=0) ? number_format($tintuc[$i]['giaban'],0, ',', '.').' đ' : 'Liên hệ: '.$row_setting['hotline'] ?></span>
              <?php if($tintuc[$i]['giacu']!=0){ ?>
              <span class="price-old td-line-through"><?=($tintuc[$i]['giacu']!=0) ? number_format($tintuc[$i]['giacu'],0, ',', '.').' đ' : 'Liên hệ: '.$row_setting['hotline'] ?></span>
              <?php } ?>
              </p>
            </div>
          </div>
        </div>
    <?php } ?>
  </div>
</div>
<div class="content w-100 mt-20 clearfix">
  <div class="w-100 bx-border">
    <div class="pagination t-center"><?=$paging?></div>
  </div>
</div>
<?php }else{ ?>

<div class="content w-100 mt-20 clearfix">
  <div class="w-100 bx-border">
    Không tìm thấy sản phẩm nào.
  </div>
</div>

<?php } ?>