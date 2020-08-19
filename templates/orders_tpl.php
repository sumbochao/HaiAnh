<script type="text/javascript">
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
function validatePhone($phone) {
    var filter = /^[0-9-+]{10,11}$/;
    return filter.test($phone);
}
$(document).ready(function() {
	$('#btn-order-submit').click(function() {

		var error = true;
		var id_nguoinhan = $('#use_one_address').val();
		var hoten = $('#hoten').val();
		var diachi = $('#diachi').val();
		var dienthoai = $('#dienthoai').val();
		var email = $('#email').val();
		var city = $('#city').val();
		var dist = $('#dist').val();
		var ghichu = $('#ghichu').val();
		if(hoten==''){
			error = true;
			$('#hoten').addClass('has-error');
			$('#hoten').next('p').html('Quý khách chưa nhập họ tên');
			return false;
		}else{
			error = false;
			$('#hoten').removeClass('has-error');
			$('#hoten').next('p').html('');
		}
		if(dienthoai==''){
			error = true;
			$('#dienthoai').addClass('has-error');
			$('#dienthoai').next('span').next('p').html('Quý khách chưa nhập điện thoại');
			return false;
		}else{
			if(!validatePhone(dienthoai)){
				error = true;
				$('#dienthoai').addClass('has-error');
				$('#dienthoai').next('span').next('p').html('Điện thoại không đúng định dạng');
				return false;
			}else{
				error = false;
				$('#dienthoai').removeClass('has-error');
				$('#dienthoai').next('span').next('p').html('');
			}
		}
		if(email==''){
			error = true;
			$('#email').addClass('has-error');
			$('#email').next('p').html('Quý khách chưa nhập email');
			return false;
		}else{
			if(!validateEmail(email)){
				error = true;
				$('#email').addClass('has-error');
				$('#email').next('p').html('Email không đúng định dạng');
				return false;
			}else{
				error = false;
				$('#email').removeClass('has-error');
				$('#email').next('p').html('');
			}
		}
		if(city==0){
			error = true;
			$('#city').addClass('has-error');
			$('#city').next('p').html('Quý khách chưa chọn thành phố');
			return false;
		}else{
			error = false;
			$('#city').removeClass('has-error');
			$('#city').next('p').html('');
		}
		if(dist==0){
			error = true;
			$('#dist').addClass('has-error');
			$('#dist').next('p').html('Quý khách chưa chọn quận huyện');
			return false;
		}else{
			error = false;
			$('#dist').removeClass('has-error');
			$('#dist').next('p').html('');
		}
		if(diachi==''){
			error = true;
			$('#diachi').addClass('has-error');
			$('#diachi').next('p').html('Quý khách chưa nhập địa chỉ');
			return false;
		}else{
			error = false;
			$('#diachi').removeClass('has-error');
			$('#diachi').next('p').html('');
		}
		
		if(id_nguoinhan==0){
			var hoten_nguoinhan = $('#hoten_nguoinhan').val();
			var diachi_nguoinhan = $('#diachi_nguoinhan').val();
			var dienthoai_nguoinhan = $('#dienthoai_nguoinhan').val();
			var email_nguoinhan = $('#email_nguoinhan').val();
			var city_nguoinhan = $('#city_nguoinhan').val();
			var dist_nguoinhan = $('#dist_nguoinhan').val();
			if(hoten_nguoinhan==''){
				error = true;
				$('#hoten_nguoinhan').addClass('has-error');
				$('#hoten_nguoinhan').next('p').html('Quý khách chưa nhập họ tên');
				return false;
			}else{
				error = false;
				$('#hoten_nguoinhan').removeClass('has-error');
				$('#hoten_nguoinhan').next('p').html('');
			}
			if(dienthoai_nguoinhan==''){
				error = true;
				$('#dienthoai_nguoinhan').addClass('has-error');
				$('#dienthoai_nguoinhan').next('span').next('p').html('Quý khách chưa nhập điện thoại');
				return false;
			}else{
				if(!validatePhone(dienthoai_nguoinhan)){
					error = true;
					$('#dienthoai_nguoinhan').addClass('has-error');
					$('#dienthoai_nguoinhan').next('span').next('p').html('Điện thoại không đúng định dạng');
					return false;
				}else{
					error = false;
					$('#dienthoai_nguoinhan').removeClass('has-error');
					$('#dienthoai_nguoinhan').next('span').next('p').html('');
				}
			}
			if(email_nguoinhan==''){
				error = true;
				$('#email_nguoinhan').addClass('has-error');
				$('#email_nguoinhan').next('p').html('Quý khách chưa nhập email');
				return false;
			}else{
				if(!validateEmail(email_nguoinhan)){
					error = true;
					$('#email_nguoinhan').addClass('has-error');
					$('#email_nguoinhan').next('p').html('Email không đúng định dạng');
					return false;
				}else{
					error = false;
					$('#email_nguoinhan').removeClass('has-error');
					$('#email_nguoinhan').next('p').html('');
				}
			}
			if(city_nguoinhan==0){
				error = true;
				$('#city_nguoinhan').addClass('has-error');
				$('#city_nguoinhan').next('p').html('Quý khách chưa chọn thành phố');
				return false;
			}else{
				error = false;
				$('#city_nguoinhan').removeClass('has-error');
				$('#city_nguoinhan').next('p').html('');
			}
			if(dist_nguoinhan==0){
				error = true;
				$('#dist_nguoinhan').addClass('has-error');
				$('#dist_nguoinhan').next('p').html('Quý khách chưa chọn quận huyện');
				return false;
			}else{
				error = false;
				$('#dist_nguoinhan').removeClass('has-error');
				$('#dist_nguoinhan').next('p').html('');
			}
			if(diachi_nguoinhan==''){
				error = true;
				$('#diachi_nguoinhan').addClass('has-error');
				$('#diachi_nguoinhan').next('p').html('Quý khách chưa nhập địa chỉ');
				return false;
			}else{
				error = false;
				$('#diachi_nguoinhan').removeClass('has-error');
				$('#diachi_nguoinhan').next('p').html('');
			}
		}

		if(error == false){
			$('#frm-order').submit();
		}else{
			return false;
		}
	});
});

