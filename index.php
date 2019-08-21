<?php
include_once "./api/base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta ch arset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="./css/css.css">
   <title>首頁</title>
</head>
<body>
<div class="all">
<?php
include_once "./layout/nav.php";
?>
<div class="content">
<?php
include_once "./layout/sidebar.php";
?>
   <div class="main">
      <?if(!empty($_GET['do'])){
         $do=$_GET['do'];
         
      }else{
         $do="content";
      }
      ?>
   <!-- <iframe src="" frameborder="0" name="imain" height="550px" width="100%"></iframe> -->
      <?php
         switch($do){
            case "login":
               include "./frontend/userlogin.php";
            break;
            case "reg":
               include "./frontend/userreg.php";
            break;
            case "member":
               include "./frontend/usermember.php";
            break;
            case "admin":
               include "./backend/useradmin.php";
            break;
            case "content":
            include "./layout/content.php";

            
            
            default:

            break;
         }
     

      echo "</div>";
      ?>

   </div>

<?php
   include_once "./layout/footer.php";
?>
</div>
</div>

</body>
</html>