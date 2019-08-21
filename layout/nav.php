
<div class="nav">
<?
if(!empty($_SESSION['login'])){
    echo "<div class='login'><a href='userout.php'>登出</a></div>";
}else{
    echo "<div class='login'><a href='index.php?do=login'>登入</a></div>";
}
?>
   <!-- <a href="home.php?do=login"><div class="login"  >登入</div></a> -->
   <a href="index.php?do=reg"><div class="signin">註冊會員</div></a>
   <a href="index.php"><div class="login">首頁</div></a>
<?php
if(!empty($_SESSION['login']) && $_SESSION['user']=='admin'){
    echo "<div id='admin'><a href='index.php?do=admin'>管理者畫面</a></div>";

}
?>
</div>
