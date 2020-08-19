<?php
if(!defined('_source')) {
    die("Error");
}

$txt_search_certificate = addslashes($_POST['txt_search_certificate']);
if (!empty($txt_search_certificate)) {
    $txt_search_certificate = mysql_real_escape_string($txt_search_certificate);
    $query = "SELECT giamdinh FROM #_baiviet WHERE masp = '$txt_search_certificate' LIMIT 1";
    $d->query($query);
    $result_search_certificate = $d->result_array();
}

$breadcumb ='<ul id="breadcrumb"><li><a href="">'._home.'</a></li><li><a>Tra kiểm định</a></li></ul>';
