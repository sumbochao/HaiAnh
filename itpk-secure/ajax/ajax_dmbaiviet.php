<?php 
	session_start();
	@define ( '_lib' , '../../libraries/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	

	if (isset($_POST["level"])) {
		 $level = $_POST["level"];
		$id=$_POST["id"];
		 $type = $_POST["type"];
		switch ($level) {
			case '0':{
				echo $sql="select * from table_baiviet_cat where id_list=".$id." and type='".$type."'  order by stt ";
				$stmt=mysql_query($sql);
				$str='
					<option value="0">Chọn danh mục cấp 2</option>			
					';
				while ($row=@mysql_fetch_array($stmt)) 
				{
					if($row["id"]==(int)@$id_select)
						$selected="selected";
					else 
						$selected="";

					$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
				}
				echo  $str;
				break;
			}
			case '1':{
				$sql="select * from table_baiviet_item where id_cat=".$id." and  type='".$type."' order by stt";
				$stmt=mysql_query($sql);
				$str='
					<option value="0">Chọn danh mục cấp 3</option>			
					';
				while ($row=@mysql_fetch_array($stmt)) 
				{
					if($row["id"]==(int)@$_REQUEST["id_cat"])
						$selected="selected";
					else 
						$selected="";
					$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
				}
				echo $str;
				break;
			}
			case '2':{
				echo $sql="select * from table_baiviet_sub where id_item=".$id." and  type='".$type."' order by stt";
				$stmt=mysql_query($sql);
				$str='
					<option value="0">Chọn danh mục cấp 4</option>			
					';
				while ($row=@mysql_fetch_array($stmt)) 
				{
					if($row["id"]==(int)@$_REQUEST["id_cat"])
						$selected="selected";
					else 
						$selected="";
					$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
				}
				echo $str;
				break;
			}
			default:
				echo 'error ajax';
				break;
		}
		
	}
?>
