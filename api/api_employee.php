<?php
   include_once "base.php";
   if(!empty($_GET['do'])){
      $do=$_GET['do'];
  }else{
      $do='content';
  }
  switch($do){
   case "empnew":
   $employee=$_POST['employee'];
   $work=$_POST['work'];
   $department=$_POST['department'];
   $city=$_POST['city'];
   $addr=$_POST['addr'];
   $tel=$_POST['tel'];
   $zipcod=$_POST['zipcod'];
   $monthmoney=$_POST['monthmoney'];
   $hoilday=$_POST['hoilday'];
   $sql="insert into employee (`姓名`, `現任職稱`, `部門代號`, `縣市`, `地址`, `電話`, `郵遞區號`, `目前月薪資`, `年假天數`) VALUES ('$employee','$work','$department','$city','$addr','$tel','$zipcod','$monthmoney','$hoilday')";
   if($pdo->exec($sql)){
      echo "<script language='javascript'>";
      echo "alert('新增成功');location.href='../index.php?do=admin&ad=empman'";
      echo "</script>";
   }
   break;
   case "empmodify":
   $employee=$_POST['employee'];
   $department=$_POST['department'];
   $work=$_POST['work'];
   $city=$_POST['city'];
   $addr=$_POST['addr'];
   $tel=$_POST['tel'];
   $zipcod=$_POST['zipcod'];
   $monthmoney=$_POST['monthmoney'];
   $hoilday=$_POST['hoilday'];
   $sql ="Update `employee`  set  `姓名` ='$employee'  , `現任職稱` ='$work' ,  `部門代號` ='$department' ,  `縣市` ='$city' , `地址` ='$addr' ,  `電話` ='$tel' ,   `郵遞區號` ='$zipcod' ,  `目前月薪資` ='$monthmoney' ,`年假天數` ='$hoilday'  WHERE `employee` . `姓名` ='$employee'";
   if($pdo->exec($sql)){
      echo "<script language='javascript'>";
      echo "alert('修改成功');location.href='../index.php?do=admin&ad=empman'";
      echo "</script>";
   }
   break;
}
 
 ?>

</body>
</html>