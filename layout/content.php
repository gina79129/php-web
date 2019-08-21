<?
if(!empty($_GET['repo'])){
    switch($_GET['repo']){
        case "prosale":
        include "./frontend/product_sale90.php";
        break;
        
        case "prosale89":
        include "./frontend/product_sale89.php";
        break;

        case "empsale":
        include "./frontend/employee_sale.php";
        break;

        case "empsale89":
        include "./frontend/employee_sale89.php";
        break;

        case "proquarter":
        include "./frontend/pro_quarter.php";
        break;

        case "proquarter89":
        include "./frontend/pro_quarter89.php";
        break;



    }
}
else{
    echo "<div id='welcome'>";

}

?>