<?php 
include "../db.php";

$id = $_POST['agent_id'];
$query = "DELETE from agent WHERE ID = '$id'";

if (mysqli_query($conn,$query)) {
    echo 1;
}
else{
    echo 0;
}
?>