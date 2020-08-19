<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
	switch ($com) {
		case "photo":
		  	switch ($type) {
		  		case 'slider':
				  	@define ('_title', "Slider");
				  	@define ('_title_dm', "slider");

				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 1366;
				  	$config_info['img-height'] = 600;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = false;
				  	break;
				case 'quangcao':
				  	@define ('_title', "Quảng cáo");
				  	@define ('_title_dm', "Quảng cáo");

				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 615;
				  	$config_info['img-height'] = 248;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = false;
				  	break;
				case 'thongtinslider':
				  	@define ('_title', "Thông tin dưới slider");
				  	@define ('_title_dm', "Thông tin dưới slider");

				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 75;
				  	$config_info['img-height'] = 74;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = true;
				  	break;
				case 'mangxahoi':
				  	@define ('_title', "Mạng xã hội");
				  	@define ('_title_dm', "mạng xã hội");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 26;
				  	$config_info['img-height'] = 26;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = false;
				  	break;
				case 'mxh-support':
				  	@define ('_title', "Mạng xã hội support");
				  	@define ('_title_dm', "mạng xã hội support");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 26;
				  	$config_info['img-height'] = 26;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = false;
				  	break;
				case 'doitac':
				  	@define ('_title', "Đối tác");
				  	@define ('_title_dm', "đối tác");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 285;
				  	$config_info['img-height'] = 180;
				  	$config_info['img-ratio'] = 1;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = true;
				  	break;
		  		default:
		  			@define ('_title', "Hình ảnh");
				  	@define ('_title_dm', "hình ảnh");
				  	$config_info['title'] = 'Quản lý '._title_dm;
				  	$config_info['full'] = false;
				  	$config_info['img'] = true;
				  	$config_info['img-width'] = 300;
				  	$config_info['img-height'] = 300;
				  	$config_info['img-ratio'] = 2;
				  	$config_info['link'] = true;
				  	$config_info['mota'] = true;
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
