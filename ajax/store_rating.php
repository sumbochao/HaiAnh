<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../libraries/');
	
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
	$d = new database($config['database']);
	
	

	if(isset($_POST['star'])){  
        $star = htmlentities($_POST['star']);
        $v_title = htmlentities($_POST['v_title']);
        $ip_address = htmlentities($_POST['ip_address']);
        $id_user = htmlentities($_POST['id_user']);
        $id_product = htmlentities($_POST['id_product']);
        //valid star id array
        $valid_star = array('1','2','3','4','5');
 
        //show a error message if some hacker (Noobs) try to change the star id
        if(!in_array($star, $valid_star)){
        	$code = 1;
            $mess = "<b class='r'>Fuck You. It's Your Dads Website.</b>";
        }else{
        	$rating_add = get_fetch_array("select * from #_rating where id_product='$id_product' and ip_address='$ip_address' order by id desc");
        	if(!$rating_add){
				$data['rating'] = $star;
	        	$data['tieude'] = $v_title;
	        	$data['ip_address'] = $ip_address;
	        	$data['id_user'] = $id_user;
	        	$data['id_product'] = $id_product;
	        	$data['ngaytao'] = time();
	        	$d->setTable('rating');
				if($d->insert($data)){
					$code = 0;
		        	$mess =  "<b class='g'>Thanks! You rated this product {$star} Stars.</b>";
				}else{
					$code = 2;
		        	$mess = "<b class='r'>Fuck You. It's Your Dads Website.</b>";
				}
        	}else{
        		$code = 2;
		        $mess = "<b class='r'>Fuck You. It's Your Dads Website.</b>";
        	}
        	
        }
 		
    }
		

?>
