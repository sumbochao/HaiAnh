<!DOCTYPE html>
<html lang="vi">
<head>
<base href="http://<?=$config_url?>/">
<link rel="canonical" href="<?=getCurrentPageURL_CANO()?>" />
<link rel="alternate" href="<?=getCurrentPageURL_CANO()?>" hreflang="vi-vn" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$row_setting['bgtop']?>" type="image/x-icon" />
<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keyword_bar!='') echo $keyword_bar; else echo $row_setting['keywords']; ?>">
<meta name="robots" content="noodp,index,follow" />
<meta name="google" content="notranslate" />
<meta name='revisit-after' content='1 days' />
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
<?=$row_setting['analytics']?>
<?=$share_facebook?>
<?php if($config['facebook-id']!=''){ ?>
<meta property="fb:app_id" content="<?=$config['facebook-id']?>" />
<?php } ?>
<link type="text/css" rel="stylesheet" href="style.css" />
<link type="text/css" rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/pe-icon-7-stroke.css" />
<link type="text/css" rel="stylesheet" href="plugins/slick/slick.css" />
<link type="text/css" rel="stylesheet" href="plugins/slick/slick-theme.css" />
<link type="text/css" rel="stylesheet" href="plugins/mmenu/src/css/jquery.mmenu.all.css" />
<link type="text/css" rel="stylesheet" href="plugins/confirm/jquery-confirm.css" />
<link rel="stylesheet" type="text/css" href="css/jssor.css">
<link rel="stylesheet" type="text/css" href="plugins/animate.css">

<link rel="stylesheet" href="plugins/slide-range/nouislider.css">
<link rel="stylesheet" href="plugins/slide-range/custom.css">

<?php if($com=='video' && $_GET['id']){ ?>
<link type="text/css" rel="stylesheet" href="plugins/video/mediaelementplayer.css" />
<?php } ?>
<script language="javascript" type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
  var base_url = "http://<?=$config_url?>/";
</script>
</head>

<body>

<?php if($_REQUEST['com']=='index' || $_REQUEST['com']==''){ ?>
<h1 class="hidden fn"><?=$row_setting['title']?></h1>
<?php } ?>

<div id="full-page">
  <?php include_once _template."layout/top.php"; ?>
  <?php include_once _template."layout/menu.php"; ?>
  <?php if($source=='index'){ ?>
  <?php include_once _template."layout/slider.php"; ?>
  <?php include_once _template."layout/duan.php"; ?>
  <?php include_once _template."layout/tintuc.php"; ?>
  <?php include_once _template."layout/mail.php"; ?>
  <?php }else{ ?>
  <section id="block-template" class="clearfix mt-30 pb-20">
    <div class="container">
      <div class="breadcumb mt-10 mb-20"><?=$breadcumb?></div>
    </div>
    <div class="container">
      <?php include _template.$template."_tpl.php";?>
    </div>
  </section>
  <?php } ?>
  <?php include_once _template."layout/footer.php"; ?>
  <?php //include_once _template."layout/copy.php"; ?>
  <?php //include_once _template."layout/bando.php"; ?>
</div>

<?php include_once _template."layout/menu_mobile.php"; ?>
<?php include_once _template."layout/chiduong.php"; ?>

<script type="text/javascript" src="js/my_script.js"></script>
<script type="text/javascript" src="js/marquee.js"></script>
<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="plugins/mmenu/src/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="plugins/confirm/jquery-confirm.js"></script>
<?php if($com!='thanh-toan' && $com!='gio-hang' && $com!='searchkc'){ ?>
<script type="text/javascript" src="js/inspired-imgload.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.insImageload').imgLoad({
      imgLoad : 'images/ring.gif'
    })
    setTimeout(function(){
      $(window).trigger('resize');
    },500);
  });
</script>
<?php } ?>
<?php if($source=='index'){ ?>
<script src="js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>
<script src="js/jssor_1_slider_init.js" type="text/javascript"></script>
<script type="text/javascript">jssor_1_slider_init();</script>
<?php } ?>

<script src="plugins/slide-range/wNumb.js" type="text/javascript"></script>
<script src="plugins/slide-range/nouislider.js" type="text/javascript"></script>
<script src="plugins/slide-range/slide-demo.js" type="text/javascript"></script>

<script type="text/javascript" src="js/s_script.js"></script>
<script type="text/javascript">
  var active_youtube = "<?=youtobi($video_na[0]['links'])?>";
  var t_time = "<?=time()?>";
</script>

<?php if($com=='video' && $_GET['id']){ ?>
<script src="plugins/video/mediaelement-and-player.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('video, audio').mediaelementplayer({
      pluginPath: 'https://cdnjs.com/libraries/mediaelement/',
      shimScriptAccess: 'always'
    });
  });
</script>
<?php } ?>

<?php include_once _template."layout/popup.php"; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php if($lang=='en')echo 'en_EN';else echo 'vi_VN' ?>/sdk.js#xfbml=1&version=v2.4<?=($config['facebook-id']!='') ? "&appId=".$config['facebook-id']:'' ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php if ($nhacnen['hienthi']==1){ ?>
<style type="text/css" media="screen">div.nhac{position: fixed;bottom: 10px;left:  10px;z-index: 9999;}.ha{ display:none;}.sa{ display:inline-block;}</style>
<audio loop autoplay id="ad"> <source src="<?=_upload_hinhanh_l.$nhacnen['photo']?>" type="audio/mpeg"> </audio>
<script type="text/javascript">
  function pa(){ ad.pause();} function pla(){ ad.play(); }
  $(document).ready(function(){ pla(); $("#vo").click(function(){ $(this).addClass('ha'); $(this).removeClass('sa'); $("#vf").addClass('sa'); $("#vf").removeClass('ha'); }); $("#vf").click(function(){ $(this).addClass('ha'); $(this).removeClass('sa'); $("#vo").addClass('sa'); $("#vo").removeClass('ha'); });
  });
</script>
<div class="nhac"> <a href="javascript:(0)" title="play" onClick="pa();"  class="sa" id="vo"> <img src="images/play.png" alt="play" align="absmiddle"> </a> <a href="javascript:(0)" title="pause" onClick="pla();" class="ha" id="vf"> <img src="images/pause.png" alt="pause" align="absmiddle"> </a> </div>
<?php } ?>
<div id="overlay">
    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
  </div>
</body>
</html>
