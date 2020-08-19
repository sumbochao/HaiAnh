<link href="ajax_paging/ajax.css" rel="stylesheet" type="text/css" />
<script>
// PHƯƠNG THỨC LOAD KẾT QUẢ 
  function goToByScroll(id){
        // Scroll
      $('html,body').animate({
          scrollTop: ($(".showProduct"+id).offset().top - 70)}, 500);
  }

    function loadData(page,id_tab,id_danhmuc,id_loaiview){
        //$("#loadbody").fadeIn("fast");  
      
        $.ajax
        ({
            type: "POST",
            url: "ajax_paging/ajax_paging.php",
            data: {page:page,id_danhmuc:id_danhmuc,id_loaiview:id_loaiview},
            success: function(msg)
            {
                //$("#loadbody").fadeOut("fast");
                $(id_tab).html(msg);
		        $(id_tab+" .pagination li.active").click(function(){
		          var pager = $(this).attr("p");
		          goToByScroll(id_danhmuc);
		          loadData(pager,id_tab,id_danhmuc,id_loaiview);
		        }); 
            }
        });
    }
    
</script>
<section class="sanphamall-top clearfix">
	<div class="container o-hidden">
		<div class="title bx-border w-100">
			<h3>
				Bất động sản
			</h3>
		</div>
		<div class="desc mt-10">
			<ul class="listindex">
				<li><a class="cursor-pointer clickTab" data-href="0" title="Tất cả">Tất cả</a></li>
				<?php for($i=0;$i<count($product_list_nb);$i++){ ?>
				<li><a class="cursor-pointer clickTab" data-href="<?=$product_list_nb[$i]['id']?>" title="<?=$product_list_nb[$i]['ten']?>"><?=$product_list_nb[$i]['ten']?></a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="content mt-20 w-100  mb-20 clearfix" id="productIndex">
			<div class="show-product">
				<div class="show bds-in showProduct0">
					<script>
				        $(document).ready(function(){
				          loadData(1,".showProduct0",0,'noibat'); 
				        });
				    </script>
			    </div>
			</div>
			<?php for($i=0;$i<count($product_list_nb);$i++){ ?>
			<div class="show-product">
				<div class="hide bds-in showProduct<?=$product_list_nb[$i]['id']?>">
					<script>
				        $(document).ready(function(){
				          loadData(1,".showProduct<?=$product_list_nb[$i]['id']?>",<?=$product_list_nb[$i]['id']?>,'noibat'); 
				        });
				    </script>
			    </div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.clickTab').click(function() {
			$('.clickTab').removeClass('active');
			var id = $(this).data('href');
			$(this).addClass('active');
			$('#productIndex').find('.bds-in').removeClass('show').addClass('hide');
			$('#productIndex').find('.showProduct'+id).removeClass('hide').addClass('show');
		});
	});
</script>
<?php /*<?php for($i=0;$i<count($product_nb);$i++){
					$dm = getListBV($product_nb[$i]['id_list']);
				?>
				<div class="product-slide cl-2 bx-border product-hover f-left">
					<div class="product w-100">
					    <div class="product-img w-100 clearfix">
					        <div class="clearfix">
					        	<a href="bat-dong-san/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">
						            <img class="insImageload" data-load="true" data-src="<?=_upload_baiviet_l.$product_nb[$i]['thumb']?>" alt="<?=$product_nb[$i]['ten']?>">
						        </a>
					        </div>
					        <h5>
					        	<a href="<?=$dm['tenkhongdau']?>"><?=$dm['ten']?></a>
					        </h5>
					    </div>
					  	<div class="product-title w-100 mt-10 clearfix">
							<h4 class="t-left "><a href="bat-dong-san/<?=$product_nb[$i]['tenkhongdau']?>" title="<?=$product_nb[$i]['ten']?>">
								<?=$product_nb[$i]['ten']?>
							</a></h4>
							<p class="t-left">
				               	Diện tích: <?=$product_nb[$i]['dientich']?>
				            </p>
				            <p class="t-left">
				               	Vị trí: <?=$product_nb[$i]['vitri']?>
				            </p>
				            <p class="t-left">
				               	Ngày đăng: <?=date('d-m-Y',$product_nb[$i]['ngaytao'])?>
				            </p>
						</div>
					</div>
				</div>
				<?php } ?>*/?>