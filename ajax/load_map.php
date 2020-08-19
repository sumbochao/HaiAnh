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
		
	echo $row_setting['toado'];
?>