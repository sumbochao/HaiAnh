<?php  if(!defined('_source')) die("Error");
		
		@$idc = addslashes($_GET['idc']);
		
		$per_page = 18; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_product where hienthi>0 and banchay=1 and type='product' order by stt,id desc";
		$sql = "select * from $where $limit";
		
		$d->query($sql);
		$product = $d->result_array();
		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		$title = 'Khuyến mãi';

?>