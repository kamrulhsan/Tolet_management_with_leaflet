<?php
include "../db.php";
$seller_id = $_POST['seller_id'];
$query = "SELECT * from registration where ID = '$seller_id'";
// var_dump($query);exit;
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
$output = "";
if ($result) {
    foreach ($fetch as $data) :

    $output .= "
    <h2 style='text-align:center;'>Seller Details</h2>
    <br><hr><br>
   
   <p>First Name: {$data['first_name']}</p>
   <p>last Name: {$data['last_name']}</p>
   <p>Email: {$data['email']}</p>
   <p>Mobile Number: {$data['mobile_no']}</p>";
    endforeach;
    echo $output;
}
    ?>


