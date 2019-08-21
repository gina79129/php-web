<?
if(empty($_POST)){
   if(!empty($_GET['product'])){
      $product=$_GET['product'];
   }else{
      $product="";
   }
?>
      <table id="pro" style="padding-top:20px;">
<form action="index.php?do=admin&ad=proinquire" method="POST">
<tr><td>產品代號查詢：<input type="text" name="product" value="<?$product?>"></td>
<input type="hidden" name="do" value="admin">
<td><input type="submit" value="查詢"></td><td><input type="button" value="回管理頁" onclick="back()"></td></tr>

</form>
</table>

<?


}else{
?>
<?
include_once "./api/base.php";
$product=$_POST['product'];
$sql="SELECT * FROM `product` where `product`.`產品代號`='$product'";
$pro=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
   if(!$pro){
      // echo "查無此筆產品資料，請重新輸入";
      // header("Refresh:3;url=product_management.php");
      echo "</script>";
      echo "<script language='javascript'>";
      echo "alert('查無此筆產品資料，請重新輸入');location.href='index.php?do=admin&ad=proinquire'";
      echo "</script>";
   }else{
      ?>
   <div class="inquire">
   <ul class='list' style="padding-top:10px;"><p class="topinquire">查詢結果</p>
   <?
   foreach($pro as $key =>$val){
   ?>
      <li style='padding-top:10px;'>
            <div><?echo $key?>：<?echo $val?></div></li>
        <? }?>
         </li>
      </ul>

      <p class="button"><a href="index.php?do=admin&ad=promodify&id=<?=$product;?>"><span>修改</span></a>
      <a href="#" onclick="javascript:location='?do=admin&ad=prodel&id=<?=$product;?>'"><span>刪除資料</span></a>
      <a href="index.php?do=admin&ad=proinquire"><span>回查詢頁</span></a></p>
   </table>
   </div>
<?
   }
}
?>
<script>
function back(){
   location.href=('index.php?do=admin&ad=proman')
}
</script>
