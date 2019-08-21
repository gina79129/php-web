<?
if(empty($_GET['ad'])){
  include_once "./backend/adminper.php";
  
}else{
$do=(!empty($_GET['ad']))?$_GET['ad']:"items";
switch($do){
    case "proinquire":
    include "./backend/product_inquire.php";
    break;
    case "proman":
    include "./backend/product_management.php";
    break;
    case "pronew":
    include "./backend/product_new.php";
    break;
    case "promodify":
    include "./backend/product_modify.php";
    break;
    case "prodel":
    include "./backend/product_delete.php";
    break;
    case "empinquire":
    include "./backend/employee_inquire.php";
    break;
    case "empnew":
    include "./backend/employee_new.php";
    break;
    case "empman":
    include "./backend/employee_management.php";
    break;
    case "empmodify":
    include "./backend/employee_modify.php";
    break;
    case "cutinquire":
    include "./backend/customer_inquire.php";
    break;      
    case "cutnew":
    include "./backend/customer_new.php";
    break;
    case "cutman":
    include "./backend/customer_management.php";
    break;
     case "cutmodify":
    include "./backend/customer_modify.php";
    break;
    case "prosale":
    include "./backend/product_sale.php";
    break;
    case "empsale":
    include "./backend/employee_sale.php";
    break;
    case "per":
    include "./backend/member_modify.php";
    break;

     }
    }
?>