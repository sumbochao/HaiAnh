
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
    $vhinh = (string)$_POST['vhinh'];
    $vminPriceNumber = (string)$_POST['vminPriceNumber'];
    $vmaxPriceNumber = (string)$_POST['vmaxPriceNumber'];
    $vminWidthNumber = (string)$_POST['vminWidthNumber'];
    $vmaxWidthNumber = $_POST['vmaxWidthNumber'];
    $vinputColorSlider = (string)$_POST['vinputColorSlider'];
    $vinputClaritySlider = (string)$_POST['vinputClaritySlider'];

    $w = '';
    if($vhinh!=''){
      $vhinh = str_replace(',',"','",$vhinh);
      $w .= " and id_image in ('$vhinh')";
    }
    if($vinputClaritySlider!=''){
      $vinputClaritySlider = str_replace(',',"','",$vinputClaritySlider);
      $w .= " and id_clarity in ('$vinputClaritySlider')";
    }
    if($vinputColorSlider!=''){
      $vinputColorSlider = str_replace(',',"','",$vinputColorSlider);
      $w .= " and id_color in ('$vinputColorSlider')";
    }

    if($vminPriceNumber!='' && $vmaxPriceNumber!=''){
      $pricemin = explode('.',str_replace(',','',$vminPriceNumber));
      $pricemax = explode('.',str_replace(',','',$vmaxPriceNumber));
      $w .= ' and giaban>='.(int)$pricemin[0].' and giaban<='.(int)$pricemax[0];
    }

    if($vminWidthNumber!='' && $vmaxWidthNumber!=''){
      $w .= ' and dinhluong>='.(float)$vminWidthNumber.' and dinhluong<='.(float)$vmaxWidthNumber;
    }
    
    $str_van = "select * from table_baiviet where type='san-pham' and hienthi=1 $w order by stt asc,id desc";

    $paging = new paging_ajax();

    $paging->class_pagination = "pagination";
    $paging->class_active = "active";
    $paging->class_inactive = "inactive";
    $paging->class_go_button = "go_button";
    $paging->class_text_total = "total";
    $paging->class_txt_goto = "txt_go_button";
    $paging->per_page = 6;  
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
<table id="solitaire-search-result">
  <thead>
    <tr>
        <th>Hình ảnh</th>
        <th>Hình Dạng</th>
        <th>MM (Ly)</th>
        <th>Màu</th>
        <th>Độ Tinh Khiết</th>
        <th>Giá</th>
        <th width="15%"></th>
    </tr>
  </thead>
  <tbody>
    <?php if($count==0){ ?>
    <tr>
      <td colspan="7">Không tìm thấy loại nào có cấu hình như tìm kiếm</td>
    </tr>
    <?php }else{ ?>
    <?php $i=0;  while ($row = mysql_fetch_array($result_pag_data)){ ?>
      <tr class="odd">
        <td>
          <img class="img-radius" src="resize/80x80/2/<?=_upload_baiviet_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>">
        </td>
        <td><?=$config['hinhdang'][$row['id_image']]?></td>
        <td><?=$row['dinhluong']?></td>
        <td><?=$row['id_color']?></td>
        <td><?=$row['id_clarity']?></td>
        <td><?=number_format($row['giaban'],0, ',', '.').' vnđ'?></td>
        <td><a class="view-more-button" href="#">Liên hệ</a></td>
      </tr>
      <?php $i++; } ?>
      <?php if($count>8){ ?>
      <tr>
        <td colspan="7">
          <?php echo $paging->Load(); ?>    
        </td>
      </tr> 
      <?php } ?>
    <?php } ?>
  </tbody>
</table>





