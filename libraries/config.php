<?php

	if(!defined('_lib')) die("Error");
	function nettuts_error_handler($number, $message, $file, $line, $vars)
	{
		if ( ($number !== E_NOTICE) && ($number < 2048) ) {
			include 'templates/error_tpl.php';
			die();
		}
	}

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	error_reporting(E_ALL & ~E_NOTICE & ~8192);

	$config_url=$_SERVER["SERVER_NAME"].'';
	$config['debug']=1;
	$config['lang'] = array(
		"vi" => "Tiếng Việt"
	);

	$config_email="no-reply@kimcuonghaianh.com";
	$config_pass="wBN@Ah)4e1e7";
	$config_ip="127.0.0.1";

	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'haian418_kc';
	$config['database']['refix'] = 'table_';
	$config['salt']='VBLSHHUba~';
	$config['bimat'] = '@james206@';
	$config['facebook-id'] = '';
	$config['link-web'] = 'itpk.vn';
	$config['logo'] = true;

	// product or article

	$config['schema'] = 'product';
	$config['date_create'] = time();


	$config['loai'] = array(
		"1"=>"Sắp có",
		"2"=>"Đã có",
		"3"=>"Mới",
		"4"=>"Cũ"
	);
	$config['hinhdang'] = array(
		"0"=>"Tròn - Round",
		"1"=>"Hạt thóc - Marquise",
		"2"=>"Vuông nhọn góc - Princess",
		"3"=>"Chữ nhật cắt góc - Radiant",
		"4"=>"Chữ nhật xếp tầng - Emerald",
		"5"=>"Trái tim - Heart",
		"6"=>"Vuông cắt góc - asscher",
		"7"=>"Quả lê - Pear",
		"8"=>"Oval",
		"9"=>"Vuông bo góc - Cushion"
	);
	

	$config['price-tragop'] = 3000000;
?>
