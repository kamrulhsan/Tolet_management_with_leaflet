<?php 
include "../db.php";

$rentpost_id = $_POST['rentpost_id'];
$query = "DELETE from rent_post WHERE ID = '$rentpost_id'";

if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}
?>