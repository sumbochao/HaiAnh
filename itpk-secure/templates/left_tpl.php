<div class="he_menu">
  <div class="logo">
    <span class="close">
      <i class="fa fa-minus-square" aria-hidden="true"></i> Close
    </span>
    <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" width="70" <?=($config['logo']==false) ? 'class="none"':''?> /> </a>
  </div>
  <div class="nav_menu">Menu</div>
  <div class="nav-divider"></div>
  <div class="sidebarSep mt0"></div>
  <!-- Left navigation -->
  <ul id="menu" class="nav">
    <li class="dash" id="menu1">
      <a class=" active" title="" href="index.php">
        <span>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Trang chủ
        </span>
      </a>
    </li>
    <li class="<?php if($_GET['com']=='order') echo ' activemenu' ?> " id="menu_order">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Đơn hàng</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=1">Đơn hàng mới đặt</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=2">Đơn hàng đã xác nhận</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=3">Đơn hàng đăng giao hàng</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=4">Đơn hàng đã giao</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man&id_tinhtrang=5">Đơn hàng đã hủy</a></li>
        <li<?php if($_GET['com']=='order' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=order&act=man">Danh sách đơn hàng</a></li>
      </ul>
    </li>
    
    <li class="<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham') echo ' activemenu' ?> " id="menu_sp">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Quản lý sản phẩm</span><strong></strong></a>
      <ul class="sub">
        <!-- <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=san-pham">Quản lý sản phẩm cấp 1</a></li> -->
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_cat&type=san-pham">Quản lý sản phẩm cấp 1</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man_item') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_item&type=san-pham">Quản lý sản phẩm cấp 2</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='san-pham' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=san-pham">Quản lý sản phẩm</a></li>
      </ul>
    </li>
    
    <li class="<?php if($_GET['com']=='baiviet' && $_GET['type']=='bo-suu-tap') echo ' activemenu' ?> " id="menu_bst">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Quản lý bộ sưu tập</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='bo-suu-tap' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=bo-suu-tap">Quản lý bộ sưu tập cấp 1</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='bo-suu-tap' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=bo-suu-tap">Quản lý bộ sưu tập</a></li>
      </ul>
    </li>

    <li class="<?php if($_GET['type']=='tra-gop' || $_GET['type']=='gioi-thieu' || $_GET['type']=='tin-tuc' || $_GET['type']=='chinh-sach' || $_GET['type']=='khuyen-mai' || $_GET['type']=='chu-thich' || $_GET['type']=='kien-thuc') echo ' activemenu' ?> " id="menu_tintuc">
      <a href="" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Danh sách bài viết</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='tin-tuc' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tin-tuc">Quản lý Tin tức</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='chinh-sach' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=chinh-sach">Quản lý chính sách</a></li>
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='khuyen-mai' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=khuyen-mai">Quản lý khuyến mãi</a></li>
        <!-- <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='cau-chuyen' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=cau-chuyen">Quản lý câu chuyện về trang sức</a></li> -->
        <!-- <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='kien-thuc' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=kien-thuc">Quản lý kiến thức về trang sức</a></li> -->
        <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='gioi-thieu' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=gioi-thieu">Quản lý giới thiệu</a></li>
        <!-- <li<?php if($_GET['com']=='baiviet' && $_GET['type']=='chi-nhanh' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=chi-nhanh">Quản lý Chi nhánh</a></li> -->
        <li<?php if($_GET['com']=='info' && $_GET['type']=='tra-gop') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=tra-gop" title="">Trả góp</a></li>
        <li<?php if($_GET['com']=='info' && $_GET['type']=='chu-thich') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=chu-thich" title="">Chú thích tìm kiếm</a></li>
      </ul>
    </li>
  
    <li class="gallery_li<?php if($_GET['com']=='photo' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu8">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Slider</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='photo' && $_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
        <!-- <li<?php if($_GET['com']=='photo' && $_GET['type']=='quangcao') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=quangcao" title="">Hình ảnh quảng cáo</a></li> -->
        <!-- <li<?php if($_GET['com']=='photo' && $_GET['type']=='thongtinslider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=thongtinslider" title="">Hình ảnh giá trị cốt lỗi</a></li> -->
        <li<?php if($_GET['com']=='photo' && $_GET['type']=='mxh-support') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=mxh-support" title="">Hình ảnh mạng xã hội footer</a></li>
        <!-- <li<?php if($_GET['com']=='video' && $_GET['type']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li> -->
      </ul>
    </li>
    <li class="template_li<?php if($_GET['com']=='bannerqc') echo ' activemenu' ?>" id="menuxsas9">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Hình ảnh</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
        <li<?php if($_GET['type']=='logo_footer') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo_footer" title="">Logo footer</a></li>
        <!-- <li<?php if($_GET['type']=='bg_footer') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bg_footer" title="">Background footer</a></li> -->
        <li<?php if($_GET['type']=='bocongthuong') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bocongthuong" title="">Bộ công thương</a></li>
        <li<?php if($_GET['type']=='nhacnen') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=nhacnen" title="">Nhạc nền</a></li>
        
        <!-- <li<?php if($_GET['type']=='bocongthuong') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bocongthuong" title="">Bộ công thương</a></li> -->
        <li<?php if($_GET['type']=='popup') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=popup" title="">Popup</a></li>
        <li<?php if($_GET['type']=='hinhdaidien') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=hinhdaidien" title="">Hình đại diện share link</a></li>
      </ul>
    </li>
    <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='company' || $_GET['com']=='newsletter') echo ' activemenu' ?>" id="menu10">
      <a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thông tin công ty</span><strong></strong></a>
      <ul class="sub">
       <li<?php if($_GET['com']=='newsletter') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man" title="">Đăng ký nhận tin</a></li>
       <!-- <li<?php if($_GET['com']=='yahoo') echo ' class="this"' ?>><a href="index.php?com=yahoo&act=man" title="">Quản lý hỗ trợ online</a></li> -->
       <li<?php if($_GET['com']=='company' && $_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Thông tin liên hệ</a></li>
       <li<?php if($_GET['com']=='company' && $_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Thông tin footer</a></li>
       <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      </ul>
    </li>
    <li class="setting_li<?php if($_GET['com']=='database' || $_GET['com']=='backup' || $_GET['com']=='user') echo ' activemenu' ?>" id="menutttk12"><a href="#" title="" class="exp"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Cấu hình website</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['com']=='user' && $_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Thông tin Tài khoản</a></li>
      </ul>
    </li>
  </ul>

</div>
