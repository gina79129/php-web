<?
$dsn="mysql:host=localhost;charset=utf8;dbname=pra02";
$pdo=new PDO($dsn,"root","");
session_start();
$errMeg=[
    1=>"欄位請勿空白",
    2=>"欄位長度請在4-12之間",
    3=>"欄位全是數字，請至少一個以上的英文字",
    4=>"欄位全是英文，請至少一個以上的數字",
    5=>"欄位請勿使用英數字以外的符號"
];

function chkform($array,$str){
    global $errMeg;
    $err="";

    foreach($array as $a){
        switch($a){
            case "space":
            if(chkSpace($str)){
                $err=$err.$errMeg[1];
            }
            break;
            case "length":
            if(!chkLength($str)){
                $err=$err.$errMeg[2];
            }
            break;
            case "num":
            if(chkNum($str)){
                $err=$err.$errMeg[3];
            }
            break;
            case "eng":
            if(chkEng($str)){
                $err=$err.$errMeg[4];
            }
            break;
            case "sym":
            if(chkSym($str)){
                $err=$err.$errMeg[5];
            }
            break;
        }
    }
    return $err;
}



function find($table,$field,$id){
    global $pdo;
    $sql="select * from $table where $field ='$id'";
    $rows=$pdo->query($sql)->fetch();
    return $rows;
}
function all($table){
    global $pdo;
    $sql="select * from $table";
    $rows=$pdo->query($sql)->fetchAll();
    return $rows;
}
function update($array){
    global $pdo;
    foreach($array['set'] as $key=>$value){
        $s[]=sprintf("%s='%s'",$key,$value);
    }
    foreach($array['where'] as $key=>$value){
        $w[]=sprintf("%s='%s'",$key,$value);
    }
    $sql="update ".$array['table']." set ".implode(',',$s)." where ".implode(" && ",$w)."";
    $result=$pdo->exec($sql);
    return $result;
}
function chkSpace($str){
    if($str==""){
        return true;
    }
}
function chkLength($str){
    $min=4;
    $max=12;
    if(strlen($str) >= $min && strlen($str)<= $max){
        return true;
    }
}
function chkNum($str){
    $chkNum=0;
    for($i=0;$i<strlen($str);$i++){
        $part=substr($str,$i,1);
        if(ord($part)>=48 && ord($part)<=57){
            $chkNum++;
        }
    }
    if($chkNum==strlen($str)){
        return true;
    }
}
function chkEng($str){
    $chkEng=0;
    for($i=0;$i<strlen($str);$i++){
        $part=substr($str,$i,1);
        if((ord($part)>=65 && ord($part)<=90) || (ord($part)>=97 && ord($part)<=122)){
            $chkEng++;
    }
}
    if($chkEng==strlen($str)){
        return true;
    }
}
function chkSym($str){
    $chkSym=0;
    for($i=0;$i<strlen($str);$i++){
        $part=substr($str,$i,1);
        if(!(ord($part)>=65 && ord($part)<=90) && !(ord($part)>=97 && ord($part)<=122) && !(ord($part)>=48 && ord($part)<=57)){
          $chkSym++;  
        }
    }
    if($chkSym>0){
        return true;
    }
}
?>