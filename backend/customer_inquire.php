<?
if(empty($_POST)){
   if(!empty($_GET['customer'])){
      $customer=$_GET['customer'];
   }else{
      $customer="";
   }
?>
      <table id="pro" style="padding:20px;">
   <form action="index.php?do=admin&ad=cutinquire" method="POST">
<tr><td>客戶代號查詢：<input type="text" name="customer" value="<?=$customer?>"></td><td>
<input type="submit" value="查詢"><input type="button" value="回管理頁" onclick="back()"></td></tr>
</form>
</table>

<?
}else{
?>
<?
include_once "./api/base.php";
$customer=$_POST['customer'];
$sql="SELECT * FROM `customer` WHERE `customer` . `客戶代號`='$customer'";
$c=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
if(!$c){
   echo "</script>";
      echo "<script language='javascript'>";
      echo "alert('查無此筆產品資料，請重新輸入');location.href='index.php?do=admin&ad=cutinquire'";
      echo "</script>";
}else{
   ?>
   <div class="inquire">
   <ul class='list' style="padding-top:10px;"><p class="topinquire">查詢結果</p>
   <?
   foreach($c as $key => $val){
   ?>

         <li style='padding-top:10px;'>
            <div><?echo $key?>：<?echo $val?></div></li>
        <? }?>
         </li>
      </ul>
  
<p class="button"><a href="index.php?do=admin&ad=cutmodify&id=<?=$customer;?>"><span>修改</span></a>
<a href="index.php?do=admin&ad=cutinquire"><span>回到查詢頁</span></a></p>
</table>
</div>
<?
   }
}
?>
<script>
function back(){
   location.href=('index.php?do=admin&ad=cutman')
}
</script>