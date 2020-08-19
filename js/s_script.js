function printdiv(printpage)
{
	var headstr = "<html><head><title></title></head><body>";
	var footstr = "</body>";
	var newstr = document.all.item(printpage).innerHTML;
	var oldstr = document.body.innerHTML;
	document.body.innerHTML = headstr+newstr+footstr;
	window.print();
	document.body.innerHTML = oldstr;
	return false;
}
function onSearch(evt){
	var keyword = $('#keyword');

	if(keyword.val()==''){
		alert('Bạn chưa nhập thông tin tìm kiếm!');
		keyword.focus();
		return false;
	}else{
		$('#frm-search').submit();
	}

}
function doEnter(evt){
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}else{
		return false;
	}
}
function submitMail(){
	if(isEmpty(document.getElementById('email_khachhang'), 'Nhập email của bạn')){
		document.getElementById('email_khachhang').focus();
		return false;
	}
	if(!check_email(document.nhanemail.email_khachhang.value)){
		alert('Email không hợp lệ');
		document.nhanemail.email_khachhang.focus();
		return false;
	}
	document.nhanemail.submit();
}
function submitSearchCertificate()
{
    if(isEmpty(document.getElementById('txt_search_certificate'), 'Xin vui lòng nhập mã sản phẩm')){
        document.getElementById('txt_search_certificate').focus();
        return false;
    }
    document.frm_search_certificate.submit();
}
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
function validatePhone($phone) {
    var filter = /^[0-9-+]{10,11}$/;
    return filter.test($phone);
}
function addCart(id,sl,st){
      $.ajax({
        url: 'ajax/add_giohang.php',
        type: 'POST',
        data: {id: id, sl:sl},
        dataType: 'JSON',
        success: function(data){
            if(st==0){
                $('#cart-view').html(data.total);
                $('#cart-view-header').html(data.total);
                $('#cart-view-mobile').html(data.total);
                $('#cart-view-menu').html(data.total);
                $.confirm({
                    boxWidth: '300px',
                    useBootstrap: false,
                    columnClass: 'small',
                    type: 'orange',
                    title: 'Thông báo đặt hàng',
                    content: data.message,
                    buttons: {
                    close: function(){
                    }
                }
              });
            }

            if(st==1){
                window.location.href = 'thanh-toan.html';
            }
        }
      })
    }
