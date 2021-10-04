<?php
include "../db.php";
$building_name = $_POST['building_name'];
$bed = $_POST['bed'];
$bath = $_POST['bath'];
$floor = $_POST['floor'];
$flat_name = $_POST['flat_name'];
$size = $_POST['size'];
$price = $_POST['price'];
$id = $_POST['id'];
// echo var_dump($mobile_no);exit;
$query = "UPDATE sell_post set building_name = '{$building_name}', bed='{$bed}', bath='{$bath}',
    floor = '{$floor}', flat_name='{$flat_name}', size='{$size}', price='{$price}' WHERE ID = '{$id}' ";


if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}

?>