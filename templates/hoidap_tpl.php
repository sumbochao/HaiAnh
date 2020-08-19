<script language="javascript">
$(document).ready(function() {
  $('.datcauhoi').click(function() {
    $('.padding_hoidap').stop().slideToggle(400);
  });
   $('.cauhoi_item').click(function() {
     $('.cauhoi_item').find('h4').removeClass('active');
    $(this).next('.cautraloi').stop().slideToggle(400);
    $(this).find('h4').addClass('active');
  });
});

function js_submit(){

	if(isEmpty(document.getElementById('name'), "Xin nhập Họ tên.")){
		document.getElementById('name').focus();
		return false;
	}
  if(isEmpty(document.getElementById('dienthoai'), "Xin nhập Số điện thoại.")){
    document.getElementById('dienthoai').focus();
    return false;
  }
  if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ.")){
    document.getElementById('dienthoai').focus();
    return false;
  }
  if(!check_email(document.frm.email.value)){
    alert("Email không hợp lệ");
    document.frm.email.focus();
    return false;
  }
  
  
	if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>
<div class="tt-index-cont">
  <div class="tt-title">
      <h1>Hỏi đáp</h1>
  </div>
  <div class="tt-desc mt2">
    <div class="div_content">
      <div class="datcauhoi">
        Đặt câu hỏi
      </div>
      <div class="padding_hoidap">
        <div class="class_padding">
          <form method="post" id="frm" name="frm" action="tu-van.html">
            <table width="100%" cellpadding="0" cellspacing="5" border="0" class="tablelienhe">
                <tr>
                  <td width="120px"><?=_hovaten?><span>*</span></td>
                  <td><input name="name" type="text" class="input" id="name" size="50" /></td>
                </tr>
                <tr>
                  <td width="120px">Điện thoại<span>*</span></td>
                  <td><input name="dienthoai" type="text" class="input" id="dienthoai" size="50" /></td>
                </tr>
                <tr>
                  <td>Email<span>*</span></td>
                  <td><input name="email" type="text" class="input" size="50"  /></td>
                </tr>
                <tr>
                  <td><?=_noidung?><span>*</span></td>
                  <td><textarea name="noidung" cols="40" rows="10" class="noidung" id="noidung"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input class="button" type="button" value="<?=_send?>" onclick="js_submit();" />
                    <input class="button" type="button" value="<?=_reset?>" onclick="document.frm.reset();"  /></td>
                </tr>
              </table> 
          </form>
        </div>
      </div>
    </div>
    <div class="tt-title mt2">
      <h3>Danh sách câu hỏi</h3>
    </div>
    <div class="tt-desc mt2">
      <div class="listhoi">
        <ul class="ul_hoidap">
        <?php if(count($tintuc)>0){ ?>
        <?php for($i=0;$i<count($tintuc);$i++){ ?>
        <li>
          <div class="cauhoi_item">
            <img src="images/icon_question.gif" alt="Câu hỏi" width="20">
            <h4><?=$tintuc[$i]['noidung']?></h4>
          </div>
          <div class="cautraloi">
            <p class="newsa">Câu trả lời: </p>
            <div>
              <?=stripslashes($tintuc[$i]['noidung_traloi'])?>
            </div>
          </div>
        </li>
        <?php } ?>
        <?php } ?>
      </ul>
    <div class="pagination"><?=$paging?></div>
      </div>
    </div>
  </div>
</div>
