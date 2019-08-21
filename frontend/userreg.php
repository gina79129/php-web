<?
include_once "./api/base.php";

if(!empty($_POST)){
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $name=$_POST['name'];
    $accErr=chkform(['space','length','sym'],$acc);
    $pwErr=chkform(['space','length','num','eng','sym'],$pw);
    $nameErr=chkform(['space','sym'],$name);
    $sql="select acc from user where acc='$acc'";
    $chkAcc=$pdo->query($sql)->fetch();
    if($chkAcc){
        $chkAccount=true;
        ?>
        <script language="JavaScript">
           setTimeout("alert('帳號重覆')",100);
        </script>
        <?
    }else{
        $chkAccount=false;
    }
    if($accErr=="" && $pwErr=="" && $nameErr=="" &&$chkAccount==false){
        $sql="insert into user (`acc`,`pw`,`name`)values('$acc','$pw','$name')";
        $res=$pdo->query($sql);
        if($res){
            ?>
            <script language="JavaScript">
               setTimeout("alert('新增成功')",100);
            </script>
            <?
        }else{
            ?>
            <script language="JavaScript">
               setTimeout("alert('新增異常')",100);
            </script>
            <?
        }
    }
}

?>
<style>
    .errmeg{
        color:red;
        font-size:12px;
        text-align:left;
    }
    .regfirst{
        width: 100%;
        height:550px;
   /* border:1px solid darkolivegreen; */
        /* margin:0 auto; */
    }
    td{
        /* border:1px solid black; */
        width:50px;
    }
    </style>
    <div class="regfirst">
    <form action="index.php?do=reg" method="POST" style="padding:20px;">
    <table id="pro">
        <tr>
            <td style="text-align:center">帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
            
    
        </tr>
        <tr>
            <td></td>
            <td class="errmeg">
            <?if(!empty($accErr)){
                    echo "&nbsp;&nbsp;&nbsp;".$accErr;
                }
                ?>
                </td>
        </tr>
        <tr>
            <td style="text-align:center">密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td></td>
            <td class="errmeg">
            <?if(!empty($pwErr)){
                    echo "&nbsp;&nbsp;&nbsp;".$pwErr;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td style="text-align:center">本名</td>
            <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td></td>
            <td class="errmeg">
            <?if(!empty($nameErr)){
                    echo "&nbsp;&nbsp;&nbsp;".$nameErr;
                }
                ?>
            </td>
        
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><input type="submit" value="新增">&nbsp;<input type="reset" value="重置"></td>
            
        </tr>
    </table>
</form>
</div>