<?php

include('home_appliance_category.php');

$ID = $_GET['ID'];
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $result = HomeApplianceCategory::deleteCategory($ID);
    if ($result) {
        echo "Category  succesfully removed.";
    } else {
        echo "SQL result failed.";
    }
}

?>