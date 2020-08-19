<?php if($config_pr['seo']==true){ ?>
<script>
function text_count_changed(textfield_id,counter_id){
	var v = $(textfield_id).val();
	if(parseInt(v.length) > 170){
		$(textfield_id).css('border', '1px solid #D90000');
		$(textfield_id).css('background', '#e5e5e5');
		$(counter_id).val(parseInt(v.length));
	}else{
		$(textfield_id).css('border', '1px solid #DDDDDD');
		$(textfield_id).css('background', '#FFF');
		$(counter_id).val(parseInt(v.length));
	}
}
$(document).ready(function(){
	text_count_changed("#description","#des_char");
	$('#description').blur(function(event) {
		text_count_changed($(this),"#des_char");
	});
	$('#description').keypress(function(event) {
		text_count_changed($(this),"#des_char");
	});
});
</script>
<?php } ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.chonngonngu li a').click(function(event) {
			var lang = $(this).attr('href');
			$('.chonngonngu li a').removeClass('active');
			$(this).addClass('active');
			$('.lang_hidden').removeClass('active');
			$('.lang_'+lang).addClass('active');
			return false;
		});
		$('.update_stt').keyup(function(event) {
			var id = $(this).attr('rel');
			var table = 'baiviet_photo';
			var value = $(this).val();
			$.ajax ({
				type: "POST",
				url: "ajax/update_stt.php",
				data: {id:id,table:table,value:value},
				success: function(result) {
				}
			});
		});

		$('.delete_images').click(function(){
	      if (confirm('Bạn có muốn xóa hình này ko ? ')) {
	        var id = $(this).attr('title');
	        var table = 'baiviet_photo';
	        $.ajax ({
	          type: "POST",
	          url: "ajax/delete_images.php",
	          data: {id:id,table:table},
	          success: function(result) {
	          }
	        });
	        $(this).parent().slideUp();
	      }
	      return false;
	    });

	    $('.themmoi').click(function(e) {
			$.ajax ({
				type: "POST",
				url: "ajax/khuyenmai.php",
				success: function(result) {
					$('.load_sp').append(result);
				}
			});
        });

		$('.delete').click(function(e) {
			$(this).parent().remove();
		});

	});

</script>
<?php
function getTHList()
	{
		global $item;
		$sql="select * from table_baiviet_list where type='thuong-hieu' order by stt asc";
		$stmt=mysql_query($sql);
		$str='
		  <select id="id_thuonghieu" name="id_thuonghieu" class="main_select">
		  <option value="">Chọn danh mục 1</option>';
		while ($row=@mysql_fetch_array($stmt)) 
		{
		  if($row["id"]==(int)@$item["id_thuonghieu"])
		    $selected="selected";
		  else 
		    $selected="";
		  $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';      
		}
		$str.='</select>';
		return $str;
	}
	function get_main_loai()
  {
  	global $item;

    $sql="select * from table_baiviet_list where type='loai-van-ban' order by stt asc";
    $stmt=mysql_query($sql);
    $str='
      <select id="id_loai" name="id_loai" class="main_select">
      <option value="">Chọn danh mục 1</option>';
    while ($row=@mysql_fetch_array($stmt))
    {
      if($row["id"]==(int)@$item["id_loai"])
        $selected="selected";
      else
        $selected="";
      $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
    }
    $str.='</select>';
    return $str;
  }

  function get_main_list()
  {
  	global $item;
  	if($_SESSION['login']['role']==1 && $_SESSION['login']['permission']!=''){
  		$disabled = 'disabled';
  	}
    $sql="select * from table_baiviet_list where type='".$_GET['type']."' order by stt asc";
    $stmt=mysql_query($sql);
    $str='
      <select id="id_list" name="id_list" data-level="0" '.$disabled.' data-type="'.$_GET['type'].'" data-child="id_cat" onchange="select_list()" class="main_select select_dmbaiviet">
      <option value="">Chọn danh mục 1</option>';
    while ($row=@mysql_fetch_array($stmt))
    {
      if($row["id"]==(int)@$item["id_list"])
        $selected="selected";
      else
        $selected="";
      $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
    }
    $str.='</select>';
    return $str;
  }

  function get_main_cat()
  {
  	global $item;
    $sql="select * from table_baiviet_cat where id_list='".$item['id_list']."' and type='".$_GET['type']."' order by stt asc";
    $stmt=mysql_query($sql);
    $str='
      <select id="id_cat" name="id_cat" data-level="1" data-child="id_item" data-type="'.$_GET['type'].'" onchange="select_cat()" class="main_select select_dmbaiviet">
      <option value="">Chọn danh mục 2</option>';
    while ($row=@mysql_fetch_array($stmt))
    {
      if($row["id"]==(int)@$item["id_cat"])
        $selected="selected";
      else
        $selected="";
      $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
    }
    $str.='</select>';
    return $str;
  }

  function get_main_item()
  {
  	global $item;
    $sql="select * from table_baiviet_item where id_cat='".$item['id_cat']."' and type='".$_GET['type']."' order by stt asc";
    $stmt=mysql_query($sql);
    $str='
      <select id="id_item" name="id_item" data-level="2" data-child="id_sub" data-type="'.$_GET['type'].'" onchange="select_item()" class="main_select select_dmbaiviet">
      <option value="">Chọn danh mục 3</option>';
    while ($row=@mysql_fetch_array($stmt))
    {
      if($row["id"]==(int)@$item["id_item"])
        $selected="selected";
      else
        $selected="";
      $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
    }
    $str.='</select>';
    return $str;
  }
