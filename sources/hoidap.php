<?php  if(!defined('_source')) die("Error");
	
	$id =  trim($_GET['id']);
	
	$d->reset();
	$sql = "select title,description,keywords from #_setting";
	$d->query($sql);
	$seos = $d->fetch_array();
	
	$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> </span></a></li>
                <li><a href="">'._home.'</a></li>
                <li><a href="tu-van.html">Tư vấn</a></li>
              </ul>';

	$title_bar .= $seos['title'];
	$keyword_bar .= $seos['keywords'];
	$description_bar .= $seos['description'];
	
	if(isset($_REQUEST['noidung'])){
			
		$data['ten'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['noidung'] = $_POST['noidung'];
		$data['stt'] = 1;
		$data['hienthi'] = 0;
		$data['ngaytao'] = time();
		$d->setTable('hoidap');
		if($d->insert($data)){
			transfer("Câu hỏi của bạn sẽ được chúng tôi hồi đáp trong thời gian sớm nhất", "http://$config_url/tu-van.html");
		}else{
			transfer("Hệ thống đang bị gián đoạn. Xin quý khách vui lòng thử lại sau.", "http://$config_url/index.html");
		}
	}
		

	if($id){
		
		
		$sql = "select id,ten,mota,noidung,ngaytao,luotxem,email from #_hoidap where hienthi=1 and tenkhongdau='".$id."'";
		$d->query($sql);
		$tintuc_detail = $d->fetch_array();
				
		$luotxem = $tintuc_detail['luotxem']+1;
		$sql_update = "update #_hoidap SET luotxem=$luotxem where id=".$tintuc_detail['id'];
		$d->query($sql_update);
		
		
		$sql_khac = "select ten,tenkhongdau,ngaytao,id from #_hoidap where hienthi=1 and id !='".$tintuc_detail['id']."' order by stt asc,id desc limit 0,20";
		$d->query($sql_khac);
		$tintuc_khac = $d->result_array();
	
	}else{
		
		$per_page = 24; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_hoidap where hienthi>0 order by stt,id desc";

		$d->reset();
		$sql="select * from $where $limit";
		$d->query($sql);
		$tintuc=$d->result_array();

		$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> </span></a></li>
                <li><a href="">'._home.'</a></li>
                <li><a href="tu-van.html">Tư vấn</a></li>
              </ul>';
		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

	}
?>