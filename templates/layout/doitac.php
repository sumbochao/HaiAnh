<section id="doitac" class="doitac-top w-100 clearfix">
  	<div class="container o-hidden">
	    <div class="content w-100 mt-10 mb-10 clearfix">
		   <div class="box-doitac">
		   		<div class="left-doitac">
			   		<div>
			   			<h3>
				   			Thương hiệu nổi tiếng
				   		</h3>
				   		<div class="arrow-dt">
				   			<button type="button" class="prev-dt"><span class="pe-7s-angle-left"></span></button>
	        				<button type="button" class="next-dt"><span class="pe-7s-angle-right"></span></button>
				   		</div>
			   		</div>
			   	</div>
			   	<div class="right-doitac">
			   	 	<?php if(count($thuonghieu_index)>0){ ?>
					<div class="slickDoiTac">
						<?php for($i=0;$i<count($thuonghieu_index);$i++){ ?>
						<div>
							<div class="box-doitac-item">
								<a href="<?=$thuonghieu_index[$i]['tenkhongdau']?>" title="<?=$thuonghieu_index[$i]['ten_'.$lang]?>">
									<img src="resize/180x80/2/<?=_upload_baiviet_l.$thuonghieu_index[$i]['photo']?>" onerror="if (this.src != 'resize/285x160/2/images/no-image.png') this.src = 'resize/285x160/2/images/no-image.png';" alt="<?=$thuonghieu_index[$i]['link']?>"  />
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
			   	</div>
		   	</div>
		</div>
  	</div>
</section>
