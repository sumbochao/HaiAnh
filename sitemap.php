<?php	
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
    @define ( '_lib' , './libraries/');
	 //Lưu ngôn ngữ chọn vào $_SESSION
    if(!isset($_SESSION['lang']))
    {
        $_SESSION['lang']='vi';
    }
    $lang=$_SESSION['lang'];

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	header("Content-Type: application/xml; charset=utf-8"); 
	echo '<?xml version="1.0" encoding="UTF-8"?>'; 
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; 
	 
	function urlElement($url, $pri,$mod) {
	echo '<url>'; 
	echo '<loc>'.$url.'</loc>'; 
	echo '<changefreq>weekly</changefreq>';
	echo '<lastmod>'.$mod.'</lastmod>';
	echo '<priority>'.$pri.'</priority>';
	echo '</url>';
	}

	urlElement('http://'.$config_url,'1.0',date(c));
	
	$arrcom = array("gioi-thieu","du-an","tin-tuc","tuyen-dung","vi-sao","lien-he");
	$arrcom_article = array(,"du-an","tin-tuc","tuyen-dung","vi-sao");
	$arrcom_article_list = array();
	$arrcom_product = array("product");
	$arrcom_product_com = array("san-pham");



	foreach ($arrcom as $k => $v) {
		urlElement('http://'.$config_url.'/'.$v.'.html','1.0',date(c));
	}
	
	for($m = 0, $count_tintuc = count($arrcom_product); $m < $count_tintuc; $m++){
		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_product_list where type='".$arrcom_product[$m]."'";		
		$d->query($sql);
		$product_list = $d->result_array();
		
		for($x = 0 ; $x < count($product_list); $x++){

			$d->reset();
			$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_product_cat where type='".$arrcom_product[$m]."' and id_list ='".$product_list[$x]['id']."'";		
			$d->query($sql);
			$product_cat = $d->result_array();


			urlElement('http://'.$config_url.'/'.$product_list[$x]['tenkhongdau'].'','0.8',date(c,$product_list[$x]['ngaytao']));

			for($l = 0 ;  $l < count($product_cat); $l++){

				urlElement('http://'.$config_url.'/'.$product_cat[$l]['tenkhongdau'].'','0.8',date(c,$product_cat[$l]['ngaytao']));

				
			}

		}
	}
	for($m = 0; $m < count($arrcom_product); $m++){
		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_product where type='".$arrcom_product[$m]."'";		
		$d->query($sql);
		$product = $d->result_array();
		for($h = 0 ; $h < count($product); $h++){

			urlElement('http://'.$config_url.'/'.$arrcom_product_com[$m].'/'.$product[$h]['tenkhongdau'].'.html','0.8',date(c,$product[$h]['ngaytao']));

		}
	}

	for($m = 0; $m < count($arrcom_article_list); $m++){
		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,ngaytao from #_product_list where type='".$arrcom_article_list[$m]."'";		
		$d->query($sql);
		$tintuc_list = $d->result_array();
		
		for($x = 0 ; $x < count($tintuc_list); $x++){
			urlElement('http://'.$config_url.'/'.$arrcom_product_com[$m].'/'.$tintuc_list[$x]['tenkhongdau'].'','0.8',date(c,$tintuc_list[$x]['ngaytao']));


		}
	}

	for($m = 0; $m < count($arrcom_article); $m++){
		$d->reset();
		$sql = "select id,ten_$lang as ten,tenkhongdau,thumb,photo,ngaytao from #_baiviet where type='".$arrcom_article[$m]."'";		
		$d->query($sql);
		$tintuc = $d->result_array();
		
		for($k = 0, $count_tintuc = count($tintuc); $k < $count_tintuc; $k++){
			urlElement('http://'.$config_url.'/'.$arrcom_article[$m].'/'.$tintuc[$k]['tenkhongdau'].'.html','0.8',date(c,$tintuc[$k]['ngaytao']));
		}
	}
	echo '</urlset>'; 

?>
