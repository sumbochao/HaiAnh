<div class="title bx-border pd-0 mg-0 w-100">
  <h1 class="t-uppercase ds-inline-block p-relative"><?=$title?></h1>
</div>
<section id="mail" class="mail-top w-100 clearfix">
    <div class="container t-center">
        <div class="box-mail">
            <form class="w-100 o-hidden" name="frm_search_certificate" id="frm_search_certificate" method="post" action="tra-kiem-dinh">
                <input type="text" class="text-mail" name="txt_search_certificate" id="txt_search_certificate" placeholder="Nhập mã sản phẩm" value="<?php echo (isset($txt_search_certificate) ? $txt_search_certificate : '')?>"/>
                <div id="btn_search_certificate" class="btn-mail" onclick="submitSearchCertificate()">
                    Tìm
                </div>
                <input type="hidden" name="com" value="all">
            </form>
        </div>
        <?php if (isset($result_search_certificate)) { ?>
            <?php if (!empty($result_search_certificate)) { ?>
                <img src="<?=_upload_baiviet.$result_search_certificate[0]['giamdinh']?>" alt="" class="mw-100"/>
            <?php } else { ?>
                <div class="title w-100">
                    <h1 class="t-uppercase ds-inline-block p-relative">Tìm thấy 0 kết quả</h1>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>

