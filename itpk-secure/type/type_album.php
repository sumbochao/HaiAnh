<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
	switch ($com) {
		case "album":
		  	switch ($type) {
		  		case 'album':
				  	@define ('_title', "Album cưới");
				  	@define ('_title_dm', "album cưới");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = true;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 570;
				  	$config_info['img-height'] = 420;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['img-gallery'] = true;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = true;
				  	$config_info['noidung'] = false;
				  	$config_info['seo'] = true;

				  	$cap=false;
				  	$config_cap['title'] = 'Quản lý '._title_dm.' cấp 1';
				  	$config_cap['full'] = true;
				  	$config_cap['img'] = true;
				  	$config_cap['img-width'] = 1100;
				  	$config_cap['img-height'] = 800;
				  	$config_cap['img-ratio'] = 1;
				  	$config_cap['link'] = true;
				  	$config_cap['seo'] = true;

				  	break;


		  		default:
		  			@define ('_title', "Hình ảnh");
				  	@define ('_title_dm', "hình ảnh");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = true;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 550;
				  	$config_info['img-height'] = 400;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['img-gallery'] = true;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = false;
				  	$config_info['noidung'] = false;
				  	$config_info['seo'] = false;

				  	$cap=false;
				  	$config_cap['title'] = 'Quản lý '._title_dm.' cấp 1';
				  	$config_cap['full'] = true;
				  	$config_cap['img'] = true;
				  	$config_cap['img-width'] = 550;
				  	$config_cap['img-height'] = 400;
				  	$config_cap['img-ratio'] = 2;
				  	$config_cap['link'] = true;
				  	$config_cap['seo'] = true;
		  			break;
		  	}
		  	break;

		default:
		 	@define ('_width_thumb', 100);
		  	@define ('_height_thumb', 100);
		  	@define ('_title', "Cập nhật hình ảnh");
		  	break;
	}

?>