<?php
include "../db.php";
$sellpost_id = $_POST['sellpost_id'];
$query = "SELECT * from sell_post where ID = '$sellpost_id'";
// var_dump($query);exit;
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
$output = "";
if ($result) {

    $output .= "
    <h2 style='text-align:center;'>Sell post Update form</h2>
    <br><hr><br>"; ?>
<?php
    foreach ($fetch as $data) :
        $output .= "
        <div class='sellpost_data'>
        <table>
        <tr>
            <td>Building Name: </td>
            <td><input type='text' name='building_name' id='building_name' value='{$data['building_name']}'></td>
        </tr>
        <tr>
            <td>Bed: </td>
            <td><input type='text' name='bed' id='bed' value='{$data['bed']}'></td>
        </tr>
        <tr>
            <td>Bath: </td>
            <td><input type='text' name='bath' id='bath' value='{$data['bath']}'></td>
        </tr>
        <tr>
            <td>Floor number: </td>
            <td><input type='text' name='floor' id='floor' value='{$data['floor']}'></td>
        </tr>
        <tr>
            <td>Flat Name: </td>
            <td><input type='text' name='flat_name' id='flat_name' value='{$data['flat_name']}'></td>
        </tr>
        <tr>
            <td>Flat Size: </td>
            <td><input type='text' name='size' id='size' value='{$data['size']}'></td>
        </tr>
        <tr>
            <td>Flat Price: </td>
            <td><input type='text' name='price' id='price' value='{$data['price']}'></td>
        </tr>
        <tr>
            <td><input type='text' name='sellpost_id' id='sellpost_id' value='{$data['ID']}' hidden ></td>
            <td><button type='button' class='btn update' id='sellpost_update_db' style='width: 30% !important; margin-top: 20px;'>Update</button></td>
        </tr>
    </table>
    </div>";
    endforeach;
    echo $output;
}
?>

