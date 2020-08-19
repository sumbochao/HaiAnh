<?php
if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}
?>
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
</script>
<div class="title w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<div class="content bx-border pd-10 bg-white w-100 clearfix">
	<form name="form1" method="post">
		<input type="hidden" name="pid" />
		<input type="hidden" name="command" />
		<table border="0" cellpadding="5px" cellspacing="1px" style="border-collapse: collapse;" width="100%">
		  <?php
			if(is_array($_SESSION['cart'])){
				echo '<tr bgcolor="#FFF" style="color:#333;height: 30px;border-collapse: collapse; border: 1px solid #DDD">
					<td align="center" style="width:4%;padding: 10px 10px; border: 1px solid #DDD;text-transform: uppercase;">Hình SP</td>
					<td align="left" style="border: 1px solid #DDD; padding: 10px 10px;text-transform: uppercase;">'._ten.'</td>
					<td align="center" style="border: 1px solid #DDD;padding: 10px 10px;text-transform: uppercase;">'._cost.'</td>
					<td align="center" style="width:4%;border: 1px solid #DDD;padding: 10px 10px;text-transform: uppercase;">'._xoa.'</td>
				</tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname = get_product_name($pid);
					$phinh = get_product_img($pid,$lang,_upload_baiviet_l,$config_url,100);
					if($q==0) continue;
			?>
		  <tr  style="text-align: center">
			<td width="3%" align="center" style="border: 1px solid #DDD; padding: 10px;">
				<?=$phinh?>
			</td>
			<td width="29%" align="left" style="border: 1px solid #DDD; padding: 10px;"><?=$pname?></td>
			<td width="15%" align="right" style="border: 1px solid #DDD; padding: 10px;">
				<p style="line-height: 22px;"><?=number_format(get_price($pid),0, ',', '.')?></p>
				<p style="line-height: 30px;">X &nbsp;<input type="text" name="product<?=$pid?>" class="update-sl" data-id="<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" style="height: 30px; text-align:center; border:1px solid #F0F0F0" /></p>
				<hr style="border: 0px; border-bottom: 1px solid #DDD !important; background: transparent; margin: 10px 0px;">
				<p style="line-height: 22px; color: #FF0000; font-weight: bold;" id="thanhtien<?=$pid?>"><?=number_format(get_price($pid)*$q,0, ',', '.') ?></p>
			</td>
			<td align="center" style="border: 1px solid #DDD"><a href="javascript:del(<?=$pid?>)"><img src="images/trash.png" border="0" width="25" /></a></td>
		  </tr>
		  <?php } ?>
		  <tr>
			<td colspan="2" align="right" style="height:30px;padding: 10px;"><b><?=_tonggia?>:</b></td>
			  <td colspan="" rowspan="" headers="" align="right" style="padding: 10px;">
			  	<span style="font-size: 20px; color: #FF0000" id="tonggia-x"><?=number_format(get_order_total(),0, ',', '.')?></span>&nbsp;vnđ
			  </td>
			  <td colspan="" rowspan="" headers=""></td>
		  </tr>
		  <tr>
			<td colspan="7" align="right" style="padding-top:10px;">
				<input type="button" value="<?=_muatiep?>" onclick="window.location='san-pham'" class="button bg-orange t-uppercase">
			  	<input type="button" value="<?=_del?>" onclick="clear_cart()" class="button bg-orange t-uppercase">
			  	<input type="button" value="<?=_guidonhang?>" onclick="window.location='thanh-toan.html'" class="button bg-orange t-uppercase"></td>
		  </tr>
		  <?php }else{ echo "<tr ><td align='center'><b style='color:#F00; font-size: 20px;'>"._tb."</b></td>"; } ?>
		</table>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.update-sl').blur(function() {
			var id = $(this).data('id');
			var sl = $(this).val();
			$.ajax({
				url: 'ajax/update_sl.php',
				type: 'POST',
				data: {id: id, sl: sl},
				dataType:'json',
				success: function(data){
					$('#cart-view').html(data.total);
					$('#tonggia-x').html(data.totalorder);
					$('#thanhtien'+id).html(data.thanhtien);

				}
			});
			
		});
	});		
</script>