<div class="desc">
  <div class="container">
    <div class="title">
      <h3>Sản phẩm bán chạy</h3>
    </div>
    <div class="desc mt-20">
      <div class="box-duan slickProduct">
      <?php for($i=0;$i<count($product_nb);$i++){ ?>
      <div>
        <div class="product-slide w-100-i bx-border product-hover f-left">
          <div class="product w-100">
            <div class="product-img">
              <a href="san-pham/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">
                <img class="insImageload" data-load="true" data-src="resize/276x294/1/<?=_upload_baiviet_l.$product_nb[$i]['photo']?>" alt="<?=$product_nb[$i]['ten']?>">
              </a>
              <span class="cart" onclick="addCart(<?=$product_nb[$i]['id']?>,1,0)"><img src="images/icon-cart-add.png" alt="add cart"></span>
              <?php if($product_nb[$i]['giacu']!=0 && $product_nb[$i]['giacu']!=$product_nb[$i]['giaban']){ ?><span class="giamgia"><?=giamgia($product_nb[$i]['giacu'],$product_nb[$i]['giaban'])?></span><?php } ?>
            </div>
            <div class="product-title">
              <div class="xemchitiet">
                <div>
                  <a href="san-pham/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">Xem chi tiết</a>
                </div>
              </div>
              <h4><a href="san-pham/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">
                <?=$product_nb[$i]['ten']?>
              </a></h4>
              <p class="t-center">
               <span class="price"><?=($product_nb[$i]['giaban']!=0) ? number_format($product_nb[$i]['giaban'],0, ',', '.').' đ' : 'Liên hệ: '.$row_setting['hotline'] ?></span>
              <?php if($product_nb[$i]['giacu']!=0){ ?>
              <span class="price-old td-line-through"><?=($product_nb[$i]['giacu']!=0) ? number_format($product_nb[$i]['giacu'],0, ',', '.').' đ' : 'Liên hệ: '.$row_setting['hotline'] ?></span>
              <?php } ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
     </div>
    </div>
  </div>
</div>


<section id="search-multi" class="search-multi-top mt-20 clearfix">
  <div class="container">
    <div class="title">
      <h3>Kim cương viên</h3>
    </div>
    <div id="shape">
      <ul class="list-shape">
        <li class="selected">
            <label for="tron">
              <img src="images/icon-kc/HP_diamonds_round.svg" title="Tròn"><br/>
              <input type="checkbox" class="checkshape" id="tron" name="shap" value="0">
            </label>
        </li>
        <li>
            <label for="hatthoc">
              <img  src="images/icon-kc/HP_diamonds_marquise.svg" title="Hạt thóc"><br/>
              <input type="checkbox" class="checkshape" id="hatthoc" name="shap" value="1">
            </label>
        </li>
    
        <li>
            <label for="vuongnhongoc">
              <img  src="images/icon-kc/HP_diamonds_princess.svg" title="Vuông nhọn góc"><br/>
              <input type="checkbox" class="checkshape" id="vuongnhongoc" name="shap" value="2">
            </label>
        </li>
    
        <li>
             <label for="chunhatcatgoc">
              <img  src="images/icon-kc/HP_diamonds_radiant.svg" title="Chữ nhật cắt góc"><br/>
              <input type="checkbox" class="checkshape" id="chunhatcatgoc" name="shap" value="3">
            </label>
        </li>
    
        <li>
            <label for="chunhatxeptang">
              <img  src="images/icon-kc/HP_diamonds_emerald.svg" title="Chữ nhật xếp tầng"><br/>
              <input type="checkbox" class="checkshape" id="chunhatxeptang" name="shap" value="4">
            </label>
        </li>
    
        <li>
            <label for="traitim">
              <img  src="images/icon-kc/HP_diamonds_heart.svg" title="Trái tim"><br/>
              <input type="checkbox" class="checkshape" id="traitim" name="shap" value="5">
            </label>
        </li>
    
        <li>
            <label for="vuongcatgoc">
              <img src="images/icon-kc/HP_diamonds_asscher.svg" title="Vuông cắt góc"><br/>
              <input type="checkbox" class="checkshape" id="vuongcatgoc" name="shap" value="6">
            </label>
        </li>
    
        <li>
            <label for="quale">
              <img src="images/icon-kc/HP_diamonds_pear.svg" title="Quả lê"><br/>
              <input type="checkbox" class="checkshape" id="quale" name="shap" value="7">
            </label>
        </li>
    
        <li>
            <label for="oval">
              <img src="images/icon-kc/HP_diamonds_oval.svg" title="Oval"><br/>
              <input type="checkbox" class="checkshape" id="oval" name="shap" value="8">
            </label>
        </li>
    
        <li>
          <label for="vuongbogoc">
              <img src="images/icon-kc/HP_diamonds_cushion.svg" title="Vuông bo góc"><br/>
              <input type="checkbox" class="checkshape" id="vuongbogoc" name="vuongbogoc" value="9">
            </label>
        </li>
      </ul>
      <input type="hidden" id="input-images-slider" value="" />
    </div>
    <div class="box-range">
      <div class="item-range">
        <label>Giá</label>
        <div class="range">
          <div id="price-slider"></div>
        </div>
        <div class="itemlala">
          <input type="text" id="input-min-price" value="" />
          <input type="text" id="input-max-price" value=""/>
          <!-- 1000000.00 - 1000000000.00 -->
        </div>
      </div>
      <div class="item-range">
        <label>Độ tinh khiết</label>
        <div class="range"><div id="clarity-slider"></div></div>
        <input type="hidden" id="input-clarity-slider" value="" />
        <!-- si2,si1,vs2,vs1,vvs2,vvs1,if,fl -->
      </div>
      <div class="item-range">
        <label>Kích Thước (Size)</label>
        <div class="range"><div id="width-slider"></div></div>
        <div class="itemlala">
          <input type="text" id="input-min-width" value="" />
          <input type="text" id="input-max-width" value="" />
          <!-- 3.60-20.00-->
        </div>
      </div>
      <div class="item-range">
        <label>Màu</label>
        <div class="range"><div id="color-slider"></div></div>
        <input type="hidden" id="input-color-slider" value="" />
        <!-- j,i,h,g,f,e,d -->
      </div>
    </div>
  </div>
</section>
<input type="hidden" name="link-next" id="link-next" value="kim-cuong-vien">
<?php 
  $chuthich = get_fetch_array("select noidung_$lang as noidung,ten_$lang as ten from #_info where type='chu-thich'");
?>
<div class="detail mb-20 mt-20">
  <h3 class="thnx">Thông tin lưu ý</h3>
  <?= stripslashes($chuthich['noidung']) ?>
</div>
<section>
  <div class="container" id="result-search">
  </div>
</section>
<section id="bosuutap" class="bosuutap-top mt-50 clearfix">
  <div class="container">
    <div class="title">
      <h3>Bộ sưu tập</h3>
    </div>
    <div class="desc-qc">
     <div class="slickBST">
      <?php for($i=0;$i<count($danhmuc_bosuutap);$i++){ ?>
        <div>
           <div class="img-qc mt-25 mb-25">
              <div class="img">
                <a href="<?=$danhmuc_bosuutap[$i]['tenkhongdau']?>">
                  <img src="<?=_upload_baiviet_l.$danhmuc_bosuutap[$i]['photo']?>" alt="<?=$danhmuc_bosuutap[$i]['ten']?>">
                </a>
              </div>
              <div class="desc">
                <a href="<?=$danhmuc_bosuutap[$i]['tenkhongdau']?>">
                  <?=$danhmuc_bosuutap[$i]['ten']?>
                </a>
              </div>
            </div>
        </div>
      <?php } ?>
     </div>
    </div>
  </div>
</section>
<?php /*<section id="chinhsach" class="chinhsach-top mt-20 clearfix">
  <div class="container">
    <div class="title">
        <h3>Giá trị cốt lỗi</h3>
      </div>
    <div class="box-csach">
      <div class="chinhsach">
        <?php for($i=0;$i<count($thongtinslider);$i++){ ?>
        <div class="al-chinh bx-border pd-10 f-left">
          <div class="info_policy cursor-pointer clearfix" onclick="window.location.href='<?=$thongtinslider[$i]['link']?>'">
            <span class="name-icon f-left">
              <img src="resize/75x74/2/<?=_upload_hinhanh_l.$thongtinslider[$i]['photo']?>" alt="<?=$thongtinslider[$i]['ten']?>">
            </span>
            <div class="description f-left">
              <h4><?=$thongtinslider[$i]['ten']?></h4>
              <p><?=$thongtinslider[$i]['mota']?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>*/ ?>



<div class="desc mt-20">
  <div class="container">
    <div class="title">
      <h3>Sản phẩm khuyến mãi</h3>
    </div>
    <div class="desc mt-20">
      <div class="box-duan slickProduct">
      <?php for($i=0;$i<count($product_km);$i++){ ?>
      <div>
        <div class="product-slide w-100-i bx-border product-hover f-left">
          <div class="product w-100">
            <div class="product-img">
              <a href="san-pham/<?=$product_km[$i]['tenkhongdau']?>" title="<?=$product_km[$i]['ten']?>">
                <img class="insImageload" data-load="true" data-src="resize/276x294/1/<?=_upload_baiviet_l.$product_km[$i]['photo']?>" alt="<?=$product_km[$i]['ten']?>">
              </a>
              <span class="cart" onclick="addCart(<?=$product_km[$i]['id']?>,1,0)"><img src="images/icon-cart-add.png" alt="add cart"></span>
              <?php if($product_km[$i]['giacu']!=0 && $product_km[$i]['giacu']!=$product_km[$i]['giaban']){ ?><span class="giamgia"><?=giamgia($product_km[$i]['giacu'],$product_km[$i]['giaban'])?></span><?php } ?>
            </div>
            <div class="product-title">
              <div class="xemchitiet">
                <div>
                  <a href="san-pham/<?=$product_km[$i]['tenkhongdau']?>" title="<?=$product_km[$i]['ten']?>">Xem chi tiết</a>
                </div>
              </div>
              <h4><a href="san-pham/<?=$product_km[$i]['tenkhongdau']?>" title="<?=$product_km[$i]['ten']?>">
                <?=$product_km[$i]['ten']?>
              </a></h4>
              <p class="t-center">
               <span class="price"><?=($product_km[$i]['giaban']!=0) ? number_format($product_km[$i]['giaban'],0, ',', '.').' đ' : 'Liên hệ: '.$row_setting['hotline'] ?></span>
              <?php if($product_km[$i]['giacu']!=0){ ?>
              <span class="price-old td-line-through"><?=($product_km[$i]['giacu']!=0) ? number_format($product_km[$i]['giacu'],0, ',', '.').' đ' : 'Liên hệ: '.$row_setting['hotline'] ?></span>
              <?php } ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
     </div>
    </div>
  </div>
</div>
