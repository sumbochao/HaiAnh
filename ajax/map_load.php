<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../libraries/');
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
	include_once _lib."class.database.php";
    
	$d = new database($config['database']);
	
?>
<script>
var myCenter=new google.maps.LatLng(<?=str_replace(" ","",$_POST['toado'])?>);

function initialize()
{
	
  var mapProp = {
      center:myCenter,
      zoom:12,
      mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);

  var marker=new google.maps.Marker({
      position:myCenter,
  });

  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
      content: "<span style='color: #333; text-transform: uppercase; font-family: Arial; font-weight: bold;'><?=$row_setting['ten_'.$lang]?></span>"
    });

  infowindow.open(map,marker);
}

initialize();
</script>
<div id="map_canvas" style="width:100%; float: left; height: 334px;"></div>