<?php
if(!empty($_GET['id'])){
   $item=find("user","id",$_GET['id']);
}
?>
 <div style='background-color:rgba(204, 255, 212, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:5px;width:600px;margin:0 auto;padding-top:2px;margin-top:15px;'>
   <div style="width:600px;height:30px;">
   <div style="background-color:rgba(106, 255, 77, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin:10px 150px 0 100px;padding:3px;">異動前</div>
   <div style="background-color:rgba(255, 0, 0, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin-top:12px;padding:3px;">異動後</div>
   </div>
<div style="width:200px;float:left;margin-left:30px;">
<form action="./api/api_member.php?do=per" method="POST">

<ul>
<li style='padding-top:8px;'><div>id：<?echo $item['id']?></div></li>
<li style='padding-top:14px;'><div>acc：<?echo $item['acc']?></div></li>
<li style='padding-top:14px;'><div>pw：<?echo $item['pw']?></div></li>
<li style='padding-top:14px;'><div>name：<?echo $item['name']?></div></li>
</ul></div>
<div style="width:200px;float:left;">
<ul>
<li style='padding-top:5px;'><div class="cha">&nbsp;&nbsp;無法異動<input type="hidden" value="<?=$item['id']?>" maxlength="5" name="customer"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['acc']?>" maxlength="15" name="acc"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['pw']?>" maxlength="15" name="pw"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['name']?>" maxlength="24" name="name"></div></li>
<input type="hidden" name="id" value="<?=$item['id'];?>">
</ul></div>
<div class="cha" style="clear:both;text-align:center;">
<input type="submit" value="確定修改">
<input type="reset" value="重置">
<input type="button" value="回管理頁" onclick="backbef()">
</form>
</div>
<script>

function backbef(){
   location.href=('index.php?do=admin&per=<?echo $item['id']?>')
}

</script>
 