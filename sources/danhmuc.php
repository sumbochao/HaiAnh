<?php
	$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title.'</a></li>
              </ul>';
    $danhmuc_cat = get_result_array("select id,ten_$lang,tenkhongdau from #_product_cat where hienthi=1 and type='product' order by stt asc,id desc");
?>