<?php if($id_l==70){ ?>
<section id="search-multi" class="search-multi-top mt-20 clearfix">
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
      <label>Định lượng (mm/ly)</label>
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
</section>
<input type="hidden" name="link-next" id="link-next" value="sex">
<?php 
  $chuthich = get_fetch_array("select noidung_$lang as noidung,ten_$lang as ten from #_info where type='chu-thich'");
?>
<div class="detail mb-20 mt-20">
  <h3 class="thnx">Thông tin lưu ý</h3>
  <?= stripslashes($chuthich['noidung']) ?>
</div>

<section>
  <div id="result-search">
    <table id="solitaire-search-result">
      <thead>
        <tr>
            <th>Hình ảnh</th>
            <th>Hình Dạng</th>
            <th>MM (Ly)</th>
            <th>Màu</th>
            <th>Độ Tinh Khiết</th>
            <th>Giá</th>
            <th>Giấy giám định</th>
        </tr>
      </thead>
      <tbody>
        <?php if(count($tintuc)==0){ ?>
        <tr>
          <td colspan="7">Không tìm thấy loại nào có cấu hình như tìm kiếm</td>
        </tr>
        <?php }else{ ?>
        <?php for($i=0;$i<count($tintuc);$i++){ ?>
          <tr class="odd">
            <td>
              <img class="img-radius" src="resize/80x80/2/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
            </td>
            <td><?=$config['hinhdang'][$tintuc[$i]['id_image']]?></td>
            <td><?=$tintuc[$i]['dinhluong']?></td>
            <td><?=$tintuc[$i]['id_color']?></td>
            <td><?=$tintuc[$i]['id_clarity']?></td>
            <td><?=number_format($tintuc[$i]['giaban'],0, ',', '.').' vnđ'?></td>
            <td><!-- <a class="view-more-button" href="#">Liên hệ</a> -->
              <a class="view-more-button" href="<?=_upload_baiviet_l.$tintuc[$i]['giamdinh']?>" title="<?=$tintuc[$i]['ten_'.$lang]?>">
                Xem
              </a>
            </td>
          </tr>
          <?php  } ?>
          
          <tr>
            <td colspan="7">
              <div class="pagination t-center"><?=$paging?></div>
            </td>
          </tr> 
        <?php } ?>
      </tbody>
    </table>

  </div>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $('.view-more-button').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      image: {
        verticalFit: false
      }
    });
  });
</script>
<?php }else{ ?>
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
                  <img class="insImageload" data-load="true" data-src="resize/476x494/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
                </a>
                <span class="cart" onclick="addCart(<?=$tintuc[$i]['id']?>,1,0)"><img src="images/icon-cart-add.png" alt="add cart"></span>
                <?php if($tintuc[$i]['giacu']!=0 && $tintuc[$i]['giacu']!=$tintuc[$i]['giaban']){ ?><span class="giamgia"><?=giamgia($tintuc[$i]['giacu'],$tintuc[$i]['giaban'])?></span><?php } ?>
              </div>
              <div class="product-title">
               <div class="xemchitiet">
                <div>
                  <a href="san-pham/<?=$tintuc[$i]['tenkhongdau']?>" title="<?=$tintuc[$i]['ten']?>">Xem chi tiết</a>
                </div>
              </div>
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
<?php } ?>