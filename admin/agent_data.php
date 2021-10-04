<?php

include "db.php";
include "php/header.php";
include "php/navbar.php";
include "php/topbar.php";

$query = "SELECT * from agent";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
$length_of_agents = count($fetch);
$output = "";
if ($result) {
}
?>

<div class="agents">
    <form action="agent_add.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="text" name="agent_first_name1" id="agent_first_name1" placeholder="First name"></td>
                <td><input type="text" name="agent_last_name1" id="agent_last_name1" placeholder="Last name"></td>
                <td><input type="text" name="agent_mobile_no1" id="agent_mobile_no1" placeholder="Mobile Number"></td>
                <td><input type="file" name="agent_photo" id="agent_photo" accept="image/jpg, image/png, image/jpeg"></td>
                <td><input type="submit" value="Add" name="add_agent" id="add_agent"></td>
            </tr>
        </table>
    </form>
</div>

<div class="agent_data">
    <table border='1' cellspacing='0px' cellpadding='20px'>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last Name</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($fetch as $data) : ?>
            <tr>
                <td><?php echo $data['ID'] ?></td>
                <td><?php echo $data['first_name'] ?></td>
                <td><?php echo $data['last_name'] ?></td>

                <td><input class="btn view" type="button" value="View" onclick="modal_view()" id="agent_view" data-id="<?php echo $data['ID'] ?>"></td>
                <td><input class="btn update" type="button" value="Update" onclick="modal_view()" id="agent_update" data-id="<?php echo $data['ID'] ?>" ></td>
                <td><input class="btn delete" type="button" value="Delete" id="agent_delete" data-id="<?php echo $data['ID'] ?>"></td>
            </tr>
        <?php endforeach;
        ?>
    </table>
    <!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
        <form action="" method="post">
        <div class="data">
        </div>
        </form>
    
  </div>

</div>

</div>
<?php include "php/footer.php"; ?>