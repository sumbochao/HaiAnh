
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
	include_once "class_paging_ajax.php";
	$d = new database($config['database']);
	
	if(isset($_POST["page"]))
    {
	$moi = $_POST["id_loaiview"];
    if($_POST['id_danhmuc']==0){
    	$str_van = "select * from table_product where $moi!=0 and type='product' and hienthi=1 order by stt asc,id desc";
    }else{
    	$str_van = "select * from table_product where $moi!=0 and type='product' and hienthi=1 and id_list='".$_POST['id_danhmuc']."' order by stt asc,id desc";
    }
	$paging = new paging_ajax();
	
	$paging->class_pagination = "pagination";
	$paging->class_active = "active";
	$paging->class_inactive = "inactive";
	$paging->class_go_button = "go_button";
	$paging->class_text_total = "total";
	$paging->class_txt_goto = "txt_go_button";
    $paging->per_page = 12; 	
    $paging->page = $_POST["page"];
	$paging->text_sql = $str_van;
	$d->reset();
	$sql = $str_van;
	$d->query($sql);
	$tintuc_moi = $d->result_array();
	$count = count($tintuc_moi);
    $result_pag_data = $paging->GetResult();
	$message = '';
	$paging->data = "" . $message . "";
    }

?>

<?php
$i=0;
	while ($row = mysql_fetch_array($result_pag_data)){
?>
<div class="m-padding-product">
	<div class="m-li">
	  <div class="m-box-img">
	     <a href="san-pham/<?=$row['tenkhongdau']?>-<?=$row['id']?>.html" title="<?=$row['ten_'.$lang]?>">
	        <img class="lazy" data-original="resize/520x420/2/<?=_upload_product_l.$row['photo']?>" src="resize/520x420/2/<?=_upload_product_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>">
	    </a>
	  </div>
	  <div class="m-box-desc">
	    <h3>
	      <a href="san-pham/<?=$row['tenkhongdau']?>-<?=$row['id']?>.html" title="<?=$row['ten_'.$lang]?>" >
	        <?=$row['ten_'.$lang]?>
	      </a>
	    </h3>
	    <div class="all_s">
	    	<p class="lax">Giá bán: <span class="price"><?=($row['giaban']!=0) ? number_format($row['giaban'],0, ',', '.').' đ' : 'Liên hệ' ?></span></p>
	    </div>	
	  </div>
	</div> 
</div>
<?php $i++; } ?>
<?php if($count>12){ ?>
<?php echo $paging->Load(); ?>		
<?php } ?>
<?php /*
<link type="text/css" rel="stylesheet" href="plugins/confirm/jquery-confirm.css" />
<script type="text/javascript" src="plugins/confirm/jquery-confirm.js"></script>
<script type="text/javascript">
	function addCart(id,sl){
      $.ajax({
        url: 'ajax/add_giohang.php',
        type: 'POST',
        data: {id: id, sl:sl},
        dataType: 'JSON',
        success: function(data){
          $('#giohang').html(data.total);
          $.confirm({
              boxWidth: '500px',
              useBootstrap: false,
              columnClass: 'small',
              type: 'green',
              title: 'Thông báo đặt hàng',
              content: data.message,
              buttons: {
               buttonA: {
                    text: 'Giỏ hàng',
                    btnClass: 'btn-green',
                    action: function () {
                        window.location.href = 'gio-hang.html';
                    }
                },
                close: function(){
                }
            }
          });
        }
      })
    }
</script>
*/?>