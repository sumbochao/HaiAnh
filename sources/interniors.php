<?php
	@$id =  addslashes($_GET['id']);
	

	if($id){
		$row_detail = get_fetch_array("select * from #_product where hienthi=1 and type='".$type_com."' and tenkhongdau='".$id."'");
		
		$luotxem = $row_detail['luotxem']+1;
		$sql_update = "update #_product SET luotxem=$luotxem where id=".$row_detail['id'];
		$d->query($sql_update);
			
		$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />
<meta property="og:type" content="website" />
<meta property="og:title" content="'.$row_detail['ten_'.$lang].'" />
<meta property="og:description" content="'.strip_tags($row_detail['description']).'" />
<meta property="og:locale" content="vi" />
<meta property="og:image" content="http://'.$config_url.'/'._upload_product_l.$row_detail['photo'].'" />
<meta itemprop="name" content="'.$row_detail['title'].'">
<meta itemprop="description" content="'.strip_tags($row_detail['description']).'">
<meta itemprop="image" content="http://'.$config_url.'/'._upload_product_l.$row_detail['photo'].'">
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="'.$row_detail['ten_'.$lang].'">
<meta name="twitter:title" content="'.$row_detail['title'].'">
<meta name="twitter:description" content="'.strip_tags($row_detail['description']).'">
<meta name="twitter:creator" content="'.$row_detail['title'].'">
<meta name="twitter:image" content="http://'.$config_url.'/'._upload_product_l.$row_detail['photo'].'">
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Product",
	"name": "'.$row_setting['ten_'.$lang].'",
	"author": "'.$row_setting['ten_'.$lang].'",
	"image": "http://'.$config_url.'/'._upload_product_l.$row_detail['photo'].'",
	"description": "'.strip_tags($row_detail['description']).'",
	"aggregateRating": {
		"@type": "Product",
		"ratingValue": "4.5",
		"reviewCount": "'.$row_detail['luotxem'].'",
		"bestRating": "5",
		"worstRating": "1"
	}
}
</script>';

			
			$hinhanh_sp = get_result_array("select * from #_product_photo where hienthi=1 and id_product='".$row_detail['id']."' and type='".$type_com."' order by stt,id desc");
			$product_prev = get_fetch_array("select tenkhongdau,ten_$lang from #_product where hienthi=1 and type='".$type_com."' and id<'".$row_detail['id']."' order by id desc limit 0,1");
			$product_next = get_fetch_array("select tenkhongdau,ten_$lang from #_product where hienthi=1 and type='".$type_com."' and id>'".$row_detail['id']."' order by id asc limit 0,1");
			// $product = get_result_array("select * from #_product where hienthi=1 and type='".$type_com."' and id_list='".$row_detail['id_list']."' and id!='".$row_detail['id']."' order by stt,ngaytao desc");

			// $danhmuc_detail = get_result_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_product_list where hienthi=1 and type='".$type_com."' order by stt asc, id desc");

			$title = $row_detail['ten_'.$lang];
			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];
	}else{
		$where = " #_product where hienthi=1 and type='".$type_com."' ORDER BY RAND() ";
		$breadcumb ='<ul id="breadcrumb">
		    <li><a href="">'._home.'</a></li>
		    <li><a href="'.$com.'.html">'.$bread.'</a></li>
		  </ul>';
		$sql = "select * from $where";
		$d->query($sql);
		$product = $d->result_array();
	}


	if(count($product)==0) $title_cat= _updating;	
?>