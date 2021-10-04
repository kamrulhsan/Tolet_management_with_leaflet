<?php
include "../db.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$id = $_POST['seller_id'];
// echo var_dump($mobile_no);exit;
$query = "UPDATE registration set first_name = '{$first_name}', last_name='{$last_name}', email='{$email}',
    mobile_no = '{$mobile_no}' WHERE ID = '{$id}' ";

// var_dump($query);exit;
if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}

?>