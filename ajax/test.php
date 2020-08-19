<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');
	@define ( _upload_folder , '../upload/');
	error_reporting(E_ALL);

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

?>
<?php


//PAGE NUMBER, RESULTS PER PAGE, AND OFFSET OF THE RESULTS
if($_GET["page"]){
    $pagenum = $_GET["page"];
} else {
    $pagenum = 1;
}

$rowsperpage = 6; //MAXIMUM RESULTS PER PAGE
$offset = ($pagenum - 1) * $rowsperpage; //WHERE THE RESULTS START FROM

//FOR RESULTS OF THE PAGE
$d->reset();
$sql = "select * from table_product where hienthi=1 and type='product' order by stt,id desc LIMIT $offset, $rowsperpage";
$d->query($sql);
$product = $d->result_array();


$sql ="SELECT * FROM #_product where hienthi=1";
$total_q = $d->query($sql); //FOR ALL RESULTS
$products= $d->result_array();
$total_nums = count($products); //TOTAL NUMBER OF RESULTS
$total_pages = ceil($total_nums/$rowsperpage); //NUMBER OF PAGES
//IF PAGE NUMBER IS WITHIN THE FIRST AND LAST PAGES...


if($pagenum>=1&&$pagenum<=$total_pages)
{
	$dem=0;
?>
    <?php for($i=0;$i<count($product);$i++){ ?>
      <div class="m-padding-product">
        <div class="m-li">
          <div class="m-box-img">
             <a href="san-pham/<?=$product[$i]['id']?>/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>">
                <img class="lazy" data-original="http://<?=$config_url.'/'._upload_product_l.$product[$i]['thumb']?>" src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>">
            </a>
          </div>
          <div class="m-box-desc">
            <h3>
              <a href="san-pham/<?=$product[$i]['id']?>/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>" >
                <?=$product[$i]['ten_'.$lang]?>
              </a>
            </h3>
          </div>
        </div> 
      </div>
      <?php } ?>
<?php }?>
