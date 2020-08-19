<div class="search f-left o-hidden p-relative" id="search">
    <form  id="frm-search" name="frm-search" method="get" action="index.php">
	  <input type="hidden" name="com" value="search">
	  <input type="text" required name="keyword" id="keyword" class="text-search input-control f-left bx-border" value="<?=$_GET['keyword']?>" placeholder="<?=_search?>">
      <div class="button-search">
			<i class="fa fa-search"></i>
		</div>
    </form>
</div>
<!-- #search -->