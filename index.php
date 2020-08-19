<?php
    session_start();
    $session=session_id();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    @define ( '_source' , './sources/');
    @define ( '_lib' , './libraries/');

    if(isset($_SESSION['phienban']))
    {
       $phienban = $_SESSION['phienban'];
    }
    
    include_once _lib."Mobile_Detect.php";

    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

    if($deviceType =='phone'){
        if($phienban=='desktop'){
            @define ( '_template' , './templates/');
        }else{
            // @define ( '_template' , './templates_mobile/'); 
            @define ( '_template' , './templates/');
        }
    }else{
        if($phienban=='mobile'){
            // @define ( '_template' , './templates_mobile/'); 
            @define ( '_template' , './templates/');
        }else{
            @define ( '_template' , './templates/');
        }
    }

    //Lưu ngôn ngữ chọn vào $_SESSION
    if(!isset($_SESSION['lang']))
    {
        $_SESSION['lang']='vi';
    }
    $lang=$_SESSION['lang'];
    
    include_once _lib."config.php";
    include_once _lib."constant.php";
    include_once _lib."functions.php";
    include_once _lib."class.database.php";
    include_once _source."lang_$lang.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."file_requick.php";
    include_once _lib."counter.php"; 
    if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
    $pid=$_REQUEST['productid'];
    $soluong=1;
    addtocart($pid,$soluong);
    redirect("thanh-toan.html");}   
    include "sources/custom.php";


    if($row_setting['disable_web']==1){
        redirect('http://'.$config_url.'/disable_website.php');
    }
    /*for($i=21;$i<=25;$i++){
        $data['masp'] = 'MCT-00'.($i);
        $data['ten_vi'] = 'Tay Cầm Xbox One S Sport White Special Edition Chính Hãng ADV'.($i);
        $data['thongtin_vi'] = 'Đã có hàng, đang bán';
        $data['mota_vi'] = 'Một ấn phẩm mới của dòng game Red Dead mới được mang tới cho bạn từ studio huyền thoại Rockstar Games. Chúng ta sẽ được một lần nữa được trải nghiệm cuộc sống của những chàng cao bồi cứng cỏi ở miền Viễn Tây nước Mỹ, với 2 chế độ singleplayer và online multiplayer.';
        $data['photo'] = $i.'.jpg';
        $data['thumb'] = $i.'.jpg';
        $data['giaban'] = '750000';
        $data['giacu'] = '762000';
        $data['id_list'] = 49;
        $data['id_cat'] = 29;
        $data['id_loai'] = 2;
        $data['tenkhongdau'] = changeTitle('Tay Cầm Xbox One S Sport White Special Edition Chính Hãng ADV'.($i));
        $data['text_search'] = changeSearch($data['ten_vi']);
        $data['stt'] = $i;
        $data['hienthi'] = 1;
        $data['ngaytao'] = time();
        $data['type'] = 'san-pham';
        
        $d->setTable('baiviet');
        $d->insert($data);
    }*/

    if($deviceType =='phone'){
        if($phienban=='desktop'){
            include_once "index_website.php";
        }else{
            // include_once "index_mobile.php";
            include_once "index_website.php";
        }
    }else{
       if($phienban=='mobile'){
            // include_once "index_mobile.php";
            include_once "index_website.php";
        }else{
            include_once "index_website.php";
        }
    }
?>
