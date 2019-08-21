
<form action="" style="padding:20px;">

<input type="button" onclick="javascript:location='?do=admin&ad=cutnew'" value="新增產品">
<input type="button" onclick="javascript:location='?do=admin&ad=cutinquire'" value="單筆資料查詢">
<?
$rows=all("customer");
foreach($rows as $item){
   echo "<div style='background-color:rgba(255, 230, 242, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:1px;'>";
   echo "<ul class='list'>";
   echo "<li style='padding-top:15px;'>
            <div>客戶寶號：".$item['客戶寶號']."</div></li>";
   echo "<li><div>客戶代號：".$item['客戶代號']."</div></li>";
   echo "<li><div>縣　　市：".$item['縣市']."</div></li>";
   echo "<li><div>地　　址：".$item['地址']."</div></li>";
   echo "<li><div>郵遞區號：".$item['郵遞區號']."</div></li>";
   echo "<li><div>聯絡人：".$item['聯絡人']."</div></li>";
   echo "<li><div>職　　稱：".$item['職稱']."</div></li>";
   echo "<li><div>電　　話：".$item['電話']."</div></li>";
   echo "<li><div>行 業 別：".$item['行業別']."</div></li>";
   echo "<li><div>統一編號：".$item['統一編號']."</div></li>";
   echo "<li style='padding-top:5px;'>";


?>
<input type="button" onclick="javascript:location='index.php?do=admin&ad=cutmodify&id=<?=$item['客戶代號'];?>'" value="修改資料">
<!-- <input type="button" onclick="javascript:location='?do=admin&ad=empdel&id=<?=$item['客戶代號'];?>'" value="刪除資料"> -->
<?
echo "</li>";
echo "</ul>";
echo "</div>";
}
?>
</form>
