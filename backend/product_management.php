
<form action="" style="padding:20px;">

<input type="button" onclick="javascript:location='?do=admin&ad=pronew'" value="新增產品">
<input type="button" onclick="javascript:location='?do=admin&ad=proinquire'" value="單筆資料查詢">
<?

// include_once "base.php";
$rows=all("product");
foreach($rows as $item){
   echo "<div style='background-color:rgba(255, 230, 242, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:1px;'>";
   echo "<ul class='list' >";
   echo "<li style='padding-top:15px;'><div>產品名稱：".$item['產品名稱']."</div></li>";
   echo "<li><div>產品代號：".$item['產品代號']."</div></li>";
   echo "<li><div>單　　價：".$item['單價']."</div></li>";
   echo "<li><div>成　　本：".$item['成本']."</div></li>";

   echo "<li style='padding-top:5px;'>";


?>
<input type="button" onclick="javascript:location='?do=admin&ad=promodify&id=<?=$item['產品代號'];?>'" value="修改資料">
<input type="button" onclick="javascript:location='?do=admin&ad=prodel&id=<?=$item['產品代號'];?>'" value="刪除資料">
<?
echo "</li>";
echo "</ul>";
echo "</div>";
}
?>
</form>