</script>
<div class="title w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<div class="content w-100 clearfix">
	<div class="order-right border-order bx-border f-right">
		<div class="order-title border-bottom-order">
			<i class="fa fa-list-ul"></i> Đơn hàng của quý khách (<?=get_total()?> sản phẩm)
		</div>
		<?php if(is_array($_SESSION['cart'])){ $max=count($_SESSION['cart']); ?>
		<div class="order-desc bg-white">
			<?php for($i=0;$i<$max;$i++){
				$pid=$_SESSION['cart'][$i]['productid'];
				$q=$_SESSION['cart'][$i]['qty'];
				$pname=get_product_name($pid);
				$phinh=get_product_img($pid,$lang,_upload_baiviet_l,$config_url,100);
				if($q==0) continue;
			?>
			<div class="row-order bx-border pd-10 border-bottom-order clearfix">
				<div class="img-order ds-inline-block f-left">
					<?=$phinh?>
				</div>
				<div class="desc-order bx-border pl-10 pr-10 ds-inline-block f-left">
					<p><?=$pname?></p>
					<p>x&nbsp;<?=$q?> sản phẩm</p>
				</div>
				<div class="price-order ds-inline-block f-right">
					<p class="t-right">
						<?=number_format(get_price($pid)*$q,0, ',', '.')?>đ
					</p>
				</div>
			</div>
			<?php } ?>

		</div>
		<?php } ?>
		<div class="row-order bg-white bx-border pd-10 clearfix">
			<p class="totai-row w-100 f-left pt-10 pb-5">
				<span class="ds-inline-block f-left">Tổng giá trị đơn hàng</span>
				<span class="ds-inline-block f-right price-dh"><?=number_format(get_order_total(),0, ',', '.')?><u>đ</u></span>
			</p>
			<p class="totai-row w-100 f-left pt-5 pb-5">
				<span class="ds-inline-block f-left">Số tiền phải thanh toán</span>
				<span class="ds-inline-block f-right price-dh"><?=number_format(get_order_total(),0, ',', '.')?><u>đ</u></span>
			</p>
		</div>
	</div>
	<?php
		$city = get_result_array("select id,ten from #_place_city where hienthi=1 order by id asc");
	?>
	<form method="post" name="frm_order" id="frm-order" action="thanh-toan.html" enctype="multipart/form-data">
		<div class="order-left bg-white f-left">
			<div class="box-form w-100 bx-border border-order f-left">
				<div class="order-title border-bottom-order">
					<i class="fa fa-info-circle"></i> Thông tin đặt hàng
				</div>
				<div class="order-desc">
					<div class="order-form ">
						<div class="row-order-form mb-10 clearfix">
							<label class="f-left">Họ và tên</label>
							<div class="row-input f-right">
								<input type="text" class="text-order" name="hoten" id="hoten" value="<?=$_SESSION['logging']['hoten']?>" placeholder="Ví dụ: Nguyễn Văn Nam">
								<p class="error-text cl-red"></p>
							</div>
						</div>
						<div class="row-order-form mb-10 clearfix">
							<label class="f-left">Số điện thoại</label>
							<div class="row-input f-right">
								<input type="text" class="text-order ds-inline-block w-50" name="dienthoai" id="dienthoai" value="<?=$_SESSION['logging']['dienthoai']?>" placeholder="Ví dụ: 0986688688">
								<span class="f-right spn ds-inline-block w-40">
									Nhân viên CSKH sẽ liên hệ với quý khách qua SĐT này
								</span>
								<p class="w-100 f-left error-text cl-red"></p>
							</div>
						</div>
						<div class="row-order-form mb-10 clearfix">
							<label class="f-left">Email</label>
							<div class="row-input f-right">
								<input type="text" class="text-order" name="email" id="email" value="<?=$_SESSION['logging']['email']?>" placeholder="Ví dụ: nguyenvana@gmail.com">
								<p class="error-text cl-red"></p>
							</div>
						</div>
						<div class="row-order-form mb-10 clearfix">
							<label class="f-left">Tỉnh thành</label>
							<div class="row-input f-right">
								<select name="city" id="city" class="text-order">
									<option value="0">Chọn tỉnh thành</option>
									<?php foreach ($city as $k => $v) { ?>
									<option value="<?=$v['id']?>"><?=$v['ten']?></option>
									<?php } ?>
								</select>
								<p class="error-text cl-red"></p>
							</div>
						</div>
						<div class="row-order-form mb-10 clearfix">
							<label class="f-left">Quận huyện</label>
							<div class="row-input f-right">
								<select name="dist" id="dist" class="text-order">
									<option value="0">Chọn quận huyện</option>
								</select>
								<p class="error-text cl-red"></p>
							</div>
						</div>
						<div class="row-order-form mb-10 clearfix">
							<label class="f-left">Địa chỉ</label>
							<div class="row-input f-right">
								<input type="text" class="text-order" name="diachi" id="diachi" value="<?=$_SESSION['logging']['diachi']?>" placeholder="Ví dụ: 106 Nguyễn Đình Khơi. Phường 14, Quận Tân Bình">
								<p class="error-text cl-red"></p>
							</div>
						</div>
						<div class="row-order-form pb-20 mb-20 border-bottom-order clearfix">
							<label class="f-left">Ghi chú</label>
							<div class="row-input f-right">
								<textarea name="noidung" id="noidung" class="text-order h-100" placeholder="Lời nhắn chi tiết, ví dụ: mua màu xanh nếu màu đỏ hết hàng, giao hàng trong giờ hành chính ..."></textarea>
							</div>
						</div>
						<div class="row-order-form clearfix">
							<div class="checkout-radio">
								<input type="hidden" name="use_one_address" id="use_one_address" value="1">
								<div class="checkout-radio-item w-100 f-left mb-10 js-radio-place active" value="1">
									<i class="checkout-radio-icon fa fa-dot-circle-o"></i>
									<div class="checkout-radio-content">Dùng thông tin trên là thông tin nhận hàng </div>
								</div>
								<div class="checkout-radio-item w-100 f-left mb-10 js-radio-place" value="0">
									<i class="checkout-radio-icon fa fa-circle-o"></i>
									<div class="checkout-radio-content">
									Thông tin nhận hàng khác </div>
								</div>
							</div>
						</div>

						<div class="member-down">
							<div class="row-order-form mb-10 clearfix">
								<label class="f-left">Họ và tên</label>
								<div class="row-input f-right">
									<input type="text" class="text-order" name="hoten_nguoinhan" id="hoten_nguoinhan" value="<?=$_SESSION['logging']['hoten']?>" placeholder="Ví dụ: Nguyễn Văn Nam">
									<p class="error-text cl-red"></p>
								</div>
							</div>
							<div class="row-order-form mb-10 clearfix">
								<label class="f-left">Số điện thoại</label>
								<div class="row-input f-right">
									<input type="text" class="text-order ds-inline-block w-50" name="dienthoai_nguoinhan" id="dienthoai_nguoinhan" value="<?=$_SESSION['logging']['dienthoai']?>" placeholder="Ví dụ: 0986688688">
									<span class="f-right spn ds-inline-block w-40">
										Nhân viên CSKH sẽ liên hệ với quý khách qua SĐT này
									</span>
									<p class="w-100 f-left error-text cl-red"></p>
								</div>
							</div>
							<div class="row-order-form mb-10 clearfix">
								<label class="f-left">Email</label>
								<div class="row-input f-right">
									<input type="text" class="text-order" name="email_nguoinhan" id="email_nguoinhan" value="<?=$_SESSION['logging']['email']?>" placeholder="Ví dụ: nguyenvana@gmail.com">
									<p class="error-text cl-red"></p>
								</div>
							</div>
							<div class="row-order-form mb-10 clearfix">
								<label class="f-left">Tỉnh thành</label>
								<div class="row-input f-right">
									<select name="city_nguoinhan" id="city_nguoinhan" class="text-order">
										<option value="0">Chọn tỉnh thành</option>
										<?php foreach ($city as $k => $v) { ?>
										<option value="<?=$v['id']?>"><?=$v['ten']?></option>
										<?php } ?>
									</select>
									<p class="error-text cl-red"></p>
								</div>
							</div>
							<div class="row-order-form mb-10 clearfix">
								<label class="f-left">Quận huyện</label>
								<div class="row-input f-right">
									<select name="dist_nguoinhan" id="dist_nguoinhan" class="text-order">
										<option value="0">Chọn quận huyện</option>
									</select>
									<p class="error-text cl-red"></p>
								</div>
							</div>
							<div class="row-order-form clearfix">
								<label class="f-left">Địa chỉ</label>
								<div class="row-input f-right">
									<input type="text" class="text-order" name="diachi_nguoinhan" id="diachi_nguoinhan" value="<?=$_SESSION['logging']['diachi']?>" placeholder="Ví dụ: 106 Nguyễn Đình Khơi. Phường 4, Quận Tân Bình">
									<p class="error-text cl-red"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-form w-100 mt-20 bx-border f-left">
				<div class="order-desc">
					<?php /*<div class="row-order-form mb-20 clearfix t-center ">
						<p>Bằng việc click vào nút "Đồng ý & tiếp tục" dưới đây, quý khách đã đồng ý với <a class="cl-blue" href="dieu-khoan-su-dung-dich-vu.html" title="điều khoản sử dụng dịch vụ">điều khoản sử dụng dịch vụ</a> của chúng tôi</p>
					</div>*/?>
					<div class="row-order-form mb-20 clearfix t-center ">
						<div class="button bg-orange t-uppercase" id="btn-order-submit">
							Đồng ý &amp; Tiếp tục <i class="fa fa-caret-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.checkout-radio-item').click(function() {
			var v = $(this).attr('value');
			$('.checkout-radio-item').removeClass('active');
			$('.checkout-radio-item').find('i').removeClass('fa-dot-circle-o').addClass('fa-circle-o');
			$(this).addClass('active');
			$(this).addClass('active').find('i').removeClass('fa-circle-o').addClass('fa-dot-circle-o');
			$('#use_one_address').val(v);

			if(v==0){
				$('.member-down').stop().slideDown();
			}else{
				$('.member-down').stop().slideUp();
			}
		});
		$('#city').change(function(event) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/load_quan.php',
				type: 'POST',
				data: {id: id,loai: '1'},
				success: function(data){
					$('#dist').html(data);
				}
			});
			
		});
		$('#city_nguoinhan').change(function(event) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/load_quan.php',
				type: 'POST',
				data: {id: id,loai: '2'},
				success: function(data){
					$('#dist_nguoinhan').html(data);
				}
			});
			
		});
	});
</script>
</div>