<div style="height:76vh; padding:20px;box-sizing:border-box;">
<form>
<input type="hidden" name="do" value="admin">
使用者&nbsp;&nbsp;<select name="per" id="per">
<?
include_once "./api/base.php";
$sql="select * from user";
$users=$pdo->query($sql)->fetchAll();
foreach($users as $key=>$value){

if($users[$key]['acc']==$value['acc']){
    $acc=0;
    $acc=$value['acc'];

if($users[$key]['id']==$value['id']){
    $id=0;
    $id=$value['id'];
}

echo "<option value='$id'>$acc</option>"; 
}
}

// echo "<tr><td><a href='home1.php?do=admin&per=" . $value['id']."'>".$value['acc']."-".$value['name']."</a></td></tr>";
?>

</select>
<input type="submit" value="確認">
</form>
<br>
<?
if(!empty($_GET['per'])){
    $sql="select * from user  where id='".$_GET['per']."'";
    $adminuser=$pdo->query($sql)->fetch();
?>
<div style="padding:20px;box-sizing:border-box;margin-left:11vw;">
    <table style='border:1px solid black; width:30vw;'>
        <tr style='background-color:pink;'>
            <td style='border:1px solid black;text-align:center;'>id</td>
            <td style='border:1px solid black;text-align:center;'>帳號</td>
            <td style='border:1px solid black;text-align:center;'>本名</td>
            <td style='border:1px solid black;text-align:center;'>密碼</td>
            <td style='border:1px solid black;text-align:center;'>修改</td>
            
        </tr>
        <tr>
            <td style='border:1px solid black;text-align:center;'><? echo $adminuser['id'] ?></td>
            <td style='border:1px solid black;text-align:center;'><?echo $adminuser['acc'] ?></td>
            <td style='border:1px solid black;text-align:center;'><?echo $adminuser['name'] ?></td>
            <td style='border:1px solid black;text-align:center;'><?echo $adminuser['pw'] ?></td>
            <td style='border:1px solid black;text-align:center;'><form><input type="button" value="資料修改" onclick="javascript:location='?do=admin&ad=per&id=<? echo $adminuser['id']?>'"></form></td>
        </tr>
    </table>
</div>
<?
}
?>
</div>
