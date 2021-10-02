<?php 

$conn = mysqli_connect('localhost','kamrul','123456','tolet');
if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

function validate($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}


?>