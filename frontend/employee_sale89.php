<div style="width:70px;background-color:#FFF0F5;text-align:center;margin:20px 0 0 20px;  box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);padding:3px; border-radius:30px;"><a href="index.php?do=content&repo=empsale">90年度</a></div>
<hr>
<?php
include_once "./api/base.php";
$sqlDept="SELECT 部門名稱 , 部門代號 FROM dept WHERE  部門代號  like 'D%'";
$resultDept=$pdo->query($sqlDept)->fetchAll();

?>

<div>
<div class="empsalein">
    
<table class="empsaletable">
   
   <tr><td  style="border:unset;"><?echo date("Y-m-d");?></td><td  style="border:unset;" colspan="3"><h2>民國89年產品銷售狀況</h2></td><td  style="border:unset;">葉珏汝</td></tr>
   
   <tr class="empsaletop">
      <td>部門名稱</td>
      <td>業務姓名</td>
      <td>客戶寶號</td>
      <td>聯絡人</td>
      <td>總額</td>
   </tr>
<?
$SaleAllTotal=0;
foreach($resultDept as $key =>$sal){

   $deptname="";

   if($resultDept[$key]['部門名稱']==$sal['部門名稱']){
      $deptname=$sal['部門名稱'];
   }
   $deptid="";
   if($resultDept[$key]['部門代號']==$sal['部門代號']){
      $deptid=$sal['部門代號'];
   }
?>
   <tr>
      <td><?=$deptname?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
   </tr>
<?php
   $deptsaletotal=0;
   
$sqlEmployee="SELECT `姓名` FROM `employee` where `部門代號` = '$deptid' and `姓名` in (select sales2.業務姓名 from sales2 )  ORDER BY CONVERT(`employee`.`姓名`  using big5)ASC";
   $resultEmployee=$pdo->query($sqlEmployee)->fetchAll();
   foreach($resultEmployee as $key =>$sal){

      $Employeename="";
   
      if($resultEmployee[$key]['姓名']==$sal['姓名']){
         $Employeename=$sal['姓名'];
      }

$sqltotal="SELECT `業務姓名`, `customer`.`客戶寶號`,`customer` . `聯絡人`, sum( (`數量`)*(`單價`)) as '總額' FROM `sales2` JOIN `customer` on `sales2`.`客戶代號` = `customer`. `客戶代號` JOIN `product` on `sales2`. `產品代號` = `product`. `產品代號` where `交易年` = '89' and `業務姓名` ='$Employeename' group by `業務姓名` , `客戶寶號` order by `總額` desc";
$resulttotal=$pdo->query($sqltotal)->fetchAll();
$saletotal=0;
foreach($resulttotal as $key =>$sal){

   $custcomp="";

   if($resulttotal[$key]['客戶寶號']==$sal['客戶寶號']){
      $custcomp=$sal['客戶寶號'];
   }
   $custcontact="";
   if($resulttotal[$key]['聯絡人']==$sal['聯絡人']){
      $custcontact=$sal['聯絡人'];
   }
   $custtotal=0;
   if($resulttotal[$key]['總額']==$sal['總額']){
      $custtotal=$sal['總額'];
   }
   $saletotal+=$custtotal;
?>
<tr>
   <td>

   </td>
   <td>
<?php
if ($saletotal==$custtotal)
{
   echo $Employeename;
}
?></td>
   <td><?=$custcomp;?></td>
   <td><?=$custcontact;?></td>
   <td style="text-align:right;"><?=number_format($custtotal);?></td>
</tr>
<?
    }
    ?>
    <tr> 
       <td colspan=4></td>
   <td  class="personTotal" ><?= number_format($saletotal );?></td>
</tr>
<tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td style="padding:7px;"></td>
</tr>
<?
   $deptsaletotal+=$saletotal;
   }
   ?>
   <tr>
   <td class="deptTotal">部門加總</td>
   <td colspan=4 class="deptTotal" style="text-align:right;"><?=number_format($deptsaletotal);?></td>
</tr> 
<?
$SaleAllTotal+=$deptsaletotal;
}


?>

<tr>
   <td colspan=5 style="padding:20px;"> </td> 
</tr>
<tr>
   <td>銷售總額</td>
   <td colspan=4 style="text-align:right;"><?=number_format($SaleAllTotal);?></td>
</tr>
</table>
</div>
</div>
