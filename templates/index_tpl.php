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
<div class="tt-title">
	<h3>Sản phẩm tiêu biểu</h3>
</div>
<div class="tt-desc mt2 mb2">
	<div class="showProduct0 hien_sp">
		<script>
			$(document).ready(function(){
				loadData(1,".showProduct0",0,'noibat');	
			});
		</script>
	</div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
      $('.slickProduct').slick({
        dots: false,
        infinite: true,
        speed: 300,
        vertical: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000
      });
  });
</script>
<?php /*
<div class="tt-title">
	<h3>Về chúng tôi</h3>
</div>
<div class="tt-desc mt2">
	<div class="ctn_r">
		<a href="gioi-thieu.html" title="Giới thiệu"><img src="resize/386x254/1/<?=_upload_baiviet_l.$gioithieu['photo']?>" alt="Giới thiệu"></a>
  	</div>
  	<div class="ctn_s">
  		<div class="tieude2">
  			<h2><?=$gioithieu['ten']?></h2>
  		</div>
		<div class="contentgt">
			<?=$gioithieu['mota']?>
		</div>	
  	</div>
</div>
*/?>