<?php 

include "db.php";

$query = "SELECT * from sell_post";
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
$length_of_sellpost = count($fetch);


$query1 = "SELECT * from rent_post";
$result1 = mysqli_query($conn,$query1);
$fetch1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
$length_of_rentpost = count($fetch1);

$query = "SELECT * from agent";
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
$length_of_agents = count($fetch);
?>