<?php 
include "../db.php";
$agent_id = $_POST['agent_id'];
$query = "SELECT * from agent where ID = '$agent_id'";
// var_dump($query);exit;
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
$output = "";
if($result){
   
    $output.="
    <h2 style='text-align:center;'>Agent Details</h2>
    <br><hr><br>
    <table>
    <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Mobile Number</td>
    </tr>";?>
    <?php 
     foreach($fetch as $data):
    $output.= "
    
    
    <tr>
    <td><input type='text' name='agent_first_name' id='agent_first_name' value='{$data['first_name']}'></td>
    <td><input type='text' name='agent_last_name' id='agent_last_name' value='{$data['last_name']}'></td>
    <td><input type='text' name='agent_mobile_no' id='agent_mobile_no' value='{$data['mobile_no']}'></td>
    </tr>
    <tr>
    <td><input type='text' name='agent_id' id='agent_id' value='{$data['ID']}' hidden></td>
    <td><button type='button' class='btn update' id='agent_update_db'>Update</button></td>
    </tr>
 

    </table>";
    endforeach;
    echo $output;
}
?>


