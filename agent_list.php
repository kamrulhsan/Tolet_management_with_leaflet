<?php
include "PHP/header.php";
include "PHP/menu.php";
include "PHP/db.php";

$query = "SELECT * from agent";
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<div class="jumbotron">
    <h2 class="text-center">Agents List</h2>
    
</div>
<table class="table-bordered agent_list text-center">
<tr class="bg-dark text-white">
    <th>Image</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile Number</th>

</tr>
<?php foreach($fetch as $data):?>
<tr>
    <td><img src="admin/images/<?php echo $data['agent_image'];?>" alt="not found"></td>
    <td><?php echo $data['first_name'];?></td>
    <td><?php echo $data['last_name'];?></td>
    <td><?php echo $data['mobile_no'];?></td>
</tr>
<?php endforeach;?>
</table>
<?php include "PHP/footer.php" ?>
<script>
    $(window).ready(function() {
        $("title").html("Agents");
    });
</script>