<?
include_once "./api/base.php";
if(!empty($_POST)){
   $acc=$_POST['acc'];
   $pw=$_POST['pw'];
   if($acc=="" || $pw==""){
      ?>
      <script language="JavaScript">
         setTimeout("alert('請輸入帳號或密碼，不可空白')",100);
      </script>
      <?
   }else{
   $sql= "SELECT COUNT(*) FROM `user` WHERE `acc`='".$_POST['acc'] . "' && `pw` = '". $_POST['pw'] . "'";
   $user=$pdo->query($sql)->fetchColumn();
   if($user){
      $_SESSION['login']=true;
      $_SESSION['user']=$_POST['acc'];
     
      if($acc=='admin'){ 
      header("location:index.php?do=admin");
      }
      header("location:index.php?do=member");
   }else{
      ?>
      <script language="JavaScript">
         setTimeout("alert('帳號或密碼錯誤，請重新登入')",100);
      </script>
      <?
      }
   }
}

?>
<?
if(empty($_SESSION['login'])){

?>
<form action="index.php?do=login" method="POST">
   <table id="pro">
      <tr>
         <td>帳號</td>
         <td><input type="text" name="acc"></td><br>
      </tr>
      <tr>
         <td>密碼</td>
         <td><input type="password" name="pw"></td>
      </tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr>
         <td><input type="submit" value="確認"></td>
         <td><input type="reset" value="清除"></td>
      </tr>
   </table>
</form>
<?
}
?>
