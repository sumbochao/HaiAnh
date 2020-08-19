<?php  if(!defined('_source')) die("Error");
  


    /*
    $productx = get_result_array("select * from table_product1");
    for($i=0;$i<count($productx);$i++){

        $data['id'] = (int)$productx[$i]['id'];  
        $data['id_list'] = (int)$productx[$i]['id_list'];  
        $data['id_cat'] = (int)$productx[$i]['id_cat'];
        $data['tenkhongdau'] = $productx[$i]['tenkhongdau'];
        $data['ten_vi'] = $productx[$i]['ten_vi'];
        $data['mota_vi'] = magic_quote($productx[$i]['mota_vi']);
        $data['noidung_vi'] = magic_quote($productx[$i]['noidung_vi']); 
        $data['ten_en'] = $productx[$i]['ten_en'];
        $data['mota_en'] = magic_quote($productx[$i]['mota_en']);
        $data['noidung_en'] = magic_quote($productx[$i]['noidung_en']);
        $data['thongtin_vi'] = $productx[$i]['thongso_vi'];   
        $data['thongtin_en'] = $productx[$i]['thongso_en'];
        $data['photo'] = $productx[$i]['photo'];   
        $data['thumb'] = $productx[$i]['thumb'];
        $data['masp'] = $productx[$i]['masp'];
        $data['ngaytao'] = $productx[$i]['ngaytao'];
        $data['ngaysua'] = $productx[$i]['ngaysua']; 
        $data['giaban'] = 0;
        $data['giacu'] = 0;
        $data['masp'] = $productx[$i]['masp'];
        $data['title'] = $productx[$i]['title'];
        $data['keywords'] = $productx[$i]['keyword'];
        $data['description'] = $productx[$i]['description'];
        $data['type'] = 'product';
        $data['stt'] = $productx[$i]['stt'];
        $data['luotxem'] = $productx[$i]['luotxem'];
        $data['hienthi'] = $productx[$i]['hienthi'];
        $d->setTable('product');
        $d->insert($data);
    }*/


	$title_abc = "Trang chủ";
	$title = "Trang chủ";

	// Logo
	$seo_top = get_fetch_array("select photo_$lang from #_photo where com='hinhdaidien'");
	$logos_top = get_fetch_array("select photo_$lang from #_photo where com='logo'");
	$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />
<meta property="og:type" content="website" />
<meta property="og:title" content="'.$row_setting['title'].'" />
<meta property="og:description" content="'.strip_tags($row_setting['description']).'" />
<meta property="og:locale" content="vi" />
<meta property="og:image" content="http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'" />
<meta itemprop="name" content="'.$row_setting['title'].'">
<meta itemprop="description" content="'.strip_tags($row_setting['description']).'">
<meta itemprop="image" content="http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'">
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="'.$row_setting['ten_'.$lang].'">
<meta name="twitter:title" content="'.$row_setting['title'].'">
<meta name="twitter:description" content="'.strip_tags($row_setting['description']).'">
<meta name="twitter:creator" content="'.$row_setting['title'].'">
<meta name="twitter:image" content="http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'">';
	if($config['schema']=='product'){ 
$schema = '<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "'.$row_setting['title'].'",
  "image": "http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'",
  "brand": {
    "@type": "Thing",
    "name": "'.$row_setting['title'].'"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "ratingCount": "89900"
  }
}
</script>
';
}else{
$schema = '<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://google.com/article"
  },
  "headline": "'.$row_setting['ten_'.$lang].'",
  "image": {
    "@type": "ImageObject",
    "url": "http://'.$config_url.'/'._upload_hinhanh_l.$seo_top['photo_'.$lang].'",
    "height": 800,
    "width": 800
  },
  "datePublished": "'.date('c',$config['date_create']).'",
  "dateModified": "2015-02-05T09:20:00+08:00",
  "author": {
    "@type": "Person",
    "name": "'.$row_setting['ten_'.$lang].'"
  },
   "publisher": {
    "@type": "Organization",
    "name": "'.$row_setting['ten_'.$lang].'",
    "logo": {
      "@type": "ImageObject",
      "url": "'.$config_url.'/'._upload_hinhanh_l.$logos_top['photo_'.$lang].'",
      "width": 600,
      "height": 60
    }
  },
  "description": "'.strip_tags($row_setting['description']).'"
}
</script>
';
}
	/*
	$per_page = $row_setting['page_in'];
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_product where spmoi!=0 and hienthi=1 and type='product' order by stt,ngaytao desc ";
	$sql = "select id,title'enkhongdau,thumb,photo,masp,giaban,giacu,spmoi,noibat,banchay,rating,luotxem from $where $limit";
	$d->query($sql);
	$product_index = $d->result_array();

	$url = 'index.html';
	$paging = pagination($where,$per_page,$page,$url);
	*/



?>