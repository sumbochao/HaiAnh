<div class="content w-100 mt-10 clearfix">
   <div class="nav-account f-left">
   		<?php include_once _template."user/left_account.php"; ?>
   </div>
   <div class="right-account f-right">
   		<div class="title bx-border brt-none mg-0 pb-5 w-100">
		    <h4 class="mg-0 ds-inline-block p-relative"><?=$title?></h4>
		</div>
		<div class="content w-100 mt-10 clearfix">
			<form method="post" id="frm-order" name="frm-order" action="kiem-tra-don-hang.html" enctype="multipart/form-data">
				<div class="box-account f-left w-100 bx-border bg-white">
					<div class="left-count f-left">
						<?php if($message!=''){ ?>
						<div class="alert <?=($status==1) ? 'alert-error':'alert-success'?> row-count w-100 f-left mb-15">
							<?=$message?>
						</div>
						<?php } ?>
						<div class="row-count w-100 f-left mb-15">
							<label>Mã đơn hàng</label>
							<div class="row-in">
								<input type="text" name="order" class="input-count" id="order" value="<?=$_REQUEST['order']?>" placeholder="">
								<p class="error-text cl-red"></p>
							</div>
						</div>
						
						<div class="row-count w-100 f-left mb-15">
							<label>&nbsp;</label>
							<input class="button bg-primary cl-white t-uppercase" type="button" id="btn-submit-order" value="Kiểm tra"/>
						</div>
					</div>
					<div class="right-count f-right t-center">
						
					</div>
				</div>
			</form>
		</div>
		<div class="title mt-20 bx-border brt-none pb-5 w-100">
		    <h4 class="mg-0 ds-inline-block p-relative"><?=($message=='') ? 'Thông tin đơn hàng':$message?></h4>
		</div>
		<div class="content w-100 mt-10 clearfix">
			<?php if($order){ ?>
			<table class="banggia">
				<tr>
					<td>STT</td>
					<td>Mã đơn hàng</td>
					<td>Họ tên</td>
					<td>Tổng tiền</td>
					<td>Ngày đặt</td>
					<td>Trạng thái</td>
				</tr>

				<?php for($i=0, $count=count($order); $i<$count; $i++){?>
			      <tr>
			        <td>
			          <?=$i+1?>
			        </td>
			        <td align="left">
			          <?=$order[$i]['madonhang']?>
			        </td> 
			        <td>
			          <?=$order[$i]['hoten']?>
			        </td>
			        <td align="left">
			          <?=number_format($order[$i]['tonggia'],0, ',', '.')?>&nbsp;VNĐ
			        </td>
			        <td align="left">
			          <?=date('d/m/Y - g:i A',$order[$i]['ngaytao']);?>
			        </td>
			        <td align="left">
			           <?php 
			              $sql="select trangthai from #_tinhtrang where id= '".$order[$i]['trangthai']."' ";
			              $d->query($sql);
			              $result=$d->fetch_array();
			              echo $result['trangthai'];
			           ?>
			        </td>
			      </tr>
			      <?php } ?>

			</table>
			<?php } ?>
		</div>
   </div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('#btn-submit-order').click(function() {
			error = false;
			var order = $('#order').val();
			if(order==''){
				error = true;
				$('#order').addClass('has-error');
				$('#order').next('p').html('Quý khách chưa nhập mã đơn hàng');
				return false;
			}else{
				error = false;
				$('#order').removeClass('has-error');
				$('#order').next('p').html('');
			}

			if(error == false){
				$('#frm-order').submit();
			}else{
				return false;
			}
		});
	});
</script>