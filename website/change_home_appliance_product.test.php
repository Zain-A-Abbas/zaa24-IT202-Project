<?php
# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
include('home_appliance_product.php');

$ID = $_GET['ID'];
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $code = $_GET['CODE'];
    $name = $_GET['NAME'];
    $desc = $_GET['DESC'];
    $color = $_GET['COLOR'];
    $catid = $_GET['CATID'];
    $whole = $_GET['WHOLEPRICE'];
    $list = $_GET['LISTPRICE'];
    $result = HomeApplianceProduct::updateProduct($code, $name, $desc, $color, $catid, $whole, $list, $ID);
    if ($result) {
        echo "Product $name succesfully updated.";
    } else {
        echo "SQL result failed.";
    }
}

?>