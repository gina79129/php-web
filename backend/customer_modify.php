<style>
div .hidden{
   width:250px;
   overflow:hidden;
   text-overflow:ellipsis;
    white-space:nowrap;
}
div .hidden:hover{
   overflow: visible;
   font-size:12px;
}


</style>

<?php   
if(!empty($_GET['id'])){
   $item=find("customer","客戶代號",$_GET['id']);
}
?>
   <div style='background-color:rgba(204, 255, 212, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:5px;width:600px;margin:0 auto;padding-top:2px;margin-top:6px;'>
   <div style="width:600px;height:30px;">
   <div style="background-color:rgba(106, 255, 77, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin:10px 150px 0 100px;padding:3px;">異動前</div>
   <div style="background-color:rgba(255, 0, 0, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin-top:12px;padding:3px;">異動後</div>
   </div>
<div style="width:250px;float:left;">
<form action="./api/api_customer.php?do=cutmodify" method="POST">
<ul>
<li style='padding-top:8px;'><div class="hidden">客戶寶號：<?echo $item['客戶寶號']?></div></li>
<li style='padding-top:14px;'><div>客戶代號：<?echo $item['客戶代號']?></div></li>
<li style='padding-top:14px;'><div>縣　　市：<?echo $item['縣市']?></div></li>
<li style='padding-top:14px;'><div class="hidden">地　　址：<?echo $item['地址']?></div></li>
<li style='padding-top:14px;'><div>郵遞區號：<?echo $item['郵遞區號']?></div></li>
<li style='padding-top:14px;'><div>聯絡人　：<?echo $item['聯絡人']?></div></li>
<li style='padding-top:14px;'><div>職　　稱：<?echo $item['職稱']?></div></li>
<li style='padding-top:14px;'><div>電　　話：<?echo $item['電話']?></div></li>
<li style='padding-top:14px;'><div>行業別　：<?echo $item['行業別']?></div></li>
<li style='padding-top:14px;'><div>統一編號：<?echo $item['統一編號']?></div></li>
</ul></div>
<div style="width:298px;float:left;">
<ul>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['客戶寶號']?>" maxlength="14" name="company"></div></li>
<li style='padding-top:5px;'><div class="cha">&nbsp;&nbsp;無法異動<input type="hidden" value="<?=$item['客戶代號']?>" maxlength="5" name="customer"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['縣市']?>" maxlength="3" name="city"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['地址']?>" maxlength="18"  name="addr"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['郵遞區號']?>" maxlength="3" name="zipcod"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['聯絡人']?>" maxlength="3" name="contact"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['職稱']?>" maxlength="4" name="jobtitle"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['電話']?>" maxlength="10" name="tel"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['行業別']?>" maxlength="2" name="industry"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['統一編號']?>" maxlength="8" name="uniform"></li>
</ul></div>
<div class="cha" style="clear:both;text-align:center;">
<input type="submit" value="確定修改">
<input type="reset" value="重置">
<input type="button" value="回查詢頁" onclick="backbef()">
<input type="button" value="回管理頁" onclick="back()">
</form>
</div>


<script>
function backbef(){
   location.href=('index.php?do=admin&ad=cutinquire')
}

function back(){
   location.href=('index.php?do=admin&ad=cutman')
}
 
 </script>