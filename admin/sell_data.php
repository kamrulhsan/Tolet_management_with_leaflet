<?php 

include "db.php";
include "php/header.php";
include "php/navbar.php";
include "php/topbar.php";

$query = "SELECT * from sell_post";
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
$output = "";
if ($result) {
    
}
?>

    <div class="sell_data">
    <table border='1' cellspacing='0px' cellpadding='20px'>
        <tr>
            <th>ID</th>
            <th>Building Name</th>
            <th>Flat name</th>
            <th>1st Image</th>
            <th>Price</th>
            <th>View</th>
            <th>Edit</th>
            <th>Update</th>

        </tr>
        <?php foreach($fetch as $data) :?>
        <tr>
            <td><?php echo $data['ID']?></td>
            <td><?php echo $data['building_name']?></td>
            <td><?php echo $data['flat_name']?></td>
            <td><img src="../images/<?php echo $data['image_name']?>" alt="Paitasina" style="width:100%"></td>
            <td><?php echo $data['price']?></td>
            <td><input class="btn view" type="button" value="View"></td>
            <td><input class="btn update" type="button" value="Update"></td>
            <td><input class="btn delete" type="button" value="Delete"></td>
        </tr>
        <?php endforeach;
       ?>
    </table>
    </div>
    <?php  include "php/footer.php";?>
