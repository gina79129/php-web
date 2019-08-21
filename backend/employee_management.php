
<form action="" style="padding:20px;">

<input type="button" onclick="javascript:location='?do=admin&ad=empnew'" value="新增產品">
<input type="button" onclick="javascript:location='?do=admin&ad=empinquire'" value="單筆資料查詢">
<?
$rows=all("employee");
foreach($rows as $item){
   echo "<div style='background-color:rgba(255, 230, 242, 0.3);border-radius:30px;box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);padding-bottom:1px;'>";
   echo "<ul class='list'>";
   echo "<li style='padding-top:15px;'>
            <div>姓　　名：".$item['姓名']."</div></li>";
   echo "<li><div>現任職稱：".$item['現任職稱']."</div></li>";
   echo "<li><div>部門代號：".$item['部門代號']."</div></li>";
   echo "<li><div>縣　　市：".$item['縣市']."</div></li>";
   echo "<li><div>地　　址：".$item['地址']."</div></li>";
   echo "<li><div>電　　話：".$item['電話']."</div></li>";
   echo "<li><div>郵遞區號：".$item['郵遞區號']."</div></li>";
   echo "<li><div>目前月薪：".$item['目前月薪資']."</div></li>";
   echo "<li><div>年假天數：".$item['年假天數']."</div></li>";
   echo "<li style='padding-top:5px;'>";


?>
<input type="button" onclick="javascript:location='?do=admin&ad=empmodify&id=<?=$item['姓名'];?>&dep=<?=$item['部門代號'];?>'" value="修改資料">
<!-- <input type="button" onclick="javascript:location='?do=admin&ad=empdel&id=<?=$item['產品代號'];?>'" value="刪除資料"> -->
<?
echo "</li>";
echo "</ul>";
echo "</div>";
}
?>
</form>
