<?php
include "../db.php";
$first_name = $_POST['agent_first_name'];
$last_name = $_POST['agent_last_name'];
$mobile_no = $_POST['agent_mobile_num'];
$id = $_POST['agent_id'];
// echo var_dump($mobile_no);exit;
$query = "UPDATE agent set first_name = '{$first_name}', last_name='{$last_name}', mobile_no='{$mobile_no}' WHERE ID = '{$id}' ";


if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}

?>