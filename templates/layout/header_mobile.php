<header id="header-mobile" class="header-mobile-top clearfix">
	<div class="container">
		<aside class="head-mobile-bottom w-100">
			<div class="logo-mobile w-100 t-center">
				<a href="" title="<?=$row_setting['title_'.$lang]?>"><img src="resize/106x74/2/<?=_upload_hinhanh_l.$logo_top['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a>
			</div>
			<div class="mobiletop w-100 t-center">
				<?=$row_setting['hotline']?>
			</div>
			<div class="search f-left o-hidden p-relative" id="search">
			    <form  id="frm-search" name="frm-search1" method="get" action="index.php">
			    	<select name="id_list" class="select-search" id="id_list">
			    		<option value="">Sản phẩm</option>
			    		<?php for($i=0;$i<count($danhmuc_sanpham);$i++){ ?>
						<option value="<?=$danhmuc_sanpham[$i]['id']?>" <?=($_GET['id_list']==$danhmuc_sanpham[$i]['id']) ? 'selected':''?>><?=$danhmuc_sanpham[$i]['ten_'.$lang]?></option>
			    		<?php } ?>
			    	</select>
					<input type="hidden" name="com" value="search">
					<input type="text" required name="keyword" id="keyword" class="text-search input-control f-left bx-border" value="<?=$_GET['keyword']?>" placeholder="<?=_search?>">
					<div class="button-search">
						<i class="fa fa-search"></i>
					</div>
			    </form>
			</div>
		</aside>
	</div>
</header><!-- /header -->