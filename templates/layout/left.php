<?php if ($template=='product_detail'){ ?>
<div class="left-item w-100 mb-10">
	<div class="title-left">
		<h2>Mới cập nhật</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="box-product">
          <?php for($i=0;$i<count($product_nb);$i++){ ?>
             <div class="box-product-item">
              <div class="img">
                <a href="san-pham/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">
                  <img src="resize/82x50/2/<?=_upload_baiviet_l.$product_nb[$i]['photo']?>" alt="<?=$product_nb[$i]['ten']?>">
                </a>
              </div>
              <div class="desc t-left">
                <h5><a href="san-pham/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">
                  <?=catchuoi($product_nb[$i]['ten'],30)?>
                </a></h5>
                <p>
                  	<span class="price"><?=($product_nb[$i]['giaban']!=0) ? number_format($product_nb[$i]['giaban'],0, ',', '.').' đ' : 'Liên hệ' ?></span>
                </p>
            	<?php if($product_nb[$i]['giacu']!=0){ ?>
              	<p><span class="price-old td-line-through"><?=($product_nb[$i]['giacu']!=0) ? number_format($product_nb[$i]['giacu'],0, ',', '.').' đ' : 'Liên hệ' ?></span></p>
              	<?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
	</div>
</div>	
<div class="left-item w-100 mb-10">
	<div class="title-left">
		<h2>Sản phẩm liên quan</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="box-product">
          <?php for($i=0;$i<count($tintuc);$i++){ ?>
             <div class="box-product-item">
              <div class="img">
                <a href="san-pham/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                  <img src="resize/82x50/2/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
                </a>
              </div>
              <div class="desc t-left">
                <h5><a href="san-pham/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                  <?=catchuoi($tintuc[$i]['ten_'.$lang],30)?>
                </a></h5>
                <p>
                  	<span class="price"><?=($tintuc[$i]['giaban']!=0) ? number_format($tintuc[$i]['giaban'],0, ',', '.').' đ' : 'Liên hệ' ?></span>
                </p>
            	<?php if($tintuc[$i]['giacu']!=0){ ?>
              	<p><span class="price-old td-line-through"><?=($tintuc[$i]['giacu']!=0) ? number_format($tintuc[$i]['giacu'],0, ',', '.').' đ' : 'Liên hệ' ?></span></p>
              	<?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
	</div>
</div>	
<?php }else{ ?>
<div class="left-item w-100 mb-10">
	<div class="title-left">
		<h2>Bạn đọc xem nhiều nhất</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="box-don">
          <?php for($i=0;$i<count($tintuc_xemnhieu);$i++){ ?>
            <div class="box-don-item mb-10">
              <h5><a class="cl-black" href="tin-tuc/<?=$tintuc_xemnhieu[$i]['tenkhongdau']?>" title="<?=$tintuc_xemnhieu[$i]['ten_'.$lang]?>">
                  <?=$tintuc_xemnhieu[$i]['ten_'.$lang]?> <span class="count">- <?=$tintuc_xemnhieu[$i]['luotxem']?> lượt xem</span>
                </a><span class="numb"><?=$i+1?></span></h5>
            </div>
          <?php } ?>
        </div>
	</div>
</div>
<div class="left-item w-100 mb-10">
  <div class="title-left">
    <h2>Sản phẩm nổi bật</h2>
  </div>
  <div class="desc-left clearfix">
    <div class="box-product">
          <?php for($i=0;$i<count($product_nb_ind);$i++){ ?>
             <div class="box-product-item">
              <div class="img">
                <a href="san-pham/<?=$product_nb_ind[$i]['tenkhongdau']?>" title="<?=$product_nb_ind[$i]['ten']?>">
                  <img src="resize/82x50/2/<?=_upload_baiviet_l.$product_nb_ind[$i]['photo']?>" alt="<?=$product_nb_ind[$i]['ten']?>">
                </a>
              </div>
              <div class="desc t-left">
                <h5><a href="san-pham/<?=$product_nb_ind[$i]['tenkhongdau']?>" title="<?=$product_nb_ind[$i]['ten']?>">
                  <?=catchuoi($product_nb_ind[$i]['ten'],30)?>
                </a></h5>
                <p>
                    <span class="price"><?=($product_nb_ind[$i]['giaban']!=0) ? number_format($product_nb_ind[$i]['giaban'],0, ',', '.').' đ' : 'Liên hệ' ?></span>
                </p>
              <?php if($product_nb_ind[$i]['giacu']!=0){ ?>
                <p><span class="price-old td-line-through"><?=($product_nb_ind[$i]['giacu']!=0) ? number_format($product_nb_ind[$i]['giacu'],0, ',', '.').' đ' : 'Liên hệ' ?></span></p>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
  </div>
</div>  
<?php } ?>




