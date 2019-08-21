<?
include_once "./api/base.php";
if(empty($_SESSION['login'])){
header("Location:index.php");
exit();
}
?>
   <script language="JavaScript">
         setTimeout("alert('登入成功')",100);
   </script>
   
   <!-- <h3 style="color:#FF66B2;margin-left:10px;">登入成功</h3><br> -->
   <?
   $sql="select name from user where acc='" . $_SESSION['user']. "'";
   $name=$pdo->query($sql)->fetchColumn();
   echo "<h3 style='text-align:center';>歡迎  " . $name . "  光臨會員中心</h3>";
   ?>