$trangthai_index = get_result_array("select ten_vi as ten,id,tenkhongdau,photo from #_baiviet_list where type='trang-thai'");
?>
<div class="wrapper">

	<div class="control_frm">
	    <div class="bc">
	        <ul id="breadcrumbs" class="breadcrumbs">
	        	<li><a href="index.php?com=baiviet&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$config_pr['title']?></span></a></li>
	            <li class="current"><a href="#" onclick="return false;"><?=($_GET['act']=='edit') ? 'Sửa':'Thêm'?></a></li>
	        </ul>
	        <div class="clear"></div>
	    </div>
	</div>

	<form name="supplier" id="validate" class="form" action="index.php?com=baiviet&act=save<?php if($_REQUEST['id_list']!='') echo'&id_list='. $_REQUEST['id_list'];?><?php if($_REQUEST['id_cat']!='') echo'&id_cat='. $_REQUEST['id_cat'];?><?php if($_REQUEST['id_item']!='') echo'&id_item='. $_REQUEST['id_item'];?><?php if($_REQUEST['id_sub']!='') echo'&id_sub='. $_REQUEST['id_sub'];?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?><?php if($_REQUEST['currentPage']!='') echo'&currentPage='. $_REQUEST['currentPage'];?>" method="post" enctype="multipart/form-data">
		<div class="mtop0">
			<div class="oneOne">
				<div class="widget mtop0">
					<div class="title chonngonngu" style="border-bottom: 0px solid transparent">
						<ul>
							<?php  foreach ($config['lang'] as $k => $v){ ?>
							<li><a href="<?=$k?>" class="<?= ($k == 'vi') ? 'active': '' ?> tipS" title="<?=$v?>"><img src="./images/<?=$k?>.png" alt="" class="<?=changeTitle($v)?>" /><?=$v?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>

			<div class="<?=($config_pr['full']==true) ? 'oneOne':'colLeft' ?>">
				<div class="widget mtop0">
					<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
						<h6>Thông tin chung</h6>
					</div>

					<?php  foreach ($config['lang'] as $k => $v){ ?>
			        <div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Tiêu đề [<?=$v?>]</label>
						<div class="formRight">
			                <input type="text" name="ten_<?=$k?>" title="Nhập tên danh mục" id="ten_<?=$k?>" class="tipS validate[required]" value="<?=@$item['ten_'.$k]?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php if($config_pr['thongtin']==true){ ?>
					<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Thông tin [<?=$v?>]</label>
						<div class="ck_editor">
			                <textarea title="Nhập thông tin [<?=$v?>]. " id="thongtin_<?=$k?>"  <?= ($config_pr['thongtin-ckeditor']==true) ? 'class="ck_editors"':'rows="3"' ?> name="thongtin_<?=$k?>"><?=@$item['thongtin_'.$k]?></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					

					<?php if($config_pr['mota']==true){ ?>
					<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Mô tả [<?=$v?>]</label>
						<div class="ck_editor">
			                <textarea title="Nhập mô tả [<?=$v?>]. " id="mota_<?=$k?>"  <?= ($config_pr['mota-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?> name="mota_<?=$k?>"><?=@$item['mota_'.$k]?></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php if($config_pr['khuyenmai']==true){ ?>
					<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Khuyến mãi [<?=$v?>]</label>
						<div class="ck_editor">
			                <textarea title="Nhập Khuyến mãi [<?=$v?>]. " id="khuyenmai_<?=$k?>"  <?= ($config_pr['khuyenmai-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?> name="khuyenmai_<?=$k?>"><?=@$item['khuyenmai_'.$k]?></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					
					<?php if($config_pr['noidung']==true){ ?>
					<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Nội dung [<?=$v?>]</label>
						<div class="ck_editor">
			                <textarea title="Nhập nội dung [<?=$v?>]. " id="noidung_<?=$k?>"  <?= ($config_pr['noidung-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?> name="noidung_<?=$k?>"><?=@$item['noidung_'.$k]?></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php } ?>
				</div>
				<?php if($config_pr['img-gallery']==true){ ?>
				<div class="widget mtop10">
					<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
						<h6>Hình đính kèm</h6>
					</div>

					<div class="formRow">
			      		<label>Hình đính kèm: <span>[Width:<?=$config_pr['img-width']*$config_pr['img-ratio']?>px - Height: <?=$config_pr['img-height']*$config_pr['img-ratio']?>px]</span></label>
			      		<div class="formRight">
				      		<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif">
				      			<div class="jFiler jFiler-theme-dragdropbox"><div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Upload files here</h3></div><span class="jFiler-input-choose-btn btn-custom blue-light">Browse Files</span></div></div></div>
				      		</a>
						    <?php if($act=='edit'){?>
						      <?php if(count($ds_photo)!=0){?>
						            <?php for($i=0;$i<count($ds_photo);$i++){?>
						              <div class="item_trich">
						                  <img class="img_trich" src="<?=_upload_baiviet.$ds_photo[$i]['thumb']?>" />
						                  <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>" class="update_stt tipS" />
						                  <a class="delete_images icon-jfi-trash jFiler-item-trash-action" title="<?=$ds_photo[$i]['id']?>" style="color:#FF0000"></a>
						              </div>
						            <?php } ?>
						      <?php }?>
						    <?php }?>
			      		</div>
			          <div class="clear"></div>
			        </div>
				</div>
				<?php } ?>
				<div class="clear"></div>
			</div>

			<div class="<?=($config_pr['full']==true) ? 'oneOne':'colRight' ?>">
				<div class="widget mtop0">
					<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
						<h6>Hình ảnh và danh mục</h6>
					</div>
					<?php if($_GET['type']=='san-pham'){ ?>
					<div class="formRow">
						<label>Mã sản phẩm</label>
						<div class="formRight">
			                <input type="text" name="masp" title="Nhập mã sản phẩm" id="masp" class="tipS validate[required]" value="<?=@$item['masp']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php if($cap1==true){ ?>
					<div class="formRow">
						<label><?=$config_cap1['title']?></label>
						<div class="formRight">
						<?=get_main_list()?>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php if($cap2==true){ ?>
					<div class="formRow">
						<label><?=$config_cap2['title']?></label>
						<div class="formRight">
						<?=get_main_cat()?>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php if($cap3==true){ ?>
					<div class="formRow">
						<label><?=$config_cap3['title']?></label>
						<div class="formRight">
						<?=get_main_item()?>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					
					
					<div id="kcv" class="<?php if($_GET['id_list']!=70){ ?>none<?php } ?>">
						<div class="formRow ">
							<label>Độ tinh khiết</label>
							<div class="formRight">
								<select id="id_clarity" name="id_clarity" class="main_select">
				  					<option value="">Độ tinh khiết</option>
				  					<option value="si2" <?=(@$item['id_clarity']=='si2') ? 'selected':''?>>si2</option>
				  					<option value="si1" <?=(@$item['id_clarity']=='si1') ? 'selected':''?>>si1</option>
				  					<option value="vs2" <?=(@$item['id_clarity']=='vs2') ? 'selected':''?>>vs2</option>
				  					<option value="vs1" <?=(@$item['id_clarity']=='vs1') ? 'selected':''?>>vs1</option>
				  					<option value="vvs2" <?=(@$item['id_clarity']=='vvs2') ? 'selected':''?>>vvs2</option>
				  					<option value="vvs1" <?=(@$item['id_clarity']=='vvs1') ? 'selected':''?>>vvs1</option>
				  					<option value="if" <?=(@$item['id_clarity']=='if') ? 'selected':''?>>if</option>
				  					<option value="fl" <?=(@$item['id_clarity']=='fl') ? 'selected':''?>>fl</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow ">
							<label>Màu sắc</label>
							<div class="formRight">
								<select id="id_color" name="id_color" class="main_select">
				  					<option value="">Màu sắc</option>
				  					<option value="j" <?=(@$item['id_color']=='j') ? 'selected':''?>>j</option>
				  					<option value="i" <?=(@$item['id_color']=='i') ? 'selected':''?>>i</option>
				  					<option value="h" <?=(@$item['id_color']=='h') ? 'selected':''?>>h</option>
				  					<option value="g" <?=(@$item['id_color']=='g') ? 'selected':''?>>g</option>
				  					<option value="f" <?=(@$item['id_color']=='f') ? 'selected':''?>>f</option>
				  					<option value="e" <?=(@$item['id_color']=='e') ? 'selected':''?>>e</option>
				  					<option value="d" <?=(@$item['id_color']=='d') ? 'selected':''?>>d</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow ">
							<label>Hình dáng</label>
							<div class="formRight">
								<select id="id_image" name="id_image" class="main_select">
				  					<option value="">Hình dáng</option>
				  					<?php for($i=0;$i<count($config['hinhdang']);$i++){ ?>
				  					<option value="<?=$i?>" <?=(@$item['id_image']==$i) ? 'selected':''?>><?=$config['hinhdang'][$i]?></option>
				  					<?php } ?>
								</select>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<label>Định lượng</label>
							<div class="formRight">
								<input type="text" name="dinhluong" title="Nhập Định lượng" id="dinhluong" class="tipS" value="<?=@$item['dinhluong']?>" />
							</div>
							<div class="clear"></div>
						</div>
					</div>	
					
					
					<script type="text/javascript">
						$(document).ready(function() {
							$('#id_list').change(function(event) {
								var id = $(this).val();
								if(id==70){
									$('#kcv').removeClass('none');
								}else{
									$('#kcv').addClass('none');
								}
							});
						});
					</script>

					<div class="formRow">
						<label>Ảnh hình ảnh:</label>
						<div class="formRight">
			            	<input type="file" id="file1" name="file1" />
							<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
							<br/>
							<br/>
							<span style="display: inline-block; line-height: 30px;color:#CCC;">
						 	Width: <?=$config_pr['img-width']*$config_pr['img-ratio']?>px - Height:<?=$config_pr['img-height']*$config_pr['img-ratio']?>px
						 </span>
						</div>
						<div class="clear"></div>
					</div>
			        <?php if($_GET['act']=='edit'){?>
					<div class="formRow">
						<label>Hình Hiện Tại :</label>
						<div class="formRight">
							<div class="mt10"><img src="<?=_upload_baiviet.$item['giamdinh']?>"  alt="NO PHOTO" width="100" /></div>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>

					<?php if($_GET['type']=='chi-nhanh'){ ?>
					<?php if($config_pr['thongso']==true){ ?>
					<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Nhúng map [<?=$v?>]</label>
						<div class="ck_editor">
			                <textarea title="Nhập Thông số [<?=$v?>]. " id="thongso_<?=$k?>"  <?= ($config_pr['thongso-ckeditor']==true) ? 'class="ck_editors"':'rows="20"' ?> name="thongso_<?=$k?>"><?=@$item['thongso_'.$k]?></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<div class="formRow">
						<label>Địa chỉ</label>
						<div class="formRight">
							<input type="text" name="dientich" title="Nhập Địa chỉ" id="dientich" class="tipS" value="<?=@$item['dientich']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Điện thoại</label>
						<div class="formRight">
							<input type="text" name="hangmuc" title="Nhập Điện thoại" id="hangmuc" class="tipS" value="<?=@$item['hangmuc']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Email</label>
						<div class="formRight">
							<input type="text" name="chuduan" title="Nhập Email" id="chuduan" class="tipS" value="<?=@$item['chuduan']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<!-- <div class="formRow">
						<label>Vị trí</label>
						<div class="formRight">
							<input type="text" name="vitri" title="Nhập vị trí" id="vitri" class="tipS" value="<?=@$item['vitri']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Link bản đồ</label>
						<div class="formRight">
							<input type="text" name="bando" title="Nhập bản đồ" id="bando" class="tipS" value="<?=@$item['bando']?>" />
						</div>
						<div class="clear"></div>
					</div> -->
					<?php } ?>

					<?php if($_GET['type']=='bat-dong-san'){ ?>
					<div class="formRow">
						<label>Diện tích</label>
						<div class="formRight">
							<input type="text" name="dientich" title="Nhập diện tích" id="dientich" class="tipS" value="<?=@$item['dientich']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Vị trí</label>
						<div class="formRight">
							<input type="text" name="vitri" title="Nhập vị trí" id="vitri" class="tipS" value="<?=@$item['vitri']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
				

					<?php if($config_pr['img']==true){ ?>
					<div class="formRow">
						<label>Tải hình ảnh:</label>
						<div class="formRight">
			            	<input type="file" id="file" name="file" />
							<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
							<br/>
							<br/>
							<span style="display: inline-block; line-height: 30px;color:#CCC;">
						 	Width: <?=$config_pr['img-width']*$config_pr['img-ratio']?>px - Height:<?=$config_pr['img-height']*$config_pr['img-ratio']?>px
						 </span>
						</div>
						<div class="clear"></div>
					</div>
			        <?php if($_GET['act']=='edit'){?>
					<div class="formRow">
						<label>Hình Hiện Tại :</label>
						<div class="formRight">
							<div class="mt10"><img src="<?=_upload_baiviet.$item['thumb']?>"  alt="NO PHOTO" width="100" /></div>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php } ?>
					<div class="formRow">
						<label>Alias</label>
						<div class="formRight">
			                <input type="text" name="tenkhongdau" title="Nhập tên không dấu" id="tenkhongdau" class="tipS validate[required]" value="<?=@$item['tenkhongdau']?>" />
						</div>
						<div class="clear"></div>
					</div>
					

					<?php if($config_pr['gia']==true){ ?>
					<div class="formRow">
						<label>Giá bán</label>
						<div class="formRight">
			                <input type="text" name="giaban" title="Nhập giá bán" id="giaban" class="conso tipS" value="<?=@$item['giaban']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php if($config_pr['giacu']==true){ ?>
					<div class="formRow">
						<label>Giá cũ nếu có</label>
						<div class="formRight">
			                <input type="text" name="giacu" title="Nhập giá cũ nếu có" id="giacu" class="conso tipS" value="<?=@$item['giacu']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php if($_GET['type']=='san-pham'){ ?>
					<div class="formRow none">
						<label>Trạng thái</label>
						<div class="formRight">
			                <select name="id_loai" id="id_loai" class="main_select">
			                	<option value="0">Chọn trạng thái</option>
			                	<?php foreach ($config['loai'] as $k=>$v) { ?>
			                	<option value="<?=$k?>" <?=(@$item['id_loai']==$k) ? 'selected':''?>><?=$v?></option>
			                	<?php } ?>
			                </select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="formRow">
						<label>Trạng thái</label>
						<div class="formRight">
							<?php if ($trangthai_index){ $arr_tt = explode(',', @$item['id_trangthai']); ?>

							<?php foreach ($trangthai_index as $key => $value){ ?>
							<div>
								<label for='tt<?=$value['id']?>' style="line-height: 25px;"><?=$value['ten']?><input type="checkbox" name="tt[]" id="tt<?=$value['id']?>" value="<?=$value['id']?>" <?=(in_array($value['id'],$arr_tt) ? 'checked':'')?>/></label>

							</div>
							<?php } ?>
							<?php } ?>
			                
						</div>
						<div class="clear"></div>
					</div>

					
					<?php } ?>
					<?php if($config_pr['tag']==true){ ?>
					<div class="formRow">
						<label>Tag:</label>
						<div class="formRight">
							<input id="tags_1" type="text" name="tags" class="tags" value="<?=@$item['tags']?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<div class="formRow">
			          <label>Hiển thị : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
			          <div class="formRight">

			            <input type="checkbox" name="hienthi" id="check1" value="1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
			             <label>Số thứ tự: </label>
			              <input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:40px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của danh mục, chỉ nhập số">
			          </div>
			          <div class="clear"></div>
			        </div>
				</div>

				<?php if($config_pr['seo']==true){ ?>
				<div class="widget mtop10">
					<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
						<h6>Nội dung seo</h6>
					</div>

					<div class="formRow">
						<label>Title</label>
						<div class="formRight">
							<input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS" />
						</div>
						<div class="clear"></div>
					</div>

					<div class="formRow">
						<label>Từ khóa</label>
						<div class="formRight">
							<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho danh mục" class="tipS" />
						</div>
						<div class="clear"></div>
					</div>

					<div class="formRow">
						<label>Description:</label>
						<div class="formRight">
							<textarea rows="4" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS" name="description" id="description"><?=@$item['description']?></textarea>
			                <input readonly="readonly" type="text" style="width:45px; margin-top:10px; text-align:center;" name="des_char" id="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 68 - 170 ký tự)</b>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="formRow fixedBottom">
			<div class="formRight">
                <input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
                <input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
            	<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
            	<a href="index.php?com=baiviet&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS redB" original-title="Thoát">Thoát</a>
			</div>
			<div class="clear"></div>
		</div>
	</form>
</div>
<script>
  $(document).ready(function() {
    $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });
  });
</script>
