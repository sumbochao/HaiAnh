<?php  if(!defined('_source')) die("Error");
		switch ($com) {
			case 'thuong-hieu':
				$title_cat = 'Thương hiệu';
				$title = 'Thương hiệu';
				$title_ng = 'Thương hiệu';
				$type_com = 'thuong-hieu';
				break;
			default:
				$title_cat = "Không Tìm Thấy!";
				break;
		}
		@$id_list =  addslashes($_GET['idl']);
		

		$row_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_product_list where hienthi=1 and type='".$type_com."' and tenkhongdau='".$id_list."'");

		if($psize!=0){
			$per_page = $psize;
		}else{
			$per_page = 24;
		}

		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		
		$where = " #_product where hienthi=1 and type='product' and id_thuonghieu='".$row_detail['id']."'  order by stt,ngaytao desc";

		$sql = "select * from $where $limit";
		$d->query($sql);
		$product = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		$breadcumb ='<ul id="breadcrumb">
            <li><a href=""><span class="fa fa-home"> </span></a></li>
            <li><a href="">'._home.'</a></li>
            <li><a href="'.$com.'.html">'.$title_ng.'</a></li>
            <li><a href="'.$com.'/'.$row_detail['tenkhongdau'].'">'.$row_detail['ten_'.$lang].'</a></li>
          </ul>';
		$title_cat = $row_detail["ten_$lang"];
		$title = $row_detail["ten_$lang"];
		$title_bar .= $row_detail['title'];
		$keyword_bar .= $row_detail['keywords'];
		$description_bar .= $row_detail['description'];

		if(count($product)==0) $title_cat= _updating;
?>