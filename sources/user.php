<?php
if(!isset($_SESSION['logging'])){transfer("Bạn chưa đăng nhập vào tài khoản của mình", "http://$config_url/dang-nhap.html");}

$d->reset();
$sql_user = "select * from #_thanhvien where id='".$_SESSION['logging']['id']."'";
$d->query($sql_user);
$user = $d->fetch_array();

switch ($com) {
	case 'thong-tin-ca-nhan':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		info();
		break;
	case 'kiem-tra-don-hang':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		order();
		break;
	case 'doi-mat-khau':
		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
		update();
		break;
	default:
		break;
}
function info(){
	global $d,$user,$message,$status;
	$id = $user['id'];
	if(!empty($_POST)){
		$form = $_POST['data'];
		$size = 1*MB;
		$file_size = $_FILES['file']['size'];
		if($file_size>$size){
			$status = 1;
			$message = "Dung lượng ảnh vượt quá giới hạn cho phép.";
			return false;
		}
		
		$name = $_FILES['file']['name'];
		$name = explode('.',$name);
		$name = changeTitle($name[0]);
		if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_avatar_l,$name."_".time())){
			$data['photo'] = $photo;
			$d->setTable('thanhvien');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_avatar_l.$row['photo']);
			}
		}
		$data['hoten'] = check_dt($form['hoten']);
		$data['dienthoai'] = check_dt($form['dienthoai']);
		$data['ngaysinh'] = $form['ngay']."/".$form['thang']."/".$form['nam'];
		$d->setTable('thanhvien');
		$d->setWhere('id', $id);
		if($d->update($data)){
			$_SESSION['logging']['hoten'] = $data['hoten'];
			$_SESSION['logging']['ngaysinh'] = $data['ngaysinh'];
			$_SESSION['logging']['dienthoai'] = $data['dienthoai'];
			$_SESSION['logging']['photo'] = $data['photo'];
			$status = 0;
			$message = "Thông tin tài khoản của bạn đã được cập nhật.";
		}else{
			$status = 1;
			$message = "Thông tin tài khoản của bạn không được cập nhật.";
		}
	}
}
function update(){
	global $d,$user,$message,$status;
	$id = $user['id'];
	$password = $user['password'];
	if(!empty($_POST)){
		$form = $_POST['data'];
		if($password==md5($form['password'])){
			if($form['password'] != $form['password-old'] ){
				$data['password'] = md5(check_dt($form['password']));
				$d->setTable('thanhvien');
				$d->setWhere('id', $id);
				if($d->update($data)){
					$status = 0;
					$message = "Đã thay đổi mật khẩu thành công.";
				}else{
					$status = 1;
					$message = "Thông tin mật khẩu chưa được thay đổi.";
				}
			}else{
				$status = 1;
				$message = "Mật khẩu cũ và mật khẩu mới không được trùng.";
			}
		}else{
			$status = 1;
			$message = "Mật khẩu cũ không trùng khớp.";
		}
	}
}
function order(){
	global $d,$order,$status,$message;
	if(!empty($_POST)){
		$d->reset();
		$sql_user = "select * from #_order where id_user='".$_SESSION['logging']['id']."' and madonhang='".(string)$_POST['order']."'";
		$d->query($sql_user);
		$order = $d->result_array();
		if(count($order)>0){
			$status = 0;
			$message = "Tìm thấy mã đơn hàng: ". $_POST['order'];
		}else{
			$status = 1;
			$message = "Không tìm thấy đơn hàng của bạn";
		}
	}else{
		$d->reset();
		$sql_user = "select * from #_order where id_user='".$_SESSION['logging']['id']."' order by id desc";
		$d->query($sql_user);
		$order = $d->result_array();
	}
}
?>