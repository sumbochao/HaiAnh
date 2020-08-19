<div class="title bx-border brt-none pd-10 pb-5 bg-white w-100">
    <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<div class="content w-100 clearfix">
   
   <ul class="box-menu-list f-left">
    <?php for($k=0;$k<count($danhmuc_cat);$k++){
       $item_sanpham = get_result_array("select id,ten_$lang,tenkhongdau from #_product_item where hienthi=1 and type='product' and id_cat='".$danhmuc_cat[$k]['id']."' order by stt asc,id desc");
    ?>
     <li class="pl-10 pr-10 bx-border mb-20 f-left w-25">
        <h4 class="pt-5 pb-5 mb-5">
          <a href="<?=$danhmuc_cat[$k]['tenkhongdau']?>" title="<?=$danhmuc_cat[$k]['ten_'.$lang]?>">
            <?=$danhmuc_cat[$k]['ten_'.$lang]?>
          </a>
        </h4>
        <?php for($n=0;$n<count($item_sanpham);$n++){ ?>
        <p>
            <a href="<?=$item_sanpham[$n]['tenkhongdau']?>" title="<?=$item_sanpham[$n]['ten_'.$lang]?>">
                <?=$item_sanpham[$n]['ten_'.$lang]?>
            </a>
        </p>
        <?php } ?>
     </li>
    <?php } ?>

   </ul>
   
</div>
