<?
if(empty($_POST)){
   if(!empty($_GET['employee'])){
      $employee=$_GET['employee'];
   }else{
      $employee="";
   }
   if(empty($_POST)){
      if(!empty($_GET['department'])){
         $department=$_GET['department'];
      }else{
         $department="";
      }
   }
?>

      <table id="pro" style="padding:20px;">
   <form action="index.php?do=admin&ad=empinquire" method="POST">
<tr><td>部門名稱：<select name="department" id="">
   <?php
  include_once "base.php";
   $sql="SELECT * FROM `dept`";
   $dep=$pdo->query($sql)->fetchAll();

   foreach($dep as $key =>$value){
      $dep1=0;
   if($dep[$key]['部門名稱']==$value['部門名稱']){
      $dep1=$value['部門名稱'];
      $dep2=0;
   if($dep[$key]['部門代號']==$value['部門代號']){
      $dep2=$value['部門代號'];
      
 
   echo "<option value='$dep2'>$dep1</option>";
}
   }
   }
   ?>
</select></td>

<td>員工姓名查詢：<input type="text" name="employee" value="<?=$employee?>"></td>
<td><input type="submit" value="查詢"></td>
<td><input type="button" value="回管理頁" onclick="back()"></td>
</tr>
</form>
</table>
<?
}else{
?>
<?
include_once "./api/base.php";
$employee=$_POST['employee'];
$department=$_POST['department'];
$sql="SELECT * FROM `employee` WHERE `employee` . `姓名` = '$employee' and `employee` . `部門代號`='$department'";
$c=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
if(!$c)
{
   echo "</script>";
   echo "<script language='javascript'>";
   echo "alert('查無此筆產品資料，請重新輸入');location.href='index.php?do=admin&ad=empinquire'";
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

   <p class="button"><a href="index.php?do=admin&ad=empmodify&id=<?=$employee;?>&department=<?=$department?>"><span>修改</span></a>
   <a href="index.php?do=admin&ad=empinquire"><span>回到查詢頁</span></a></p>
</table>
</div>
<?
   }
}
?>
<script>
function back(){
   location.href=('index.php?do=admin&ad=empman')
}
</script>