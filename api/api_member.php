<?
  include_once "base.php";
  if(!empty($_GET['do'])){

      $sql="select acc from user where acc='".$_POST['acc']."'";
      $chkAcc=$pdo->query($sql)->fetch();
        if($chkAcc){
          $chkAccount=true;
          echo "<script language='javascript'>";
          echo "alert('帳號重覆');location.href='../index.php?do=admin&ad=per&id=".$_POST['id']."'";
          echo "</script>";
          }else{
            $chkAccount=false;

      }

    if($chkAccount==false){

    $sql ="update `user` set `acc`='".$_POST['acc']."',`pw`='".$_POST['pw']."',`name`='".$_POST['name']."' where `user` . `id`='".$_POST['id']."'";
    $res=$pdo->exec($sql);
    if($res){
      echo "<script language='javascript'>";
      echo "alert('修改成功');location.href='../index.php?do=admin&per=".$_POST['id']."'";

      echo "</script>";
    }else{
      echo "修改異常";
    }

  }
}
   ?>