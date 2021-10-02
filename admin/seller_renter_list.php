<?php 

include "db.php";
include "php/header.php";
include "php/navbar.php";
include "php/topbar.php";

$query = "SELECT * from registration";
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
$output = "";
if ($result) {
    
}
?>

    <div class="seller_data">
    <table border='1' cellspacing='0px' cellpadding='20px'>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>View</th>
            <th>Edit</th>
            <th>Update</th>

        </tr>
        <?php foreach($fetch as $data) :?>
        <tr>
            <td><?php echo $data['ID']?></td>
            <td><?php echo $data['first_name']?></td>
            <td><?php echo $data['last_name']?></td>
            <td><input class="btn view" type="button" value="View"></td>
            <td><input class="btn update" type="button" value="Update"></td>
            <td><input class="btn delete" type="button" value="Delete"></td>
        </tr>
        <?php endforeach;
       ?>
    </table>
    </div>
    <?php  include "php/footer.php";?>
