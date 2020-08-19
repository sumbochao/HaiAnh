<div class="tt-desc">
  <div class="container">
    <div class="tt-title">
        <h3><?=_dichvuchuyennha?></h3>
    </div>
    <div class="tt-desc mt2">
        <?php if(count($dichvu_moi)>0){ ?>
        <div class="tintuc-desc">
            <?php for($i=0;$i<count($dichvu_moi);$i++){ ?>
             <div class="tintuc-item">
                <div class="img_tin">
                  <a href="dich-vu/<?=$dichvu_moi[$i]['tenkhongdau']?>-<?=$dichvu_moi[$i]['id']?>.html" title="<?=$dichvu_moi[$i]['ten_'.$lang]?>">
                    <img src="resize/290x185/1/<?=_upload_baiviet_l.$dichvu_moi[$i]['photo']?>" alt="<?=$dichvu_moi[$i]['ten_'.$lang]?>">
                  </a>
                </div>
                <div class="desc_tin">
                  <div class="left_tin">
                    <h3><a href="dich-vu/<?=$dichvu_moi[$i]['tenkhongdau']?>-<?=$dichvu_moi[$i]['id']?>.html" title="<?=$dichvu_moi[$i]['ten_'.$lang]?>"><?=$dichvu_moi[$i]['ten_'.$lang]?></a></h3>
                  </div>
                  <div class="mt_tin">
                    <p><?=_substr(strip_tags($dichvu_moi[$i]['mota_'.$lang]),150)?></p>
                    <p><a href="dich-vu/<?=$dichvu_moi[$i]['tenkhongdau']?>-<?=$dichvu_moi[$i]['id']?>.html" title="<?=_readmore?>"><?=_readmore?></a></p>
                  </div>
                </div>
              </div>
            <?php } ?>
        </div>
        <?php }else{ ?>
        <div class="tintuc-desc">
            <div style="text-align: center; color: #333333; width: 100%;" >
                <div style="padding: 10px">
                    <?=_tb?>
                </div>
            </div>
         </div>
        <?php } ?>
       
    </div>
</div>
</div>

