<div class="left-item mb-20 w-100">
	<div class="title-left">
		<h2>Hỗ trợ trực tuyến</h2>
	</div>
	<div class="desc-left">
		<div class="icon2_hotro">
			<?php for($i=0, $count=count($yahoo); $i<$count;$i++){?>
			<p class="t-uppercase t-weight-bold fotx">
				<span class="fotx"><?=$yahoo[$i]['ten']?></span>
			</p>
			<p>
				<img src="images/icon-hotline.png" align="absmiddle" alt="<?=$yahoo[$i]['dienthoai']?>"> <span>Điện thoại: <?=$yahoo[$i]['dienthoai']?></span>
			</p>
			<p>
				<img src="images/icon-email.png" align="absmiddle" alt="<?=$yahoo[$i]['email']?>"> <span>Email: <?=$yahoo[$i]['email']?></span>
			</p>
			<?php if($i!=count($yahoo)-1){ ?>
			<div class="line"></div>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="left-item w-100  mt-20">
	<div class="img-qc">
		<a href="<?=$quangcao_left['link']?>" title="<?=$row_setting['title_'.$lang]?>"><img src="<?=_upload_hinhanh_l.$quangcao_left['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a>
	</div>
	<div class="img-qc">
		<a href="<?=$quangcao_right['link']?>" title="<?=$row_setting['title_'.$lang]?>"><img src="<?=_upload_hinhanh_l.$quangcao_right['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a>
	</div>
</div>
<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Video</h2>
	</div>
	<div class="desc-left clearfix">
		<div id="video_load"></div>
   	<div class="select_video">
     		<select name="" id="list_video">
            <?php for($i=0; $i<count($video_na); $i++){ ?>
            <option value="<?=youtobi($video_na[$i]['links'])?>"><?=$video_na[$i]['ten_'.$lang]?></option>
            <?php } ?>
        </select>
   	</div>
	</div>
</div>
<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Thống kê</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="thongke f-left mt-0 w-100">
	        <p><img src="images/tt-dangonline.png" alt="<?=_online?>: <?php $count = count_online(); echo $count['dangxem'];?>"> <?=_online?>: <span><?php $count = count_online(); echo $count['dangxem'];?></span></p>
	        <p><img src="images/tt-homnay.png" alt="<?=_today?>: <?=$today_visitors?>"> <?=_today?>: <span><?=$today_visitors?></span></p>
	        <p><img src="images/tt-trongthang.png" alt="<?=_month?>: <?=$month_visitors?>"> <?=_month?>: <span><?=$month_visitors?></span></p>
	        <p><img src="images/tt-tongtruycap.png" alt="<?=_visited?>: <?=$all_visitors?>"> <?=_visited?>: <span><?=$all_visitors?></span></p>
	    </div>
	    <div class="content f-left w-100 mt-10 clearfix">
          <select class="select-lkw" onchange="window.open(this.value,'_blank');">
            <option value="">Liên kết web</option>
			<?php
			$lkw = explode(',',$row_setting['lienketweb']);
			?>
			<?php for($i=0;$i<count($lkw);$i++){ ?>
			<option value="<?=$lkw[$i]?>"><?=$lkw[$i]?></option>
			<?php } ?>
          </select>
        </div>
	</div>
</div>



<?php /*



<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Tin tức</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="box-tintuc slickTinTuc">
          <?php for($i=1;$i<count($tintuc_moi);$i++){ ?>
          <div>
            <div class="box-tintuc-item">
              <div class="img">
                <a href="tin-tuc/<?=$tintuc_moi[$i]['tenkhongdau']?>.html" title="<?=$tintuc_moi[$i]['ten_'.$lang]?>">
                  <img src="resize/185x135/1/<?=_upload_baiviet_l.$tintuc_moi[$i]['photo']?>" alt="<?=$tintuc_moi[$i]['ten_'.$lang]?>">
                </a>
              </div>
              <div class="desc t-left">
                <h5><a class="cl-black" href="tin-tuc/<?=$tintuc_moi[$i]['tenkhongdau']?>.html" title="<?=$tintuc_moi[$i]['ten_'.$lang]?>">
                  <?=$tintuc_moi[$i]['ten_'.$lang]?>
                </a></h5>
                <p class="cl-black">
                  <?=catchuoi(strip_tags($tintuc_moi[$i]['mota_'.$lang]),30)?>
                </p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
	</div>
</div>
<div class="tt-leftsub-dm">
	<div class="tt-title-left">
		<h2><?=_support?></h2>
	</div>
	<div class="tt-desc-left bgx">
		<div class="icon1_hotro">
			<img src="images/hotrott-min.png" alt="Hỗ trợ">
			<p class="m1s"><span>Hotline:</span> <?=$row_setting['hotline']?></p>
		</div>
		<div class="icon2_hotro">
			<?php for($i=0, $count=count($yahoo); $i<$count;$i++){?>
			<p>
				<img src="images/ht1.png" align="absmiddle" alt="<?=$yahoo[$i]['dienthoai']?>"> <span><?=$yahoo[$i]['ten']?></span>
			</p>
			<p style="line-height: 25px; color: #FF0000;">
				<img src="images/ht2.png" align="absmiddle" alt="<?=$yahoo[$i]['dienthoai']?>"> <span><?=$yahoo[$i]['dienthoai']?></span>
			</p>
			<p style="line-height: 26px;">
				<img src="images/ht3.png" align="absmiddle" alt="<?=$yahoo[$i]['email']?>"> <span><?=$yahoo[$i]['email']?></span>
			</p>
			<?php if($i!=count($yahoo)-1){ ?>
			<hr>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="tt-leftsub-dm">
	<div class="tt-title-left">
		<h2>Video clips</h2>
	</div>
	<div class="tt-desc-left">

	</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#video_load').load("ajax/video_load.php?id="+"<?=youtobi($video_na[0]['links'])?>");
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
  });
</script>
*/?>
