<form id="frmLotto" data-url="" target="_blank">
<div class="form-group">
<select id="page_id" title="งวดประจำวันที่">
<?php
function lotterycurl( $url )
{
  $ch = curl_init();
  $timeout = 10;
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent: " . $_SERVER["HTTP_USER_AGENT"],"Accept-Charset: utf-8"));
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $content = curl_exec($ch);
  curl_close($ch);
  return $content;
}
$checker=lotterycurl("https://www.lottery.co.th/select-api");
echo $checker;
?>
</select>
</div><br/>
<div class="form-group">
<input type="text" name="lotto[]" maxlength="6" pattern="[0-9]{6}" class="lotto-form_input" placeholder="กรอกเลขสลาก" required oninvalid="setCustomValidity('คุณไม่ได้ระบุตัวเลขสลากที่ถูกต้อง หรือเลขสลากไม่ครบ 6 หลัก')" oninput="setCustomValidity('')">
</div><br/>
<div class="form-group">
<input type="text" name="lotto[]" maxlength="6" pattern="[0-9]{6}" class="lotto-form_input" placeholder="กรอกเลขสลาก" oninvalid="setCustomValidity('คุณไม่ได้ระบุตัวเลขสลากที่ถูกต้อง หรือเลขสลากไม่ครบ 6 หลัก')" oninput="setCustomValidity('')">
</div><br/>
<div class="form-group">
<input type="text" name="lotto[]" maxlength="6" pattern="[0-9]{6}" class="lotto-form_input" placeholder="กรอกเลขสลาก" oninvalid="setCustomValidity('คุณไม่ได้ระบุตัวเลขสลากที่ถูกต้อง หรือเลขสลากไม่ครบ 6 หลัก')" oninput="setCustomValidity('')">
</div><br/>
<div class="form-group">
<button type="submit" title="ตรวจสลากฯ ของคุณ" class="btn btn-primary">เช็คผลรางวัล</button>
</div>
</form> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <script>jQuery(document).ready(function($){
$("#frmLotto").submit(function(e){e.preventDefault();var arrVal=$(this).serializeArray();
var page=$("#frmLotto #page_id").val()+"/";var b=0;
var param='';while(arrVal[b]){var value=arrVal[b]['value'];if(value!=''){param+=value+",";}b++;}
param=param.slice(0,-1);var url="https://www.lottery.co.th"+page+"#"+param;window.open(url);});});</script> 
