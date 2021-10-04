<?php 
include "../db.php";

$sellpost_id = $_POST['sellpost_id'];
$query = "DELETE from sell_post WHERE ID = '$sellpost_id'";

if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}
?>