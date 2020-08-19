<?php  if(!defined('_source')) die("Error");
	
	@$id =  addslashes($_GET['id']);
	if($id!=''){
		$row_detail = get_fetch_array("select * from #_video where hienthi=1 and type='".$type_com."' and tenkhongdau='".$id."'");
		$title_cat = $row_detail["ten_$lang"];
		$title_bar .= $row_detail["ten_$lang"];
		$title = $row_detail["ten_$lang"];
		$tintuc_khac = get_result_array("select * from #_video where hienthi=1 and type='".$type_com."' and id<>'".$id."' limit 0,6");
	}else{
		$per_page = 12; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_video where type='$idl' and hienthi>0 order by stt,id desc";

		$d->reset();
		$sql="select * from $where $limit";
		$d->query($sql);
		$tintuc=$d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		$title_bar .= $title_cat;
		if(count($tintuc)==0) $title_cat="Nội Dung Đang Cập Nhật...";
	}
	
?>