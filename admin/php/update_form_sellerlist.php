<?php
include "../db.php";
$seller_id = $_POST['seller_id'];
$query = "SELECT * from registration where ID = '$seller_id'";
// var_dump($query);exit;
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
$output = "";
if ($result) {

    $output .= "
    <h2 style='text-align:center;'>Seller Details Update form</h2>
    <br><hr><br>"; ?>
<?php
    foreach ($fetch as $data) :
        $output .= "
        <div class='sellpost_data'>
        <table>
        <tr>
            <td>First Name: </td>
            <td><input type='text' name='first_name' id='first_name' value='{$data['first_name']}'></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input type='text' name='last_name' id='last_name' value='{$data['last_name']}'></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type='text' name='email' id='email' value='{$data['email']}'></td>
        </tr>
        <tr>
            <td>Mobile Number: </td>
            <td><input type='text' name='mobile_no' id='mobile_no' value='{$data['mobile_no']}'></td>
        </tr>
        <tr>
        <td><input type='text' name='seller_id' id='seller_id' value='{$data['ID']}' hidden ></td>
        <td><input type='submit' value='Update' class='btn update' id='seller_update_db' style='width: 30% !important; margin-top: 20px;'></td>
    </tr>
    </table>
    </div>";
    endforeach;
    echo $output;
}
?>