$(document).ready(function() {

	$('#btn-submit-menh').click(function(event) {
		var hoten = $('#hoten');
		var ngaysinh = $('#ngaysinh');
		var gioitinh = $('#gioitinh');
		var amduong = $('#amduong');

		window.location.href = 'tra-cuu-cung-menh/ht-'+hoten.val()+'/ns-'+ngaysinh.val()+'/gt-'+gioitinh.val()+'/ad-'+amduong.val();
	});

	var nav = $('.bgss');

	$(window).scroll(function () {
			if ($(this).scrollTop() > 162) {
				nav.addClass("mfix");
			} else {
				nav.removeClass("mfix");
			}
	});


	$('body').on('click', '.click-menu', function(event) {
		var obj = $(this);
		obj.parents('ul').find('ul').css('display', 'none');
		obj.parents('ul').find('span').addClass('plus');
		obj.next('span').removeClass('plus').addClass('minus');
		obj.next('span').next('ul').css('display', 'block');
	});
	$('body').on('click', 'ul.tabs_vb li', function(event) {
		var obj = $(this);
		var r = obj.attr('rel');

		$('ul.tabs_vb li').removeClass('active');
		obj.addClass('active');
		$('.content-tab-id').hide();
		$('#'+r).fadeIn();
	})
	$('.marquee').marquee({
		speed: 20000,
		gap: 50,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});

	$('.slider-tab li').click(function(event) {
		var o = $(this);
		$('.slider-tab li').removeClass('active');
		o.addClass('active');
		var r = o.attr('rel');
		o.parents('.slider-right').find('.slider-tab-content').removeClass('show').addClass('hide');
		o.parents('.slider-right').find('#'+r).removeClass('hide').addClass('show');
	});
	$('.click-show-hotline').click(function(event) {
		if(!$(this).hasClass('act')){
			$(this).next('span').stop().slideDown(400);
			$(this).addClass('act');
			$(this).find('i').removeClass('pe-7s-angle-down').addClass('pe-7s-angle-up');
		}else{
			$(this).next('span').stop().slideUp(400);
			$(this).removeClass('act');
			$(this).find('i').removeClass('pe-7s-angle-up').addClass('pe-7s-angle-down');
		}
	});

	$('.click-show-hotline-mobile').click(function(event) {
		if(!$(this).hasClass('act')){
			$(this).next('div').stop().slideDown(400);
			$(this).addClass('act');
			$(this).find('i').removeClass('pe-7s-angle-down').addClass('pe-7s-angle-up');
		}else{
			$(this).next('div').stop().slideUp(400);
			$(this).removeClass('act');
			$(this).find('i').removeClass('pe-7s-angle-up').addClass('pe-7s-angle-down');
		}
	});

	$('#menu-mobile').mmenu();
	$('.bgts').click(function() {
	  $('html, body').animate({scrollTop:0},500);
	});

	$('#search .button-search').click(function(evt){
		onSearch(evt);
	});

	$('.click-search,.icon-s').click(function() {
		if($(this).hasClass('active')){
			$(this).find('i').addClass('fa fa-search').removeClass('pe-7s-close');
			$('.search').animate({
				width: "0%",
				opacity: "0"
			}, 1000);
			$(this).removeClass('active');
		}else{
			$('.search').animate({
				width: "100%",
				opacity: "1"
			}, 1000);
			$(this).find('i').removeClass('fa fa-search').addClass('pe-7s-close');
			$(this).addClass('active');
		}
	});


	$('body').append('<div id="top">&uarr;&uarr;</div>');
	$(window).scroll(function() {
	  if($(window).scrollTop() > 100) {
	      $('#top').addClass('top_ani');
	  } else {
	      $('#top').removeClass('top_ani');
	  }
	});

	$('#top').click(function() {
	  $('html, body').animate({scrollTop:0},500);
	});

	


	var slider = $( '.slider-qc' );
	// slider[0].slick.slickGoTo(parseInt(actIndex));

	slider.on('afterChange', function(event, slick, currentSlide){
        $('.slider-desc ul li').removeClass('active');
        $('.slider-desc ul li').eq(currentSlide).addClass('active');
    });
	slider.slick({
		dots: false,
		infinite: false,
		speed: 300,
		vertical: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 2000
	});
	$('.slider-desc ul li').click(function(event) {
		var i = $(this).index();
		slider[0].slick.slickGoTo( parseInt(i) );
	});

	
	$('.slickBST').slick({
		dots: false,
		infinite: false,
		speed: 300,
		vertical: false,
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		autoplay: false,
		autoplaySpeed: 2000,
		responsive: [{
		    breakpoint: 1280,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 1024,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 480,
		    settings: {
		      slidesToShow: 1,
		      slidesToScroll: 1
		    }
		  }
		]
	});
	$('.slickTinTuc').slick({
		dots: false,
		infinite: false,
		speed: 300,
		vertical: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		autoplay: false,
		autoplaySpeed: 2000,
		responsive: [{
		    breakpoint: 1280,
		    settings: {
		      slidesToShow: 4,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 1024,
		    settings: {
		      slidesToShow: 3,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 480,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  }
		]
	});

	$('.slickProduct').slick({
		dots: false,
		infinite: false,
		speed: 300,
		vertical: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [{
		    breakpoint: 1280,
		    settings: {
		      slidesToShow: 4,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 1024,
		    settings: {
		      slidesToShow: 3,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 480,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  }
		]
	});

	$('.slickProductNB').slick({
		dots: false,
		infinite: false,
		speed: 300,
		vertical: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		autoplay: false,
		autoplaySpeed: 2000,
		responsive: [{
		    breakpoint: 1280,
		    settings: {
		      slidesToShow: 4,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 1024,
		    settings: {
		      slidesToShow: 3,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 480,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  }
		]
	});
	$('.slickDoiTac').slick({
		dots: false,
		infinite: true,
		speed: 300,
		vertical: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 2000,
		prevArrow: '.prev-dt',
       	nextArrow: '.next-dt',
		responsive: [
		  {
		    breakpoint: 1024,
		    settings: {
		      slidesToShow: 3,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 480,
		    settings: {
		      slidesToShow: 1,
		      slidesToScroll: 1
		    }
		  }
		]
	});

	$('#video_load').load("ajax/video_load.php?id="+active_youtube);
    $('#list_video').change(function() {
      var id = $(this).val();
      $.ajax({
        url: 'ajax/video_load.php',
        type: 'POST',
        data: {id: id},
        success: function(msg){
           $('#video_load').html(msg);
        }
      })
    });
	 $('.imgvideo').click(function() {
		 var id = $(this).data('id');
		 $.ajax({
			 url: 'ajax/video_load.php',
			 type: 'POST',
			 data: {id: id},
			 success: function(msg){
					$('#video_load').html(msg);
			 }
		 })
	 });
    $('.videoslider').slick({
		dots: false,
		infinite: true,
		speed: 400,
		vertical: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});

    $('#mapfooter').load("ajax/load_map.php?t="+t_time);


    $('#btn-submit-contact').click(function() {

		var error = true;
		var hoten = $('#hoten').val();
		var diachi = $('#diachi').val();
		var dienthoai = $('#dienthoai').val();
		var email = $('#email').val();
		var tieude = $('#tieude').val();
		var noidung = $('#noidung').val();
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

		if(dienthoai==''){
			error = true;
			$('#dienthoai').addClass('has-error');
			$('#dienthoai').next('p').html('Quý khách chưa nhập điện thoại');
			return false;
		}else{
			if(!validatePhone(dienthoai)){
				error = true;
				$('#dienthoai').addClass('has-error');
				$('#dienthoai').next('p').html('Điện thoại không đúng định dạng');
				return false;
			}else{
				error = false;
				$('#dienthoai').removeClass('has-error');
				$('#dienthoai').next('p').html('');
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
		if(tieude==''){
			error = true;
			$('#tieude').addClass('has-error');
			$('#tieude').next('p').html('Quý khách chưa nhập tiêu đề');
			return false;
		}else{
			error = false;
			$('#tieude').removeClass('has-error');
			$('#tieude').next('p').html('');
		}

		if(noidung==''){
			error = true;
			$('#noidung').addClass('has-error');
			$('#noidung').next('p').html('Quý khách chưa nhập nội dung');
			return false;
		}else{
			error = false;
			$('#noidung').removeClass('has-error');
			$('#noidung').next('p').html('');
		}


		if(error == false){
			$('#frm_contact').submit();
		}else{
			return false;
		}
	});

	$('#btn-submit-tuvan').click(function() {

	var error = true;
	var hoten_tv = $('#hoten_tv').val();
	var email_tv = $('#email_tv').val();
	var noidung_tv = $('#noidung_tv').val();
	if(hoten_tv==''){
		error = true;
		$('#hoten_tv').addClass('has-error');
		$('#hoten_tv').next('p').html('Quý khách chưa nhập họ tên');
		return false;
	}else{
		error = false;
		$('#hoten_tv').removeClass('has-error');
		$('#hoten_tv').next('p').html('');
	}

	if(email_tv==''){
		error = true;
		$('#email_tv').addClass('has-error');
		$('#email_tv').next('p').html('Quý khách chưa nhập email');
		return false;
	}else{
		if(!validateEmail(email_tv)){
			error = true;
			$('#email_tv').addClass('has-error');
			$('#email_tv').next('p').html('Email không đúng định dạng');
			return false;
		}else{
			error = false;
			$('#email_tv').removeClass('has-error');
			$('#email_tv').next('p').html('');
		}
	}

	if(noidung_tv==''){
		error = true;
		$('#noidung_tv').addClass('has-error');
		$('#noidung_tv').next('p').html('Quý khách chưa nhập nội dung');
		return false;
	}else{
		error = false;
		$('#noidung_tv').removeClass('has-error');
		$('#noidung_tv').next('p').html('');
	}


	if(error == false){
		$('#frm_tuvan').submit();
	}else{
		return false;
	}
});

	$('#btn-submit-order').click(function() {

		var error = true;
		var hoten1 = $('#hoten1').val();
		var dienthoai1 = $('#dienthoai1').val();
		var email1 = $('#email1').val();
		var noidung1 = $('#noidung1').val();
		if(hoten1==''){
			error = true;
			$('#hoten1').addClass('has-error');
			$('#hoten1').next('p').html('Quý khách chưa nhập họ tên');
			return false;
		}else{
			error = false;
			$('#hoten1').removeClass('has-error');
			$('#hoten1').next('p').html('');
		}

		if(dienthoai1==''){
			error = true;
			$('#dienthoai1').addClass('has-error');
			$('#dienthoai1').next('p').html('Quý khách chưa nhập điện thoại');
			return false;
		}else{
			if(!validatePhone(dienthoai1)){
				error = true;
				$('#dienthoai1').addClass('has-error');
				$('#dienthoai1').next('p').html('Điện thoại không đúng định dạng');
				return false;
			}else{
				error = false;
				$('#dienthoai1').removeClass('has-error');
				$('#dienthoai1').next('p').html('');
			}
		}
		if(email1==''){
			error = true;
			$('#email1').addClass('has-error');
			$('#email1').next('p').html('Quý khách chưa nhập email');
			return false;
		}else{
			if(!validateEmail(email1)){
				error = true;
				$('#email1').addClass('has-error');
				$('#email1').next('p').html('Email không đúng định dạng');
				return false;
			}else{
				error = false;
				$('#email1').removeClass('has-error');
				$('#email1').next('p').html('');
			}
		}

		if(noidung1==''){
			error = true;
			$('#noidung1').addClass('has-error');
			$('#noidung1').next('p').html('Quý khách chưa nhập nội dung');
			return false;
		}else{
			error = false;
			$('#noidung1').removeClass('has-error');
			$('#noidung1').next('p').html('');
		}


		if(error == false){
			$('#frm_order').submit();
		}else{
			return false;
		}
	});


	 $('.tabs-click').click(function() {
        var obj = $(this);
        var i = obj.index()+1;
        $('.tabs-click').removeClass('active');
        obj.addClass('active');
        var tab = '#tabs'+i;
        $('.tabs-content').hide();
        obj.parent('.tabs-detail').parent('.tab-box').find(tab).fadeIn(300);
    });

    $('.minus_giohang').click(function(){
      var number_giohang=$('.number_giohang').val();
      if(number_giohang>1){
        var number_change=parseInt(number_giohang)-1;
        $('.number_giohang').val(number_change);
      }
    });

    $('.plus_giohang').click(function(){
       var number_giohang=$('.number_giohang').val();
      if(number_giohang<101){
        var number_change=parseInt(number_giohang)+1;
        $('.number_giohang').val(number_change);
      }
    });
    $('.slickDetail').slick({
        dots: false,
        infinite: true,
        speed: 300,
        vertical: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000
    });
});
