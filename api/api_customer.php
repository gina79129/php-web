<?
 include_once "base.php";
   if(!empty($_GET['do'])){
      $do=$_GET['do'];
  }else{
      $do='content';
  }
   switch($do){
   case "cutnew":
   $company=$_POST['company'];
   $customer=$_POST['customer'];
   $city=$_POST['city'];
   $addr=$_POST['addr'];
   $zipcod=$_POST['zipcod'];
   $contact=$_POST['contact'];
   $jobtitle=$_POST['jobtitle'];
   $tel=$_POST['tel'];
   $industry=$_POST['industry'];
   $uniform=$_POST['uniform'];
   $sql="insert into customer (`客戶寶號`, `客戶代號`, `縣市`, `地址`, `郵遞區號`, `聯絡人`, `職稱`, `電話`, `行業別`, `統一編號`) VALUES ('$company','$customer','$city','$addr','$zipcod','$contact','$jobtitle','$tel','$industry','$uniform')";
   if($pdo->exec($sql)){
      echo "<script language='javascript'>";
      echo "alert('新增成功');location.href='../index.php?do=admin&ad=cutman'";
      echo "</script>";
   }
   break;
   case "cutmodify":
   $company=$_POST['company'];
   $customer=$_POST['customer'];
   $city=$_POST['city'];
   $addr=$_POST['addr'];
   $zipcod=$_POST['zipcod'];
   $contact=$_POST['contact'];
   $jobtitle=$_POST['jobtitle'];
   $tel=$_POST['tel'];
   $industry=$_POST['industry'];
   $uniform=$_POST['uniform'];
   $sql ="Update `customer`  set  `客戶寶號` = '$company', `客戶代號` ='$customer', `縣市` ='$city', `地址` ='$addr', `郵遞區號` = '$zipcod', `聯絡人` = '$contact', `職稱` = '$jobtitle' , `電話` = '$tel', `行業別` = '$industry', `統一編號` = '$uniform'  WHERE `customer` . `客戶代號` ='$customer'";
   if($pdo->exec($sql)){
      echo "<script language='javascript'>";
      echo "alert('修改成功');location.href='../index.php?do=admin&ad=cutman'";
      echo "</script>";

   }
   break;

}
 
 ?>
