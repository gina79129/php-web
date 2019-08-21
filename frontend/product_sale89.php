<div style="width:70px;background-color:#FFF0F5;text-align:center;margin:20px 0 0 20px;  box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);padding:3px; border-radius:30px;"><a href="index.php?do=content&repo=prosale">90年度</a></div>
<hr>
<?
include_once "./api/base.php";
$sql="SELECT B.`業務姓名`as '業務姓名', A.`客戶寶號` as '客戶寶號', B.`客戶代號` as '客戶代號', B. `數量` as '數量', C.`單價` as '單價',B.`數量`* C.`單價` as '總額' FROM `sales2` as B INNER JOIN (SELECT A.`客戶寶號` as '客戶寶號',A.`客戶代號` as '客戶代號' FROM `customer` as A GROUP by A .`客戶代號`)as A on B.`客戶代號` = A.`客戶代號` JOIN(SELECT C.`產品代號` as '產品代號',C.`單價` as '單價' FROM `product` as C group by C.`產品代號`) as C on B .`產品代號`= C.`產品代號` WHERE B . `交易年`=89 GROUP by B . `客戶代號` ORDER BY `總額` DESC";
$sales=$pdo->query($sql)->fetchAll();
?>
<div>
<div class="prosalein">
    
<table class="prosaletable">
    <caption>民國89年產品銷售狀況(一千萬以上交易)</caption>
        <tr class="prosaletop">
            <td>業務姓名</td>
            <td>客戶寶號</td>
            <td>數量</td>
            <td>單價</td>
            <td>總額</td>
        </tr>
    <?
    foreach($sales as $key =>$sal){
        $name=0;
        if($sales[$key]['業務姓名']==$sal['業務姓名']){
            $name=$sal['業務姓名'];
               
        $company=0;
        if($sales[$key]['客戶寶號']==$sal['客戶寶號']){
            $company=$sal['客戶寶號'];
                 
        $number=0;
        if($sales[$key]['數量']==$sal['數量']){
            $number=$sal['數量'];
           
            $case=0;
        if($sales[$key]['單價']==$sal['單價']){
            $case=$sal['單價'];
                   
        $total=0;
        if($sales[$key]['總額']==$sal['總額']){
            $total=$sal['總額'];
            if($total<10000000) continue;
                            }
                        }
                    }
                }
            }
    
    ?>
    <tr>
        <td><?=$name?></td>
        <td style="text-align:left"><?=$company?></td>
        <td><?=$number?></td>
        <td><?=$case?></td>
        <td><?=$total?></td>  
    </tr>
    
    <?
    } 
    ?>
    
    </table>
    </div>
</div>
