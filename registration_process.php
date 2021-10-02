<?php 
include "PHP/db.php";

function validate($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);

return $data;
}
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $first_name = validate($_POST['first_name']);
$last_name = validate($_POST['last_name']);
$email =  $_POST['your_email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{}
else{

}
$mobil_no =  validate($_POST['your_mobile']);
$password = validate($_POST['password']);
$confirm_pass =  validate($_POST['comfirm_password']);
if ($password != $confirm_pass){

}
else{

}
}



?>