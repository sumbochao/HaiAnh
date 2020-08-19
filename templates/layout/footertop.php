<div class="left_u">
  <h3>Đèn phi thương</h3>
  <ul class="list1">
    <li><a href="gioi-thieu.html" title="Giới thiệu">Giới thiệu</a></li>
    <li><a href="du-an.html" title="Dự án đèn hoa sen lụa">Dự án đèn hoa sen lụa</a></li>
    <li><a href="co-so-san-xuat.html" title="Cơ sở sản xuất">Cơ sở sản xuất</a></li>
    <li><a href="san-pham.html" title="Sản phẩm">Sản phẩm</a></li>
    <li><a href="tin-tuc.html" title="Tin tức">Tin tức</a></li>
    <li><a href="lien-he.html" title="Liên hệ">Liên hệ</a></li>
  </ul>
</div>
<div class="left_u">
  <h3>Phân phối</h3>
  <ul class="list1">
    <?php for($i=0;$i<count($phanphoi_menu);$i++){ ?>
    <li><a href="du-an/<?=$phanphoi_menu[$i]['id']?>/<?=$phanphoi_menu[$i]['tenkhongdau']?>.html" title="<?=$phanphoi_menu[$i]['ten_'.$lang]?>"><?=$phanphoi_menu[$i]['ten_'.$lang]?></a></li>
    <?php } ?>
  </ul>
</div>
<div class="left_u">
  <h3>Dịch vụ</h3>
  <ul class="list1">
    <?php for($i=0;$i<count($dichvu_menu);$i++){ ?>
    <li><a href="dich-vu/<?=$dichvu_menu[$i]['id']?>/<?=$dichvu_menu[$i]['tenkhongdau']?>.html" title="<?=$dichvu_menu[$i]['ten_'.$lang]?>"><?=$dichvu_menu[$i]['ten_'.$lang]?></a></li>
    <?php } ?>
  </ul>
</div>
<div class="left_u">
  <h3>Hướng dẫn sử dụng</h3>
  <ul class="list1">
    <?php for($i=0;$i<count($huongdan_menu);$i++){ ?>
    <li><a href="huong-dan-su-dung/<?=$huongdan_menu[$i]['id']?>/<?=$huongdan_menu[$i]['tenkhongdau']?>.html" title="<?=$huongdan_menu[$i]['ten_'.$lang]?>"><?=$huongdan_menu[$i]['ten_'.$lang]?></a></li>
    <?php } ?>
  </ul>
</div>
<div class="left_u">
  <h3>Bảng giá sản phẩm</h3>
  <ul class="list1">
    <?php for($i=0;$i<count($banggia_menu);$i++){ ?>
    <li><a href="bang-gia/<?=$banggia_menu[$i]['id']?>/<?=$banggia_menu[$i]['tenkhongdau']?>.html" title="<?=$banggia_menu[$i]['ten_'.$lang]?>"><?=$banggia_menu[$i]['ten_'.$lang]?></a></li>
    <?php } ?>
  </ul>
</div>
