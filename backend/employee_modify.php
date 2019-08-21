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
   $item=find("employee","姓名",$_GET['id']);
} 
?>
   <div style='background-color:rgba(204, 255, 212, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:10px;width:650px;margin:0 auto;padding-top:2px;margin-top:20px;'>
   <div style="width:600px;height:30px;">
   <div style="background-color:rgba(106, 255, 77, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin:10px 150px 0 100px;padding:3px;">異動前</div>
   <div style="background-color:rgba(255, 0, 0, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin-top:12px;padding:3px;">異動後</div>
   </div>
   <div style="width:270px;float:left;">
<form action="./api/api_employee.php?do=empmodify" method="POST">
<ul>
<li style='padding-top:8px;'><div>姓　　名：<?echo $item['姓名']?></div></li>
<li style='padding-top:14px;'><div>現任職稱：<?echo $item['現任職稱']?></div></li>
<li style='padding-top:14px;'><div>部門代號：<?echo $item['部門代號']?></div></li>
<li style='padding-top:14px;'><div>縣　　市：<?echo $item['縣市']?></div></li>
<li style='padding-top:14px;'><div class="hidden">地　　址：<?echo $item['地址']?></div></li>
<li style='padding-top:14px;'><div>電　　話：<?echo $item['電話']?></div></li>
<li style='padding-top:14px;'><div>郵遞區號：<?echo $item['郵遞區號']?></div></li>
<li style='padding-top:14px;'><div>目前月薪：<?echo $item['目前月薪資']?></div></li>
<li style='padding-top:14px;'><div>年假天數：<?echo $item['年假天數']?></div></li>
</ul></div>
<div style="width:298px;float:left;">
<ul>
<li style='padding-top:5px;'><div class="cha">&nbsp;&nbsp;無法異動<input type="hidden" value="<?=$item['姓名']?>" maxlength="3" size="22" name="employee"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['現任職稱']?>" maxlength="5" size="22" name="work"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['部門代號']?>" maxlength="3" size="22" name="department"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['縣市']?>" maxlength="3" size="22" name="city"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['地址']?>" maxlength="18" size="22" name="addr"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['電話']?>" maxlength="16" size="22" name="tel"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['郵遞區號']?>" maxlength="3" size="22" name="zipcod"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['目前月薪資']?>" maxlength="6" size="22" name="monthmoney"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['年假天數']?>" maxlength="2" size="22" name="hoilday"></li>
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
   location.href=('index.php?do=admin&ad=empinquire')
}

function back(){
   location.href=('index.php?do=admin&ad=empman')
}
 
 </script>
