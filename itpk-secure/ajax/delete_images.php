<?php
		session_start();
	@define ( '_lib' , '../../libraries/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";	
	include_once _lib."pclzip.php";

	$d = new database($config['database']);
	
	$id=$_POST['id'];
	$table=$_POST['table'];
	$d->reset();
	$sql = "select id,photo,thumb from #_$table where id='".$id."'";
	$d->query($sql);
	$row = $d->result_array();

	if(count($row)>0){
		for($i=0;$i<count($row);$i++){
			if($table=='product_photo'){
				delete_file('../'._upload_product.$row[$i]['photo']);
				delete_file('../'._upload_product.$row[$i]['thumb']);
			}
			if($table=='album'){
				delete_file('../'._upload_album.$row[$i]['photo']);
				delete_file('../'._upload_album.$row[$i]['thumb']);
			}
			if($table=='baiviet_photo'){
				delete_file('../'._upload_baiviet.$row[$i]['photo']);
				delete_file('../'._upload_baiviet.$row[$i]['thumb']);
			}
			
		}
		$sql = "delete from #_$table where id='".$id."'";
		$d->query($sql);
	}
	
?>
