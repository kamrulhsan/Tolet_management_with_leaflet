<?php
include "../db.php";
$sellpost_id = $_POST['sellpost_id'];
$query = "SELECT * from sell_post where ID = '$sellpost_id'";
// var_dump($query);exit;
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
$output = "";
if ($result) {
    foreach ($fetch as $data) :

    $output .= "
    <h2 style='text-align:center;'>Sell Post Details</h2>
    <br><hr><br>
    
    <div class='sellpost_image'>
    <img src='../images/{$data['image_name']}' alt='not found' style='width:100%;'>
    <img src='../images/{$data['image_name1']}' alt='not found' style='width:100%;'>
    <img src='../images/{$data['image_name2']}' alt='not found' style='width:100%;'>
    <img src='../images/{$data['image_name3']}'  style='width:100%;'>
     </div>
   <p>Building Name: {$data['building_name']}</p>
   <p>Bed: {$data['bed']}</p>
   <p>Bath: {$data['bath']}</p>
   <p>floor: {$data['floor']}</p>
   <p>flat Name: {$data['flat_name']}</p>
   <p>flat Size: {$data['size']}</p>
   <p>flat Price: {$data['price']}</p>";
    endforeach;
    echo $output;
}
    ?>
   


   <!--  -->