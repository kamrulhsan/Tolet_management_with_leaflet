<?php 
include "../db.php";

$seller_id = $_POST['seller_id'];
$query = "DELETE from registration WHERE ID = '$seller_id'";

if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}
?>