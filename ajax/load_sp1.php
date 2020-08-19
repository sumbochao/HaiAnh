<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');
	@define ( _upload_folder , '../upload/');

	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];


	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	$d = new database($config['database']);

	@$id = $_POST['id'];

	if($id==1){
		$d->reset();
		$sql="select id,ten_$lang,tenkhongdau,thumb,photo,masp,giaban,giacu from #_product where spmoi!=0 and hienthi=1 and type='day-cap-dien' order by stt asc,id desc";
		$d->query($sql);
		$product = $d->result_array();
	}
	if($id==2){
		$d->reset();
		$sql="select id,ten_$lang,tenkhongdau,thumb,photo,masp,giaban,giacu from #_product where noibat!=0 and hienthi=1 and type='day-cap-dien' order by stt asc,id desc";
		$d->query($sql);
		$product = $d->result_array();
	}
	if($id==3){
		$d->reset();
		$sql="select id,ten_$lang,tenkhongdau,thumb,photo,masp,giaban,giacu from #_product where banchay!=0 and hienthi=1 and type='day-cap-dien' order by stt asc,id desc";
		$d->query($sql);
		$product = $d->result_array();
	}
?>
<?php
	if(count($product)>0){
	for($i=0; $i<count($product); $i++){
?>
		<?php if($i%4==0) echo "<div class='clearsp'>";?>
			<div class="li <?php if(($i+1)%4==0) echo 'setMr'; ?>">
				<div class="box_img">
					<a href="http://<?=$config_url?>/day-cap-dien/<?=$product[$i]['id']?>/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>" ><img src="http://<?=$config_url.'/'._upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>"></a>
				</div>
				<h3><a href="http://<?=$config_url?>/day-cap-dien/<?=$product[$i]['id']?>/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h3>
				<h4>MSP: <span><?=$product[$i]['masp']?></span></h4>
				<p>Giá bán: 
					<?php if($product[$i]['giaban']!=0){ ?>
                    <span class="price"><?=number_format($product[$i]['giaban'],0,'','.')?><span> VNĐ</span></span>
                   <?php }else{?>
                    <span class="price">Liên hệ</span>
                    <?php } ?>
				</p>
			</div>
		<?php if(($i+1)%4==0){echo '<div class="clear"></div></div>';} ?>

	<?php if(($i+1)%4!=0 && $i==count($product) ) echo "</div>";?> 
<?php } ?>
<?php }else{ ?>
	<div style="text-align: center">
		Sản phẩm đang được cập nhật
	</div>
<?php } ?>
