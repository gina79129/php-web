<?
   include_once "base.php";

   if(!empty($_GET['do'])){
      $do=$_GET['do'];
  }else{
      $do='content';
  }
   switch($do){
    case "pronew":
    $sql="insert into product (`產品名稱`,`產品代號`,`單價`,`成本`) values ('".$_POST['goods']."','".$_POST['product']."','".$_POST['price']."','".$_POST['cost']."')";
 
    if($pdo->exec($sql)){
      echo "<script language='javascript'>";
      echo "alert('新增成功');location.href='../index.php?do=admin&ad=proman'";
      echo "</script>";
    }
    break;

    case "promodify":
    $sql ="Update `product`  set  `產品名稱` ='".$_POST['goods']."', `產品代號` ='".$_POST['product']."' ,  `單價` ='".$_POST['price']."',  `成本` ='".$_POST['cost']."'  WHERE `product` . `產品代號` ='".$_POST['product']."'";
    $pdo->exec($sql);
    echo "<script language='javascript'>";
      echo "alert('修改成功');location.href='../index.php?do=admin&ad=proman'";
      echo "</script>";
    break;

    case "prodel":
    $id=$_GET['id'];
    $sql="delete from `product` WHERE `product` . `產品代號` ='$id'";
      // echo $sql;
    $pdo->exec($sql);
    echo "<script language='javascript'>";
    echo "alert('刪除成功');location.href='../index.php?do=admin&ad=proman'";
    echo "</script>";
    break;
    default:
    header("location:index.php");
    exit();

}


   ?>