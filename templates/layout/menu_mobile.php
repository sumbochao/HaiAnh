<nav id="menu-mobile" class="mm-menu mm-offcanvas">
	<ul>
		<li class="p-relative <?php if($source == 'index'){echo "active";}?>">
			<a href="" class="<?php if($source == 'index'){echo "active";}?>" title="Trang chủ">Trang chủ</a>
		</li>
		<li class="p-relative <?php if($_GET['idl'] == 'gioi-thieu'){echo "active";}?>">
			<a href="<?=$gioithieu_xemnhieu[0]['type']?>/<?=$gioithieu_xemnhieu[0]['tenkhongdau']?>" title="Giới thiệu" class="<?php if($_GET['idl'] == 'gioi-thieu'){echo "active";}?>">Giới thiệu</a>
		</li>
		<?php if(count($danhmuc_sanpham)){ ?>
		<?php for($i=0;$i<count($danhmuc_sanpham);$i++){
			$danhmuc_sanpham_lv = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet_cat where hienthi=1 and type='san-pham' and id_list='".$danhmuc_sanpham[$i]['id']."' order by stt asc,id desc");
		?>
		<li class="<?php if($_GET['idl'] == $danhmuc_sanpham[$i]['tenkhongdau']){echo "active";}?>">
			<a href="<?=$danhmuc_sanpham[$i]['tenkhongdau']?>" title="<?=$danhmuc_sanpham[$i]['ten']?>"><?=$danhmuc_sanpham[$i]['ten']?></a>
			<?php if(count($danhmuc_sanpham_lv)){ ?>
			<ul>
				<?php for($k=0;$k<count($danhmuc_sanpham_lv);$k++){ $danhmuc_sanpham_lv1 = get_result_array("select tenkhongdau,id,ten_$lang as ten,type from #_baiviet_item where hienthi=1 and type='san-pham' and id_cat='".$danhmuc_sanpham_lv[$k]['id']."' order by stt asc,id desc");?>
				<li>
					<a href="<?=$danhmuc_sanpham_lv[$k]['tenkhongdau']?>" title="<?=$danhmuc_sanpham_lv[$k]['ten']?>"><?=$danhmuc_sanpham_lv[$k]['ten']?></a>
					<?php if(count($danhmuc_sanpham_lv1)){ ?>
					<ul>
						<?php for($m=0;$m<count($danhmuc_sanpham_lv1);$m++){ ?>
						<li>
							<a href="<?=$danhmuc_sanpham_lv1[$m]['tenkhongdau']?>" title="<?=$danhmuc_sanpham_lv1[$m]['ten']?>"><?=$danhmuc_sanpham_lv1[$m]['ten']?></a>
						</li>
					    <?php } ?>
					</ul>
					<?php } ?>
				</li>
			    <?php } ?>
			</ul>
			<?php } ?>
		</li>
	    <?php } ?>
		<?php } ?>
		<li class="p-relative <?php if($_GET['idl'] == 'tra-kiem-dinh'){echo "active";}?>">
            <a href="tra-kiem-dinh" title="Tra kiểm định" class="<?php if($_GET['idl'] == 'tra-kiem-dinh'){echo "active";}?>">Tra kiểm định</a>
        </li>
		<li class="p-relative <?php if($_GET['idl'] == 'tin-tuc'){echo "active";}?>">
			<a href="tin-tuc" title="Tin tức" class="<?php if($_GET['idl'] == 'tin-tuc'){echo "active";}?>">Tin tức</a>
		</li>
		<li class="p-relative <?php if($_GET['com'] == 'chi-nhanh'){echo "active";}?>">
			<a href="chi-nhanh" title="Cửa hàng" class="<?php if($_GET['com'] == 'chi-nhanh'){echo "active";}?>">Cửa hàng</a>
		</li>
		<li class="p-relative <?php if($_GET['idl'] == 'tra-gop'){echo "active";}?>">
			<a href="tra-gop" title="Trả góp" class="<?php if($_GET['idl'] == 'tra-gop'){echo "active";}?>">Trả góp</a>
		</li>
		<li class="p-relative <?php if($_GET['idl'] == 'lien-he'){echo "active";}?>">
			<a href="lien-he" title="Liên hệ" class="<?php if($_GET['idl'] == 'lien-he'){echo "active";}?>">Liên hệ</a>
		</li>
	</ul>
</nav>
