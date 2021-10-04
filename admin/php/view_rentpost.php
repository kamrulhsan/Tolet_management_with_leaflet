<?php
include "../db.php";
$rentpost_id = $_POST['rentpost_id'];
$query = "SELECT * from rent_post where ID = '$rentpost_id'";
// var_dump($query);exit;
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
$output = "";
if ($result) {
    foreach ($fetch as $data) :

    $output .= "
    <h2 style='text-align:center;'>Rent Post Details</h2>
    <br><hr><br>
    <div class='sellpost_image'>
    <img src='../images/{$data['image_name']}' alt='not found' style='width:100%;'>
    <img src='../images/{$data['image_name1']}' alt='not found' style='width:100%;'>
    <img src='../images/{$data['image_name2']}' alt='not found' style='width:100%;'>
    <img src='../images/{$data['image_name3']}' onerror='this.style.display='none'' style='width:100%;'>
    </div>
   <p>Building Name: {$data['building_name']}</p>
   <p>Bed: {$data['bed']}</p>
   <p>Bath: {$data['bath']}</p>
   <p>floor: {$data['floor']}</p>
   <p>flat Name: {$data['flat_name']}</p>
   <p>flat Size: {$data['size']}</p>
   <p>flat Price: {$data['price']}</p>
    
   ";
    endforeach;
    echo $output;
}
    ?>


<!-- <img src="../../images/2020-10-04-20-53-47-wallhaven-83235k.png" alt=""> -->