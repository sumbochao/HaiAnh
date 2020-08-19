<?php  if(!defined('_source')) die("Error");
	
	@$id =  (string)addslashes($_GET['id']);
	$row_list = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and type='trang-thai' and tenkhongdau='".$id."'");
	if($row_list){
		$listid = $row_list['id'];
		$breadcumb ='<ul id="breadcrumb">
	                <li><a href="">'._home.'</a></li>
	                <li><a href="san-pham">'._product.'</a></li>
	                <li><a href="'.$com.'.html">'.$bread.'</a></li>
	              </ul>';

		$per_page = $row_setting['page_sp'];
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_baiviet where hienthi=1 and type='".$type_com."' and id_trangthai like'%$listid%'";
		$where .= $where_tk;
		$where .= " order by stt,ngaytao desc ";

		$sql = "select * from $where $limit";
		$d->query($sql);
		$tintuc = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		if(count($tintuc)==0) $title_cat= _updating;
	}
?>