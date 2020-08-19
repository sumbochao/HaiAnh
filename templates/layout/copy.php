<section id="copy" class="copy">
	<div class="container">
		<div class="content-copy">
			<p class="copy-text">2018 Copyright &copy; <?=$row_setting['ten_'.$lang]?> . All rights reserved. Design by <a href="//<?=$config['link-web']?>" target="_blank"><?=$config['link-web']?></a></p>
			<p class="copy-text"><?=_online?>: <?php $count = count_online(); echo $count['dangxem'];?> | <?=_today?>: <?=$today_visitors?> | <?=_month?>: <?=$month_visitors?> | <?=_visited?>: <?=$all_visitors?></p>
		</div>
	</div>
</section>