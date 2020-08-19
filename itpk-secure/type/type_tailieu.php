<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
	switch ($com) {
		case "tailieu":
		  	switch ($type) {
		  		case 'tai-lieu':
				  	@define ('_title', "Tài liều");
				  	@define ('_title_dm', "tài liệu");

				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = true;
				  	$config_info['file'] = true;
				  	$config_info['img'] = false;
				  	$config_info['img-width'] = 300;
				  	$config_info['img-height'] = 300;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['img-gallery'] = true;
				  	$config_info['mota'] = false;
				  	$config_info['mota-ckeditor'] = false;
				  	$config_info['noibat'] = false;
				  	break;

		  		default:
		  			@define ('_title', "Bài viết");
				  	@define ('_title_dm', "bài viết");

				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['file'] = true;
				  	$config_info['img'] = false;
				  	$config_info['img-width'] = 300;
				  	$config_info['img-height'] = 300;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['img-gallery'] = true;
				  	$config_info['mota'] = false;
				  	$config_info['mota-ckeditor'] = false;
				  	$config_info['noibat'] = false;
		  			break;
		  	}
		  	break;

		default:
		 	@define ('_width_thumb', 100);
		  	@define ('_height_thumb', 100);
		  	@define ('_title', "Cập nhật tài liệu");
		  	break;
	}

?>