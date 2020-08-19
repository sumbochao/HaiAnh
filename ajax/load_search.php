<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');
	@define ( _upload_folder , '../upload/');

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

	$hinh = (string)$_GET['hinh'];
	$minprice = (string)$_GET['minprice'];
	$maxprice = (string)$_GET['maxprice'];
	$minwidth = (string)$_GET['minwidth'];
	$maxwidth = $_GET['maxwidth'];
	$colorslider = (string)$_GET['colorslider'];
	$claritylider = (string)$_GET['claritylider'];


	
?>