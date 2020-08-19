<link href="plugins/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="plugins/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>

<div class="content-flex">
    <div class="detail-left bx-border">
        <div class="images_galley t-center">
            <a href="<?= _upload_baiviet_l.$row_detail['photo']?>" class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: off; hint: always; " >
                <img src="<?= _upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>
            </a>
        </div>
        <?php if(count($hinhanh_sp)>0){ ?>
        <div class="images_list">
            <div class="slickDetail">
                <div>
                    <div class="item_img">
                        <a data-zoom-id="Zoom-1" href="http://<?=$config_url?>/<?=_upload_baiviet_l.$row_detail['photo']?>"  data-image="http://<?=$config_url?>/<?=_upload_baiviet_l.$row_detail['photo']?>">
                            <img src="http://<?=$config_url?>/<?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>">
                        </a>
                    </div>
                </div>
                <?php for($i=0;$i<count($hinhanh_sp);$i++) { ?>
                <div>
                    <div class="item_img">
                        <a data-zoom-id="Zoom-1" href="http://<?=$config_url?>/<?=_upload_baiviet_l.$hinhanh_sp[$i]['photo']?>"  data-image="http://<?=$config_url?>/<?=_upload_baiviet_l.$hinhanh_sp[$i]['photo']?>">
                            <img src="http://<?=$config_url?>/<?=_upload_baiviet_l.$hinhanh_sp[$i]['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>">
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php
        $sum_ratting = get_fetch_array("select sum(rating) as tong from #_rating where id_product='".$row_detail['id']."' order by id desc");
        $count_ratting = get_fetch_array("select count(id) as tong from #_rating where id_product='".$row_detail['id']."' order by id desc");
        $sum = $sum_ratting['tong'];
        $dem = $count_ratting['tong'];
        if($sum > 0 && $dem>0){
            $tinh_toan = round($sum/$dem);
        }else{
            $tinh_toan = 0;
        }
    ?>
    <div class="detail-right">
        <div class="box-info-product w-100 bx-border">
            <div class="title-detail mb-10">
                <h1 class="t-left"><?=$row_detail['ten_'.$lang]?></h1>
            </div>
            <div class="product-more clearfix">
                <p>
                    <span class="w-100-i">
                        Mã sản phẩm: <?=$row_detail['masp']?>
                    </span>
                </p>
                <p>
                    <span>Lượt xem: <?=$row_detail['luotxem']?></span>
                    <span>
                        <span class="star" title="Poor">
                            <i class="fa fa-star fa-fw"></i>
                        </span>
                        <span class="star" title="Fair">
                            <i class="fa fa-star fa-fw"></i>
                        </span>
                        <span class="star" title="Good">
                            <i class="fa fa-star fa-fw"></i>
                        </span>
                        <span class="star" title="Excellent">
                            <i class="fa fa-star fa-fw"></i>
                        </span>
                        <span class="star" title="WOW!!!">
                            <i class="fa fa-star fa-fw"></i>
                        </span>
                        <?=$dem?> lượt đánh giá
                    </span>
                </p>
            </div>
            <div class="product-price t-left">
                <p class="price-detail mb-10">
                   Giá bán: <span class="price"><?=($row_detail['giaban']!=0) ? number_format($row_detail['giaban'],0, ',', '.').' đ' : 'Liên hệ' ?></span>
                </p>
                <?php if($row_detail['giacu']!=0 && $row_detail['giaban']!=0){ ?>
                <p class="price-detail mb-10">
                   <span class="price-old">Giá gốc: </span><span class="price-old td-line-through"><?=number_format($row_detail['giacu'],0, ',', '.')?>đ</span> <span class="price-old">(Tiết kiệm <?=giamgia($row_detail['giacu'],$row_detail['giaban'])?>)</span>
                </p>
                <?php } ?>
            </div>
            <div class="product-detail t-left ">
               <?= ($row_detail['mota_'.$lang]!='') ? nl2br($row_detail['mota_'.$lang]):'' ?>
            </div>
            <div class="product-numb">
                <p class="price-detail ds-inline-block">
                   <span class="title-numb">Số lượng</span>
                </p>
                <div class="contain_number_giohang">
                    <a href="javascript:" class="minus_giohang">-</a>
                        <input class="number_giohang" id="number_giohang" type="text" name="sl" value="1" maxlength="3" size="2">
                    <a href="javascript:" class="plus_giohang">+</a>
                </div>
                <p class=" ds-inline-block">
                    Thanh toán: <?=($row_detail['giaban']!=0) ? number_format($row_detail['giaban'],0, ',', '.').' đ' : 'Liên hệ' ?>
                </p>
            </div>
            
            <div class="product-tragop t-center">
                <div class="btn-tragop" onclick="addCart(<?=$row_detail['id']?>,getElementById('number_giohang').value,1)">
                   <span>Mua Ngay</span>
                   <span>(Giao tận nơi hoặc lấy tại cửa hàng)</span>
               </div>

            </div>
        </div>
    </div>
</div>

<div class="box-detail mt-20 clearfix">
    <div class="detail">
        <div class="box_star">
            <h3>Đánh giá của khách hàng</h3>
           <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                </ul>
            </div>
            <div class="licx"><?=$tinh_toan .'/5 - '. $dem.' lượt đánh giá'?> cho sản phẩm này </div>
            <input type="hidden" name="ip_address" id="ip_address" value="<?=get_client_ip_server()?>">
            <input type="hidden" name="id_user" id="id_user" value="<?= ($_SESSION['logging']['id']) ? $_SESSION['logging']['id']:0 ?>">
            <input type="hidden" name="id_product" id="id_product" value="<?=$row_detail['id']?>">
            <input type="hidden" name="type" id="type" value="san-pham">
        </div>
    </div>
    <div class="detail">
        <h3 class="thnx">Thông tin chi tiết</h3>
        <?= ($row_detail['noidung_'.$lang]!='') ? stripslashes($row_detail['noidung_'.$lang]):'Nội dung sản phẩm đang được cập nhật' ?>
    </div>
    <div class="detail mt-20">
        <div class="socialmediaicons t-center">
            <a href="https://twitter.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-twitter"></a>
            <a href="https://www.facebook.com/sharer.php?u=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-facebook"></a>
            <a href="https://plus.google.com/share?url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-google"></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=getCurrentPageURL()?>" target="_blank" rel="nofollow" class="fa fa-linkedin"></a>
            <a href="mailto:?Subject=<?=$row_detail['email']?> <?=getCurrentPageURL()?>" rel="nofollow" class="fa fa-envelope"></a>
            <a href="javascript:;" onclick="window.print()" rel="nofollow" class="fa fa-print"></a>
        </div> 
    </div>
    <div class="detail mt-20">
        <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
    </div>
</div>

<div class="title mt-20">
  <h3>Sản phẩm liên quan</h3>
</div>
<?php if(count($tintuc)>0){ ?>
<div class="content mt-10 w-100 clearfix">
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

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function(){
            var u = $('.li.star');
            var x = <?=$tinh_toan?>;
            $('li.star').each(function( i, val ) {
                if(i<x){
                    $(this).addClass('selected');
                }
            });
             $('span.star').each(function( i, val ) {
                if(i<x){
                    $(this).addClass('selected');
                }
            });
        });
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10);
            $(this).parent().children('li.star').each(function(e){
              if (e < onStar) {
                $(this).addClass('hover');
              }
              else {
                $(this).removeClass('hover');
              }
            });
            }).on('mouseout', function(){
                $(this).parent().children('li.star').each(function(e){
                $(this).removeClass('hover');
            });
        });
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            var ip_address = $('#ip_address').val();
            var id_user = $('#id_user').val();
            var id_product = $('#id_product').val();

            <?php /*if(id_user==0){
                alert('Bạn cần phải đăng nhập mới đánh giá sản phẩm này.');
                window.location.href = 'dang-nhap.html';
                return false;
            }*/ ?>
            for (i = 0; i < stars.length; i++) {
              $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
              $(stars[i]).addClass('selected');
            }
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var ratingTitle = $('#stars li.selected').last().attr('title');
            var msg = "";
            $.ajax({
                url: "ajax/store_rating.php",
                type: "POST",
                data: {star:ratingValue,v_title:ratingTitle,ip_address:ip_address,id_product:id_product,id_user:id_user},
                beforeSend: function(){
                    
                },
                success: function(data){
                    window.location.href = "san-pham/<?=$row_detail['tenkhongdau']?>";
                }
            });
        });
    });
</script>