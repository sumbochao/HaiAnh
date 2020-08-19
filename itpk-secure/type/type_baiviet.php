<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
	switch ($com) {
		case "baiviet":
		  	switch ($type) {
		  		case 'san-pham':
				  	@define ('_title', "Sản phẩm");
				  	@define ('_title_dm', "Sản phẩm");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 210;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = true;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = true;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = true;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = false;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = true;
				  	$config_pr['giacu'] = true;
				  	
				  	$cap1 = true;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 300;
					  	$config_cap1['img-height'] = 300;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;

					  	$config_cap1['img-qc1'] = false;
					  	$config_cap1['img-qc1-width'] = 1198;
					  	$config_cap1['img-qc1-height'] = 268;
					  	$config_cap1['img-qc1-ratio'] = 1;

					  	$config_cap1['noibat'] = true;

				  	$cap2 = true;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = true;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = false;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
				case 'bo-suu-tap':
				  	@define ('_title', "Bộ sưu tập");
				  	@define ('_title_dm', "Bộ sưu tập");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 210;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = true;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = true;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = true;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = false;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = true;
				  	$config_pr['giacu'] = true;
				  	
				  	$cap1 = true;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 300;
					  	$config_cap1['img-height'] = 300;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;

					  	$config_cap1['img-qc1'] = false;
					  	$config_cap1['img-qc1-width'] = 1198;
					  	$config_cap1['img-qc1-height'] = 268;
					  	$config_cap1['img-qc1-ratio'] = 1;

					  	$config_cap1['noibat'] = true;

				  	$cap2 = false;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = false;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = false;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
		  		case 'dich-vu':
				  	@define ('_title', "Dịch vụ");
				  	@define ('_title_dm', "Dịch vụ");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 240;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = false;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = false;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = false;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = false;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = false;
				  	$config_pr['giacu'] = false;
				  	
				  	$cap1 = false;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 180;
					  	$config_cap1['img-height'] = 80;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;
					  	$config_cap1['noibat'] = false;

				  	$cap2 = false;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = false;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = true;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
				case 'chi-nhanh':
				  	@define ('_title', "Chi nhánh");
				  	@define ('_title_dm', "Chi nhánh");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = true;
				  	$config_pr['img'] = false;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 240;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = false;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = false;
				  	$config_pr['mota'] = false;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = false;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = false;
				  	$config_pr['noidung-ckeditor'] = false;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = true;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = false;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = false;
				  	$config_pr['giacu'] = false;
				  	
				  	$cap1 = false;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 180;
					  	$config_cap1['img-height'] = 80;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;
					  	$config_cap1['noibat'] = false;

				  	$cap2 = false;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = false;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = true;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
				case 'cau-chuyen':
				  	@define ('_title', "Câu chuyện");
				  	@define ('_title_dm', "Câu chuyện");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 240;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = false;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = false;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = false;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = false;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = false;
				  	$config_pr['giacu'] = false;
				  	
				  	$cap1 = false;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 180;
					  	$config_cap1['img-height'] = 80;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;
					  	$config_cap1['noibat'] = false;

				  	$cap2 = false;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = false;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = true;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
				case 'kien-thuc':
				  	@define ('_title', "Kiến thức");
				  	@define ('_title_dm', "Kiến thức");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 240;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = false;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = false;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = false;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = false;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = false;
				  	$config_pr['giacu'] = false;
				  	
				  	$cap1 = false;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 180;
					  	$config_cap1['img-height'] = 80;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;
					  	$config_cap1['noibat'] = false;

				  	$cap2 = false;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = false;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = true;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;

				case 'gioi-thieu':
				  	@define ('_title', "Giới thiệu");
				  	@define ('_title_dm', "Giới thiệu");

				  	$config_pr['title'] = 'Danh sách '._title_dm;
				  	$config_pr['full'] = false;
				  	$config_pr['img'] = true;
				  	$config_pr['img-width'] = 240;
				  	$config_pr['img-height'] = 240;
				  	$config_pr['img-ratio'] = 2;
				  	$config_pr['img-gallery'] = false;
				  	$config_pr['noibat'] = true;
				  	$config_pr['moinhat'] = false;
				  	$config_pr['mota'] = true;
				  	$config_pr['mota-ckeditor'] = false;
				  	$config_pr['thongtin'] = false;
				  	$config_pr['thongtin-ckeditor'] = false;
				  	$config_pr['noidung'] = true;
				  	$config_pr['noidung-ckeditor'] = true;
				  	$config_pr['khuyenmai'] = false;
				  	$config_pr['khuyenmai-ckeditor'] = false;
				  	$config_pr['thongso'] = false;
				  	$config_pr['thongso-ckeditor'] = false;
				  	$config_pr['seo'] = true;
				  	$config_pr['tag'] = false;
				  	$config_pr['gia'] = false;
				  	$config_pr['giacu'] = false;
				  	
				  	$cap1 = false;
					  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
					  	$config_cap1['full'] = true;
					  	$config_cap1['img'] = false;
					  	$config_cap1['img-width'] = 180;
					  	$config_cap1['img-height'] = 80;
					  	$config_cap1['img-ratio'] = 1;
					  	$config_cap1['mota'] = false;
					  	$config_cap1['seo'] = true;
					  	$config_cap1['img-qc'] = false;
					  	$config_cap1['img-qc-width'] = 300;
					  	$config_cap1['img-qc-height'] = 380;
					  	$config_cap1['img-qc-ratio'] = 1;
					  	$config_cap1['noibat'] = false;

				  	$cap2 = false;
					  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
					  	$config_cap2['full'] = true;
					  	$config_cap2['img'] = false;
					  	$config_cap2['img-width'] = 300;
					  	$config_cap2['img-height'] = 300;
					  	$config_cap2['img-ratio'] = 2;
					  	$config_cap2['mota'] = false;
					  	$config_cap2['seo'] = true;
					  	$config_cap2['img-qc'] = false;

				  	$cap3 = false;
					  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
					  	$config_cap3['full'] = true;
					  	$config_cap3['img'] = true;
					  	$config_cap3['img-width'] = 300;
					  	$config_cap3['img-height'] = 300;
					  	$config_cap3['img-ratio'] = 2;
					  	$config_cap3['mota'] = false;
					  	$config_cap3['seo'] = true;
					  	$config_cap3['img-qc'] = false;

				  	break;
				case 'chinh-sach':
					  	@define ('_title', "Chính sách");
					  	@define ('_title_dm', "Chính sách");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 412;
					  	$config_pr['img-height'] = 525;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = true;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;
					case 'khuyen-mai':
					  	@define ('_title', "Khuyến mãi");
					  	@define ('_title_dm', "Khuyến mãi");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 412;
					  	$config_pr['img-height'] = 525;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['noibat'] = false;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;
					case 'vi-sao':
					  	@define ('_title', "Vì sao");
					  	@define ('_title_dm', "Vì sao");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 412;
					  	$config_pr['img-height'] = 525;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = false;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;

					case 'ho-tro':
					  	@define ('_title', "Hỗ trợ");
					  	@define ('_title_dm', "Hỗ trợ");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 412;
					  	$config_pr['img-height'] = 525;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = true;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;
					

					case 'chuong-trinh-khuyen-mai':
					  	@define ('_title', "Chương trình khuyến mãi");
					  	@define ('_title_dm', "Chương trình khuyến mãi");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 412;
					  	$config_pr['img-height'] = 525;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = true;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;

			  		case 'tin-tuc':
					  	@define ('_title', "Tin tức - thời sự");
					  	@define ('_title_dm', "tin tức - thời sự");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 300;
					  	$config_pr['img-height'] = 300;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = true;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;
					case 'khach-hang':
					  	@define ('_title', "Khách hàng");
					  	@define ('_title_dm', "Khách hàng");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 300;
					  	$config_pr['img-height'] = 300;
					  	$config_pr['img-ratio'] = 1;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['noibat'] = true;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = false;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = true;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

					  	break;
			  		default:
			  			@define ('_title', "Bài viết");
					  	@define ('_title_dm', "bài viết");

					  	$config_pr['title'] = 'Danh sách '._title_dm;
					  	$config_pr['full'] = false;
					  	$config_pr['img'] = true;
					  	$config_pr['img-width'] = 300;
					  	$config_pr['img-height'] = 300;
					  	$config_pr['img-ratio'] = 2;
					  	$config_pr['img-gallery'] = true;
					  	$config_pr['noibat'] = false;
					  	$config_pr['moinhat'] = false;
					  	$config_pr['thongtin'] = false;
				  		$config_pr['thongtin-ckeditor'] = false;
					  	$config_pr['mota'] = true;
					  	$config_pr['mota-ckeditor'] = true;
					  	$config_pr['noidung'] = true;
					  	$config_pr['noidung-ckeditor'] = true;
					  	$config_pr['khuyenmai'] = false;
					  	$config_pr['khuyenmai-ckeditor'] = false;
					  	$config_pr['thongso'] = false;
					  	$config_pr['thongso-ckeditor'] = false;
					  	$config_pr['seo'] = true;
					  	$config_pr['tag'] = false;
					  	$config_pr['img-gallery'] = false;
					  	$config_pr['gia'] = false;

					  	$cap1 = false;
						  	$config_cap1['title'] = 'Danh mục '._title_dm.' cấp 1';
						  	$config_cap1['full'] = true;
						  	$config_cap1['img'] = false;
						  	$config_cap1['img-width'] = 300;
						  	$config_cap1['img-height'] = 300;
						  	$config_cap1['img-ratio'] = 2;
						  	$config_cap1['mota'] = false;
						  	$config_cap1['seo'] = true;
						  	$config_cap1['img-qc'] = false;
						  	$config_cap1['img-qc-width'] = 300;
						  	$config_cap1['img-qc-height'] = 300;
						  	$config_cap1['img-qc-ratio'] = 2;
						  	$config_cap1['noibat'] = false;

					  	$cap2 = false;
						  	$config_cap2['title'] = 'Danh mục '._title_dm.' cấp 2';
						  	$config_cap2['full'] = true;
						  	$config_cap2['img'] = true;
						  	$config_cap2['img-width'] = 300;
						  	$config_cap2['img-height'] = 300;
						  	$config_cap2['img-ratio'] = 2;
						  	$config_cap2['mota'] = false;
						  	$config_cap2['seo'] = true;
						  	$config_cap2['img-qc'] = false;

					  	$cap3 = false;
						  	$config_cap3['title'] = 'Danh mục '._title_dm.' cấp 3';
						  	$config_cap3['full'] = true;
						  	$config_cap3['img'] = true;
						  	$config_cap3['img-width'] = 300;
						  	$config_cap3['img-height'] = 300;
						  	$config_cap3['img-ratio'] = 2;
						  	$config_cap3['mota'] = false;
						  	$config_cap3['seo'] = true;
						  	$config_cap3['img-qc'] = false;

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
