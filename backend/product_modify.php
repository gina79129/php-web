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
<?
if(!empty($_GET['id'])){
   $item=find("product","產品代號",$_GET['id']);
}
?>
 <div style='background-color:rgba(204, 255, 212, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:10px;width:600px;margin:0 auto;padding-top:2px;margin-top:16px;'>
   <div style="width:600px;height:30px;">
   <div style="background-color:rgba(106, 255, 77, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin:10px 150px 0 100px;padding:3px;">異動前</div>
   <div style="background-color:rgba(255, 0, 0, 0.3);text-align:center;border-radius:30px;box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);width:100px;float:left;margin-top:12px;padding:3px;">異動後</div>
   </div>
   <div style="width:260px;float:left;">
<form action="./api/api_product.php?do=promodify" method="POST">
<ul>
<li style='padding-top:8px;'><div class="hidden">產品名稱：<?echo $item['產品名稱']?></div></li>
<li style='padding-top:14px;'><div>產品代號：<?echo $item['產品代號']?></div></li>
<li style='padding-top:14px;'><div>單　　價：<?echo $item['單價']?></div></li>
<li style='padding-top:14px;'><div>成　　本：<?echo $item['成本']?></div></li>
</ul></div>
<div style="width:298px;float:left;">
<ul>
   <li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['產品名稱']?>" maxlength="30" name="goods"></div></li>
   <li style='padding-top:5px;'><div class="cha">&nbsp;&nbsp;無法異動<input type="hidden" value="<?=$item['產品代號']?>" maxlength="10" name="product"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['單價']?>" maxlength="5" name="price"></div></li>
<li style='padding-top:5px;'><div class="cha"><input type="text" value="<?=$item['成本']?>" maxlength="5" name="cost"></div></li>
</ul></div>
<div class="cha" style="clear:both;text-align:center;">
<input type="submit" value="確定修改">
<input type="reset" value="重置">
<input type="button" value="回查詢頁" onclick="backbef()">
<input type="button" value="回管理頁" onclick="back()">
</form>
</div>

   <input type="hidden" name="id" value="<?=$item['id'];?>">
 <script>
function backbef(){
   location.href=('index.php?do=admin&ad=proinquire')
}

function back(){
   location.href=('index.php?do=admin&ad=proman')
}
 
 </script>