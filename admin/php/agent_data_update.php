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
    $output.="
    <h2>Agent Details</h2>
    <br><hr><br>
    <table>
    <tr><input type='text' name='agent_first_name' id='agent_first_name' value='{$data['first_name']}'></tr>
    <tr><input type='text' name='agent_last_name' id='agent_last_name' value='{$data['last_name']}'></tr>
    <tr><input type='text' name='agent_mobile_no' id='agent_mobile_no' value='{$data['mobile_no']}'></tr>
    <tr><input type='submit' value='Update' class='btn update'></tr>
    </table>";
    endforeach;
    echo $output;
}
?>

