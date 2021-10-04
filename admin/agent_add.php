<?php 
include "db.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $first_name = $_POST['agent_first_name1'];
    $last_name = $_POST['agent_last_name1'];
    $mobile_no = $_POST['agent_mobile_no1'];
    $image = $_FILES['agent_photo']['name'];
    $query = "INSERT into agent (first_name,last_name,mobile_no,agent_image) VALUES ('$first_name','$last_name','$mobile_no','$image')";
    if(mysqli_query($conn,$query)){
        move_uploaded_file($_FILES['agent_photo']['tmp_name'] , "images/$image");
        header('location:agent_data.php');
    }
}

?>