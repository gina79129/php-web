<?php
if(!empty($_GET['id'])){
   $item=find("product","產品代號",$_GET['id']);
}
?>
<div style="background-color:rgba(238, 204, 255, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);width:500px;margin:20px auto;padding-bottom:1px;padding-top:1px;">
   <ul>
 
      <li>產品名稱：<?=$item['產品名稱']?></li>
      <li>產品代號：<?=$item['產品代號']?></li>
      <li>單　　價：<?=$item['單價']?></li>
      <li>成　　本：<?=$item['成本']?></li>
      <form style="padding-top:5px;">
      <input type="button" onclick="o('<?echo $item['產品名稱']?>','<?echo $item['產品代號']?>','<?echo $item['單價']?>','<?echo $item['成本']?>')" value="確認刪除">
      </form>
   </ul>
</div>

<script>
function o(a,e,i,o){
   if(window.confirm('確定刪除此筆資料嗎？'+'\n產品名稱：'+a+'\n產品代號：'+e+'\n單       價：'+i+'\n成       本：'+o)){
      location.href='./api/api_product.php?do=prodel&id=<?=$item['產品代號'];?>';
   }else{
      console.log('取消刪除')
      window.alert('已取消刪除此筆資料，將自動返回管理頁面')
      location.href='index.php?do=admin&ad=proman';
   }
}
// javascript:

</script>