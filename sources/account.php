<?php  if(!defined('_source')) die("Error");
	
	if(!isset($_SESSION['logging'])){transfer("Bạn chưa đăng nhập vào tài khoản của mình", "http://$config_url/index.html");}
	
	@$direction =  trim($_GET['direction']);
	
	$d->reset();
	$sql = "select title_$lang,description_$lang,keywords_$lang from #_company";
	$d->query($sql);
	$cccc = $d->fetch_array();
	
	$description = $cccc['description_'.$lang];
	$keywords = $cccc['keywords_'.$lang];
	
	$d->reset();
	$sql_contact = "select * from #_company ";
	$d->query($sql_contact);
	$company_mail = $d->fetch_array();
	
	
	switch($direction){
		case 'history-order':
			$title_bar = _history_order.' - '.$cccc['title_'.$lang];
			$title_abc = '<a href="index.html">'._home.'</a> &raquo; <a href="account/">'._account.'</a> &raquo; '._history_order;
			
			@$id = addslashes($_GET['id']);
		
			$d->reset();
			if($id){
				$template = 'history_order_detail';
			
				$sql_detail = "select * from #_donhang where id_user=".$_SESSION['logging']['id']." and id='".$id."'";
				$d->query($sql_detail);
				$donhang_detail = $d->fetch_array(); 
				
			}else{
				$template = 'history_order';
				$sql = "select id,madonhang,ngaytao,tonggia,trangthai from #_donhang where id_user=".$_SESSION['logging']['id']." order by ngaytao desc";
				$d->query($sql);
				$donhang = $d->result_array();
				
			}
			
			break;
			
		case 'personal':
			$title_bar = _personal.' - '.$cccc['title_'.$lang];
			$title_abc = '<a href="index.html">'._home.'</a> &raquo; <a href="account/">'._account.'</a> &raquo; '._personal;
			$template = 'info';
			
			$d->reset();
			$sql_user = "select * from #_thanhvien where id='".$_SESSION['logging']['id']."'";
			$d->query($sql_user);
			$user = $d->result_array();
			
			$id = $user[0]['id'];
			$date = explode('-',$user[0]['ngaysinh']);
			
			if(!empty($_POST)){
		
				$size = 300000;
				$file_size = $_FILES['file']['size'];
				if($file_size>$size){
					transfer("Dung lượng hình ảnh vượt quá mức cho phép", "http://$config_url/account/personal.html");
				}
				
				$name = $_FILES['file']['name'];
				$name = explode('.',$name);
				$name = changeTitle($name[0]);
				if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_hinhanh_l,$name."_".time())){
					$data['photo'] = $photo;
					$d->setTable('thanhvien');
					$d->setWhere('id', $id);
					$d->select();
					if($d->num_rows()>0){
						$row = $d->fetch_array();
						delete_file(_upload_hinhanh.$row['photo']);
					}
				}
				$data['ten'] = $_POST['name'];
				
				$data['dienthoai'] = $_POST['phone'];
				$data['sex'] = $_POST['sex'];
				$data['ngaysinh'] = $_POST['dd']."-".$_POST['mm']."-".$_POST['yyyy'];
				$data['diachi'] = $_POST['diachi'];
				
				$d->setTable('thanhvien');
				$d->setWhere('id', $id);
				if($d->update($data))
					transfer("Thông tin của bạn đã được cập nhật", "http://$config_url/account/personal.html");
				else
					 transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://$config_url/account/personal.html");

					
			}
			
			
			break;
		
		case 'change-password':
			$title_bar = _repass.' - '.$cccc['title_'.$lang];
			$title_abc = '<a href="index.html">'._home.'</a> &raquo; <a href="account/">'._account.'</a> &raquo; '._repass;
			$template = 're_pass';
			
			if(!empty($_POST)){
				
				$d->reset();
				$sql = "select * from #_thanhvien where email='".$_SESSION['logging']['email']."'";
				$d->query($sql);
				if($d->num_rows() == 0) transfer("Thông tin cung cấp của bạn không đúng", "http://$config_url/account/change-password.html");
				$user = $d->fetch_array();
				
				if($user['password'] != md5($_POST['oldpass']))transfer("Mật khẩu cũ không chính xác", "http://$config_url/account/change-password.html");
				
				if($_POST['pass'] != $_POST['repass'])transfer("Xác nhận mật khẩu không chính xác", "http://$config_url/account/change-password.html");
				
				$password = $_POST['pass'];
				$data['password'] = md5($password);
				
				$d->setTable('thanhvien');
				$d->setWhere('id',$user['id']);
				
				if($d->update($data)){
					unset($_SESSION['logging']);
					transfer("Mật khẩu của bạn đã được thay đổi.<br/>Xin vui lòng đăng nhập lại", "http://$config_url/index.html");
					
				}else{
					 transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://$config_url/index.html");
				}
			
				
				}
			
			break;
			
			default :
				$title_bar = _account.' - '.$cccc['title_'.$lang];
				$title_abc = '<a href="index.html">'._home.'</a> &raquo; '._account;
				$template = 'account';
	}
	
	
	
	
	
	
	
	
	
?>