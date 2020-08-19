<div class="bgss">
	<section id="nav-bar" class="menu-top1 clearfix">
		<div class="container1">
			<div class="p-relative menu-hx w-100">
        		<div class="box-top">
        			<?php include_once _template."layout/search.php"; ?>
        			<div class="banner">
						<a href="" title="<?=$row_setting['title_'.$lang]?>" class="ds-block"><img src="<?=_upload_hinhanh_l.$logo_top['photo']?>" alt="<?=$row_setting['title_'.$lang]?>"/></a>
					</div>
	        		<div class="cart-menu">
						<div>
							<a href="gio-hang.html">
								<img src="images/icon-giohang.png" alt="Giỏ hàng"> Giỏ hàng
								<br>
								<p>(<span id="cart-view"><?=get_total()?></span>) sản phẩm</p>
							</a>
						</div>
					</div>
        		</div>
				

				<div class="menu-but p-relative f-left">
					<a href="#menu-mobile" title="">
						<div class="bg-orange left-0 expand-alias"><span></span></div> Menu
					</a>
				</div>
				<div class="menu-lx">
					<ul class="menu" class="t-left">
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
						<li class="p-relative <?php if($_GET['idl'] == 'lien-he'){echo "active";}?>">
							<a href="lien-he" title="Liên hệ" class="<?php if($_GET['idl'] == 'lien-he'){echo "active";}?>">Liên hệ</a>
						</li>
					</ul>
				</div>
				<div class="cart-hotline">
					[<span id="cart-view-menu"><?=get_total()?></span>] Sản phẩm
				</div>
			</div>
		</div>
	</section>
</div>
