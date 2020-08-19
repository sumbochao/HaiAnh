<div class="content mb-20 clearfix">
   <div class="dichvu-left f-left">
     <ul class="menu-left">
      <?php for($i=0;$i<count($danhmuc_dv);$i++){ ?>
       <li class="<?=($_GET['idl']==$danhmuc_dv[$i]['tenkhongdau']) ? 'active':''?>"><a href="dich-vu/<?=$danhmuc_dv[$i]['tenkhongdau']?>" title="<?=$danhmuc_dv[$i]['ten_'.$lang]?>"><?=$danhmuc_dv[$i]['ten_'.$lang]?></a></li>
      <?php } ?>
     </ul>
   </div>
   <div class="dichvu-right f-right">
    <div class="title bx-border brt-none pd-10 pb-5 w-100 an_title t-center clearfix">
      <h1 class="t-uppercase ds-inline-block p-relative mt-0 mb-0"><?=$title?></h1>
    </div>
     <?php if(count($tintuc)>0){ ?>
     <div class="tintuc-desc f-left">
        <?php for($i=0;$i<count($tintuc);$i++){ ?>
        <div class="tintuc-item bx-border pl-15 pr-15 mb-20 f-left">
          <div class="img w-100 f-left">
            <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten_'.$lang]?>">
              <img src="resize/800x600/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
            </a>
          </div>
          <div class="desc w-100 t-center f-left">
            <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten_'.$lang]?>"><?=$tintuc[$i]['ten_'.$lang]?></a>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="tintuc-desc f-left">
        <div class="w-100 bx-border pl-15 pr-15">
          <div class="pagination t-center"><?=$paging?></div>
        </div>
      </div>
      
     <?php }else{ ?>
      <div class="tintuc-desc f-left">
          <div class="w-100 bx-border pl-15 pr-15">
              <?=_tb?>
          </div>
      </div>  
     <?php } ?>
   </div>
</div>