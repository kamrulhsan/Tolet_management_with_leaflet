<?php 
include "../db.php";
$agent_id = $_POST['agent_id'];
$query = "SELECT * from agent where ID = '$agent_id'";
// var_dump($query);exit;
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
$output = "";
if($result){
    foreach($fetch as $data):
    $output.="<h2>Agent Details</h2>
    <br><hr><br>
    <img src='images/{$data['agent_image']}' style='border-radius:50%;width:150px;height:100px;display: block;
    margin-left: auto;
    margin-right: auto;' alt='OOpss'><br>
    Name : {$data['first_name']} {$data['last_name']}<br> Mobile Number : {$data['mobile_no']}";
    endforeach;
    echo $output;
}
?>
