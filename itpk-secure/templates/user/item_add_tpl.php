<script language="javascript" src="media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.frm.username, "Chưa nhập tên đăng nhập.")){
		document.frm.username.focus();
		return false;
	}
	<?php if($_GET['act']=='add'){?>
	if(isEmpty(document.frm.oldpassword, "Chưa nhập mật khẩu.")){
		document.frm.oldpassword.focus();
		return false;
	}
	
	if(document.frm.oldpassword.value.length<5){
		alert("Mật khẩu phải nhiều hơn 4 ký tự.");
		document.frm.oldpassword.focus();
		return false;
	}
	<?php } ?>
	if(!isEmpty(document.frm.email) && !check_email(document.frm.email.value)){
		alert('Email không hợp lệ.');
		document.frm.email.focus();
		return false;
	}
}
</script>
<?php
	$sql = "select ten,id,mausac from #_phanquyen order by stt,id desc";
	$d->query($sql);
	$quyenhang = $d->result_array();
?>


<div class="wrapper">

<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="index.php?com=user&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Thêm thành viên</span></a></li>
            <li class="current"><a href="#" onclick="return false;">Thêm</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>



<form name="frm"  class="form"  method="post" action="index.php?com=user&act=save" enctype="multipart/form-data" class="nhaplieu" onSubmit="return js_submit();">
<div class="oneOne">
	<div class="widget mtop0">
		<div class="formRow">
			<label>Tên đăng nhập :</label>
			<div class="formRight">
	        	<input type="text" name="username" id="username" value="<?=$item['username']?>" class="input" <?php if($_GET['act']=='edit'){?> readonly="readonly"<?php } ?>  />
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Mật khẩu :</label>
			<div class="formRight">
	        	<input type="password" name="oldpassword" id="oldpassword" value="" class="input" />
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Email :</label>
			<div class="formRight">
	        	<input type="text" name="email" id="email" value="<?=$item['email']?>" class="input" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Họ tên :</label>
			<div class="formRight">
	        	<input type="text" name="ten" id="ten" value="<?=$item['ten']?>" class="input" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Điện thoại :</label>
			<div class="formRight">
	        	<input type="text" name="dienthoai" value="<?=$item['dienthoai']?>" class="input" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Địa chỉ :</label>
			<div class="formRight">
	        	<input type="text" name="diachi" id="diachi" value="<?=$item['diachi']?>" class="input" />
			</div>
			<div class="clear"></div>
		</div>
		<?php
			$danhmuc_khoinganh = get_result_array("select id,ten_vi,tenkhongdau,photo from #_baiviet_list where hienthi=1 and type='khoi-nganh' order by stt asc,id desc");
			$danhmuc_tintuc = get_result_array("select id,ten_vi,tenkhongdau,photo from #_baiviet_list where hienthi=1 and type='tin-tuc' order by stt asc,id desc");
		?>

		<div class="formRow">
			<label>Khối ngành:</label>
			<?php for($i=0;$i<count($danhmuc_khoinganh);$i++){

				$permiss = json_decode($item['permission'],true);

			?>
			<div class="formRight">
	        	<label for="checkquyen<?=$danhmuc_khoinganh[$i]['id']?>"><?=$danhmuc_khoinganh[$i]['ten_vi']?> :</label><input type="checkbox" id="checkquyen<?=$danhmuc_khoinganh[$i]['id']?>" name="checkquyen[]" <?=(in_array("khoi-nganh|".$danhmuc_khoinganh[$i]['id'], $permiss)) ? 'checked':''?> value="khoi-nganh|<?=$danhmuc_khoinganh[$i]['id']?>">
			</div>
			<div class="clear"></div>
			<?php } ?>
		</div>
		<?php /*
		<div class="formRow">
			<label>Tin tức:</label>
			<?php for($i=0;$i<count($danhmuc_tintuc);$i++){ ?>
			<div class="formRight">
	        	<label for="checkquyen<?=$danhmuc_tintuc[$i]['id']?>"><?=$danhmuc_tintuc[$i]['ten_vi']?> :</label><input type="checkbox" id="checkquyen<?=$danhmuc_tintuc[$i]['id']?>" name="checkquyen[]" value="tin-tuc|<?=$danhmuc_tintuc[$i]['id']?>">
			</div>
			<div class="clear"></div>
			<?php } ?>
		</div>
		*/?>

		<div class="formRow">
			<label>Số thứ tự :</label>
			<div class="formRight">
	        	<input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px">
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Hiển thị :</label>
			<div class="formRight">
	        	<input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
			</div>
			<div class="clear"></div>
		</div>
	       	
		<div class="formRow ">
		<label></label>
		<div class="formRight">
			<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
			<input type="submit" value="Lưu"  class="button blueB" />
			<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=user&act=man'" class="button blueB" />
		</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</form>