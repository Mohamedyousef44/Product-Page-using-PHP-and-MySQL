<?php 

require_once('./vendor/autoload.php');

use db\mysql\MySQLHandler as MYSQL ;

$db = new MYSQL("items");

$allRows = $db->get_all_records();
$pagesNums = intval(ceil(count($allRows)/__RECORDS_PER_PAGE__));
$msg = "";


$db->connect();

$items = $db->get_data(['id' , 'product_code' , 'product_name' ,'photo','list_price','units_in_stock','rating']);

// get product by name in search bar

if(isset($_GET['search'])){

    $db->connect();
    $arrOfProducts = $db->search('product_name' , $_GET['search'] );

    if(count($arrOfProducts) == 0){

        $msg = 'Not found' ;

    }else{

        $items = $arrOfProducts;
        $pagesNums = intval(ceil(count($arrOfProducts)/__RECORDS_PER_PAGE__));
    }
    

}elseif(isset($_GET['next'])){

    $db->connect();
    $start = intval($_GET['next']);
    $items = $db->get_data(array() , $start );

}



if(isset($_GET["id"]) && is_numeric($_GET["id"])){

    $db->connect();
    $product = $db->get_record_by_id(intval($_GET['id']))[0];
    require_once("./views/product.php");

}else{

    require_once("./views/home.php");
}




