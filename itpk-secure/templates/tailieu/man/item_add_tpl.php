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
		
	});

</script>
<div class="wrapper">

	<div class="control_frm">
	    <div class="bc">
	        <ul id="breadcrumbs" class="breadcrumbs">
	        	<li><a href="index.php?com=tailieu&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$config_info['title']?></span></a></li>
	            <li class="current"><a href="#" onclick="return false;"><?=($_GET['act']=='edit') ? 'Sửa':'Thêm'?></a></li>
	        </ul>
	        <div class="clear"></div>
	    </div>
	</div>

	<form name="supplier" id="validate" class="form" action="index.php?com=tailieu&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?><?php if($_REQUEST['currentPage']!='') echo'&currentPage='. $_REQUEST['currentPage'];?>" method="post" enctype="multipart/form-data">
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
			
			<div class="<?=($config_info['full']==true) ? 'oneOne':'colLeft' ?>">
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
					<?php if($config_info['mota']==true){ ?>
					<div class="formRow lang_hidden lang_<?=$k?> <?= ($k == 'vi') ? 'active': '' ?>">
						<label>Mô tả [<?=$v?>]</label>
						<div class="ck_editor">
			                <textarea title="Nhập mô tả . " id="mota_<?=$k?>"  <?= ($config_info['mota-ckeditor']==true) ? 'class="ck_editors"':'rows="8"' ?> name="mota_<?=$k?>"><?=@$item['mota_'.$k]?></textarea>
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
					
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="<?=($config_info['full']==true) ? 'oneOne':'colRight' ?>">
				<div class="widget mtop0">
					<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
						<h6>Hình ảnh và tài liệu</h6>
					</div>
					
					<?php if($config_info['img']==true){ ?>
					<div class="formRow">
						<label>Tải hình ảnh:</label>
						<div class="formRight">
			            	<input type="file" id="file" name="file" />
							<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
							<br/>
							<br/>
							<span style="display: inline-block; line-height: 30px;color:#CCC;">
						 	Width: <?=$config_info['img-width']*$config_info['img-ratio']?>px - Height:<?=$config_info['img-height']*$config_info['img-ratio']?>px
						 </span>
						</div>
						<div class="clear"></div>
					</div>
			        <?php if($_GET['act']=='edit'){?>
					<div class="formRow">
						<label>Hình Hiện Tại :</label>
						<div class="formRight">
							<div class="mt10"><img src="<?=_upload_tailieu.$item['thumb']?>"  alt="NO PHOTO" width="100" /></div>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
					<?php } ?>

					<?php if($config_info['file']==true){ ?>
					<div class="formRow">
						<label>Tải tài liệu:</label>
						<div class="formRight">
			            	<input type="file" id="file1" name="file1" />
							<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="pdf|PDF|doc|DOC|docx|DOCX|rar|RAR|zip|ZIP|xls|XLS|xlsx|XLSX">
							<br/>
							<br/>
							<span style="display: inline-block; line-height: 30px;color:#CCC;">
						 		pdf | PDF | doc | DOC | docx | DOCX | rar | RAR | zip | ZIP | xls | XLS | xlsx | XLSX
						 	</span>
						</div>
						<div class="clear"></div>
					</div>
			        <?php if($_GET['act']=='edit'){?>
					<div class="formRow">
						<label>File Hiện Tại :</label>
						<div class="formRight">
							<div class="mt10"><a href="<?=_upload_tailieu.$item['tailieu']?>" ><?=_upload_tailieu.$item['tailieu']?></a></div>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>
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
				
				<div class="clear"></div>
			</div>
		</div>  
		<div class="formRow fixedBottom">
			<div class="formRight">
                <input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
                <input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
            	<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
            	<a href="index.php?com=tailieu&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS redB" original-title="Thoát">Thoát</a>
			</div>
			<div class="clear"></div>
		</div>
	</form>
</div>

