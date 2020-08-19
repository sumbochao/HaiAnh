<?php

	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);

	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;

	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();
	switch($com){
		case 'all':
			$idl =  addslashes($_GET['idl']);
			switch ($idl) {
				case 'lien-he':
					$title_cat = 'Liên hệ với chúng tôi';
					$title = 'Liên hệ với chúng tôi';
					$bread = 'Liên hệ với chúng tôi';
					$source = "contact";
					$template = "contact";
					break;
                case 'tra-kiem-dinh':
                    $title_cat = 'Tra kiểm định';
                    $title = 'Tra kiểm định';
                    $bread = 'Tra kiểm định';
                    $source = "search_certificate";
                    $template = "search_certificate";
                    break;
				case 'dieu-khoan-su-dung':
					$title_cat = 'Điều khoản sử dụng';
					$title = 'Điều khoản sử dụng';
					$bread = 'Điều khoản sử dụng';
					$type_com = 'dieu-khoan-su-dung';
					$source = "baiviet";
					$template = "baiviet";
					break;
				
				case 'tra-gop':
					$title_cat = 'Trả góp';
					$title = 'Trả góp';
					$bread = 'Trả góp';
					$type_com = 'tra-gop';
					$source = "baiviet";
					$template = "baiviet";
					break;
				case 'chinh-sach-bao-mat':
					$title_cat = 'Chính sách bảo mật';
					$title = 'Chính sách bảo mật';
					$bread = 'Chính sách bảo mật';
					$type_com = 'chinh-sach-bao-mat';
					$source = "baiviet";
					$template = "baiviet";
					break;
				
				case 'khuyen-mai':
					$title_cat = 'Chương trình khuyến mãi';
					$title = 'Chương trình khuyến mãi';
					$bread = 'Chương trình khuyến mãi';
					$type_com = 'khuyen-mai';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'kien-thuc':
					$title_cat = 'Kiến thức về kim cương';
					$title = 'Kiến thức về kim cương';
					$bread = 'Kiến thức về kim cương';
					$type_com = 'kien-thuc';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'cau-chuyen':
					$title_cat = 'Câu chuyện về kim cương';
					$title = 'Câu chuyện về kim cương';
					$bread = 'Câu chuyện về kim cương';
					$type_com = 'cau-chuyen';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'gioi-thieu':
					$title_cat = 'Giới thiệu';
					$title = 'Giới thiệu';
					$bread = 'Giới thiệu';
					$type_com = 'gioi-thieu';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'san-pham':
					$title_cat = 'Sản phẩm';
					$title = 'Sản phẩm';
					$bread = 'Sản phẩm';
					$type_com = 'san-pham';
					$source = "newsall";
					$template =isset($_GET['id']) ? "product_detail" : "product";
					break;
				case 'bo-suu-tap':
					$title_cat = 'Bộ sưu tập';
					$title = 'Bộ sưu tập';
					$bread = 'Bộ sưu tập';
					$type_com = 'bo-suu-tap';
					$source = "newsall";
					$template =isset($_GET['id']) ? "product_detail" : "product";
					break;
				case 'thuong-hieu':
					$title_cat = 'Thương hiệu';
					$title = 'Thương hiệu';
					$bread = 'Thương hiệu';
					$type_com = 'san-pham';
					$source = "newsall";
					$template =isset($_GET['id']) ? "product_detail" : "product";
					break;
				case 'tin-tuc':
					$title_cat = 'Tin tức';
					$title = 'Tin tức';
					$bread = 'Tin tức';
					$type_com = 'tin-tuc';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'chinh-sach':
					$title_cat = 'Chính sách';
					$title = 'Chính sách';
					$bread = 'Chính sách';
					$type_com = 'chinh-sach';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'khuyen-mai':
					$title_cat = 'Khuyến mãi';
					$title = 'Khuyến mãi';
					$bread = 'Khuyến mãi';
					$type_com = 'khuyen-mai';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'dich-vu':
					$title_cat = 'Dịch vụ';
					$title = 'Dịch vụ';
					$bread = 'Dịch vụ';
					$type_com = 'dich-vu';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'du-an':
					$title_cat = 'Dự án xây dựng';
					$title = 'Dự án xây dựng';
					$bread = 'Dự án xây dựng';
					$type_com = 'du-an';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'bao-gia':
					$title_cat = 'Báo giá';
					$title = 'Báo giá';
					$bread = 'Báo giá';
					$type_com = 'bao-gia';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'dich-vu':
					$title_cat = 'Dịch vụ';
					$title = 'Dịch vụ';
					$bread = 'Dịch vụ';
					$type_com = 'dich-vu';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
				case 'tra-cuu-cung-menh':
					$title_cat = 'Tra cứu cung mệnh';
					$title = 'Tra cứu cung mệnh';
					$bread = 'Tra cứu cung mệnh';
					$type_com = 'tra-cuu-cung-menh';
					$source = "baiviet";
					$template = "tracuucungmenh";
					break;

				default:
					$title_cat = 'Bài viết';
					$title = 'Bài viết';
					$bread = 'Bài viết';
					$type_com = 'san-pham';
					$source = "newsall";
					$template =isset($_GET['id']) ? "news_detail" : "news";
					break;
			}
			break;

			
		case 'san-pham-khuyen-mai':
			$title_cat = 'Sản phẩm khuyến mãi';
			$title = 'Sản phẩm khuyến mãi';
			$bread = 'Sản phẩm khuyến mãi';
			$kieu = 'moinhat';
			$type_com = 'san-pham';
			$source = "tinhtrang";
			$template = "product";
			break;
		case 'trang-thai':
			$title_cat = 'Trạng thái sản phẩm';
			$title = 'Trạng thái sản phẩm';
			$bread = 'Trạng thái sản phẩm';
			$type_com = 'san-pham';
			$source = "trangthai";
			$template = "product";
			break;
		case 'gio-hang':
			$title_cat = 'Giỏ hàng';
			$title = 'Giỏ hàng';
			$bread = 'Giỏ hàng';
			$source = "giohang";
			$template = "giohang";
			break;
		case 'thanh-toan':
			$title_cat = 'Thanh toán đơn hàng';
			$title = 'Thanh toán đơn hàng';
			$bread = 'Thanh toán đơn hàng';
			$source = "orders";
			$template = "orders";
			break;

		case 'chi-nhanh':
			$title_cat = 'Chi nhánh';
			$title = 'Chi nhánh';
			$bread = 'Chi nhánh';
			$type_com = 'chi-nhanh';
			$source = "chinhanh";
			$template = "chinhanh";
			break;

	



		case 'chi-duong':
			$template = "chiduong";
			break;
		case 'mobile':
			$source = "mobile";
			break;
		case 'desktop':
			$source = "desktop";
			break;


		

		case 'thu-vien-anh':
			$source = "thuvienanh";
			$template =isset($_GET['id']) ? "thuvienanh_detail" : "thuvienanh";
			break;

		case 'dang-ky':
			$title_cat = 'Đăng ký thành viên';
			$title = 'Đăng ký thành viên';
			$bread = 'Đăng ký thành viên';
			$source = "register";
			$template = "register";
			break;
		case 'dang-nhap':
			$title_cat = 'Đăng nhập';
			$title = 'Đăng nhập';
			$bread = 'Đăng nhập';
			$source = "login";
			$template = "login";
			break;

		case 'quen-mat-khau':
			$title_cat = 'Quên mật khẩu';
			$title = 'Quên mật khẩu';
			$bread = 'Quên mật khẩu';
			$source = "forgot_password";
			$template = "user/forgot_password";
			break;
		case 'thong-tin-ca-nhan':
			$title_cat = 'Thông tin cá nhân';
			$title = 'Thông tin cá nhân';
			$bread = 'Thông tin cá nhân';
			$source = "user";
			$template = "user/profile";
			break;
		case 'kiem-tra-don-hang':
			$title_cat = 'Kiểm tra đơn hàng';
			$title = 'Kiểm tra đơn hàng';
			$bread = 'Kiểm tra đơn hàng';
			$source = "user";
			$template = "user/order";
			break;
		case 'doi-mat-khau':
			$title_cat = 'Đổi mật khẩu';
			$title = 'Đổi mật khẩu';
			$bread = 'Đổi mật khẩu';
			$source = "user";
			$template = "user/reset_password";
			break;
		case 'dang-xuat':
			$source = "logout";
			break;
		case 'search':
			$source = "search";
			$template = "search";
			break;
		case 'searchkc':
			$source = "searchkc";
			$template = "searchkc";
			break;
			
		case 'tag':
			$source = "search";
			$template = "product";
			break;

		case 'ngon-ngu':
			if(isset($_GET['lang']))
			{
				switch($_GET['lang'])
					{
					case 'vi':
						$_SESSION['lang'] = 'vi';
						break;
					case 'en':
						$_SESSION['lang'] = 'en';
						break;
					default:
						$_SESSION['lang'] = 'vi';
						break;
					}
			}
			else{
				$_SESSION['lang'] = 'vi';
			}
			//redirect("http://$config_url");
			redirect($_SERVER['HTTP_REFERER']);
			break;
		default:
			$source = "index";
			$template = "index";
			break;
	}

	if($source!="") include _source.$source.".php";

?>
