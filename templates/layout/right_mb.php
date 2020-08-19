<div class="tt-leftsub-dm">
	<div class="tt-title-left">
		<h2><span>Hỗ trợ bán hàng</span></h2>
	</div>
	<div class="tt-desc-left brtk">
		<div class="icon_hotro">
			<p><?=$row_setting['hotline']?></p>
		</div>
		<div class="icon2_hotro">
			<?php for($i=0, $count=count($yahoo1); $i<$count;$i++){?>
			<p style="color: #009f0f; background: url(images/arrow.png) no-repeat left center; padding-left: 15px;">
				Hỗ trợ
				<a rel="nofollow" href="SKYPE:<?=$yahoo1[$i]['skype']?>?CHAT">
					<img src="images/skype.png" align="absmiddle">
				</a>
				<a rel="nofollow" href="ymsgr:sendim?<? list($name, $duoi) = explode("@", $yahoo1[$i]['yahoo']); echo $name;?>">
                	<img src="images/yahoo.png" align="absmiddle">
                </a>
			</p>
			<p>
				<img src="images/dt.png" align="absmiddle"> <?=$yahoo1[$i]['dienthoai']?>
			</p>
			<p>
				<img src="images/email.png" align="absmiddle"> <?=$yahoo1[$i]['email']?>
			</p>
			<br>
			<?php } ?>
		</div>
	</div>
</div>