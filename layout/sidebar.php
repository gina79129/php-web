<?php
if(!empty($_GET['do'])){
    $do=$_GET['do'];
}else{
    $do='content';
}
switch($do){
    case "login":
    case "reg":
    case "member":
    case "content":
    
?>
    <div class="left">
    <ul class="menu">
    <li><a href="index.php?do=content&repo=prosale">產品銷售報表</a></li>
    <li><a href="index.php?do=content&repo=proquarter">產品銷售季報表</a></li>
    <li><a href="index.php?do=content&repo=empsale">業務部銷售報表</a></li>


    </div>
    </ul>
<?
break;
case "admin":
?>
    <div class="left">
    <ul class="menu">
    <li><a href='index.php?do=admin'>會員管理</a></li> 
    <li><a href='index.php?do=admin&ad=proman'>產品管理</a></li>
    <li><a href='index.php?do=admin&ad=empman'>客戶管理</a></li>
    <li><a href='index.php?do=admin&ad=cutman'>員工管理</a></li> 
  </ul>
  </div>  
    <?
    }

?>

