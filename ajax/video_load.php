<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../libraries/');
    //Lưu ngôn ngữ chọn vào $_SESSION
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    $lang=$_SESSION['lang'];
	include_once _lib."config.php";
    include_once _lib."constant.php";
    include_once _lib."functions.php";
    include_once _lib."class.database.php";
    include_once _source."lang_$lang.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."file_requick.php";
    include_once _lib."counter.php"; 
	include_once _lib."class.database.php";
    
	$d = new database($config['database']);
		
	$d->reset();
	$sql="select id,ten_$lang,tenkhongdau,links,photo,thumb from #_video where hienthi=1 and type='video' order by stt asc,id desc";
	$d->query($sql);
	$video_nb = $d->result_array();
	$chuoi = '';
	if($_GET['id']!=''){
		$chuoi .= '<div class="video-container">';
		    $chuoi .= '<iframe src="http://www.youtube.com/embed/'.$_GET['id'].'?rel=0&amp;wmode=transparent" allowfullscreen frameborder="0" width="560" height="315"></iframe>';
		$chuoi .= '</div>';
		echo $chuoi;
	}else{
		$chuoi .= '<div class="video-container">';
		    $chuoi .= '<iframe src="http://www.youtube.com/embed/'.$_POST['id'].'?rel=0&amp;wmode=transparent" allowfullscreen frameborder="0" width="560" height="315"></iframe>';
		$chuoi .= '</div>';
		echo $chuoi;
	}
?>