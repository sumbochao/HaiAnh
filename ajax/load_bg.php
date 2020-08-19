<?php
	session_start();
	error_reporting(E_ALL);
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');

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
	$d = new database($config['database']);

	$id = (int)$_POST['id'];
	$banggia_menu = get_fetch_array("select id,ten_$lang,tenkhongdau,photo,thumb,mota_$lang,ngaytao,noidung_$lang from #_baiviet where hienthi=1 and type='bang-gia' and id='".$id."' and noibat=1 order by stt asc,id desc");

	echo $banggia_menu['noidung_'.$lang];
?>


