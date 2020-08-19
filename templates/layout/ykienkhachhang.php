<div class="container">
  <div class="tt-title">
    <h3><?=_phanhoikhachhang?></h3>
  </div>
  <div class="tt-desc mt2">
    <div class="slick_dichvu divykien">
      <?php for($i=0;$i<count($ykienkhachhang);$i++){ ?>
        <div class="slide">
          <div class="item_dichvu">
            <div class="dichvu_img">
              <a href="#" title="<?=$ykienkhachhang[$i]['ten_'.$lang]?>">
                  <img src="resize/142x142/1/<?=_upload_baiviet_l.$ykienkhachhang[$i]['photo']?>" alt="<?=$ykienkhachhang[$i]['ten_'.$lang]?>">
              </a>
            </div>
            <div class="dichvu_h">
              <p><?=_khachhang?></p>
              <h4><a href="#" title="<?=$ykienkhachhang[$i]['ten_'.$lang]?>">
                <?=catchuoi(strip_tags($ykienkhachhang[$i]['ten_'.$lang]),70)?>
              </a></h4>
              <p><?=catchuoi(strip_tags($ykienkhachhang[$i]['mota_'.$lang]),50)?></p>
            </div>
            <div class="dichvu_desc">
              <p><?=catchuoi(strip_tags($ykienkhachhang[$i]['thongtin_'.$lang]),280)?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.slick_dichvu').slick({
      dots: false,
      infinite: true,
      speed: 300,
      vertical: false,
      slidesToScroll: 1,
      slidesToShow: 2,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000
    });
  });
</script>