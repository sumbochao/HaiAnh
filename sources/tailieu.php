<?php  if(!defined('_source')) die("Error");
	
	
	$per_page = 20; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_tailieu where type='$type_com' and hienthi>0 order by stt,id desc";

	$d->reset();
	$sql="select * from $where $limit";
	$d->query($sql);
	$tintuc=$d->result_array();

	$breadcumb ='<ul id="breadcrumb">
	        <li><a href="">'._home.'</a></li>
	        <li><a href="'.$com.'.html">'.$title.'</a></li>
	      </ul>';
	$url = getCurrentPageURL();
	$paging = pagination($where,$per_page,$page,$url);

	$title_bar .= $title_cat;
	if(count($tintuc)==0) $title_cat="Nội Dung Đang Cập Nhật...";
?>