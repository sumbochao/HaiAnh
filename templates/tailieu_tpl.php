<div class="title bx-border pd-0 mg-0 bg-white w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<?php if($_GET['com']!='tai-lieu'){ ?>
<div class="content mb-20 mt-20 clearfix">
   <?php if(count($tintuc)>0){ ?>
   <div class="tintuc-desc f-left">
      <?php for($i=0;$i<count($tintuc);$i++){ ?>
      <div class="tintuc-item bx-border pl-15 pr-15 mb-20 f-left">
        <div class="img w-100 f-left">
          <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten_'.$lang]?>">
            <img src="resize/600x400/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>">
          </a>
        </div>
        <div class="desc w-100 t-left f-left">
          <h3>
            <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten_'.$lang]?>"><?=$tintuc[$i]['ten_'.$lang]?></a>
          </h3>
          <p>
            <?=catchuoi($tintuc[$i]['mota_'.$lang],150)?>
          </p>
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
<?php }else{ ?>
<div class="content mb-20 mt-20 clearfix">
   <?php if(count($tintuc)>0){ ?>
   <div class="tintuc-desc f-left">
      <div class="box-tailieu">
        <table class="banggia" width="100%" border="1">
          <tbody>
            <tr>
              <th width="30px" style="text-align:center;">Stt</th>
              <th style="text-align:left;">Tiêu đề tài liệu</th>
              <th width="120px" style="text-align:center;">Dowload</th>
            </tr>
            <?php for($i=0;$i<count($tintuc);$i++){ ?>
            <tr>
              <td style="text-align:center;">1</td>
              <td><a href="<?=_upload_tailieu_l.$tintuc[$i]['tailieu']?>"> <?=$tintuc[$i]['ten_'.$lang]?></a></td>
              <td style="text-align:center;"><a href="<?=_upload_tailieu_l.$tintuc[$i]['tailieu']?>"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
            </tr>
            <?php } ?>
            
          </tbody>
        </table>
      </div>
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
<?php } ?>