<?php
include "PHP/db.php";



$error_messege_email = "";
$error_messege_pass = "";
$error_messege_mob = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$first_name = validate($_POST['first_name']);
	$last_name = validate($_POST['last_name']);
	$email =  $_POST['your_email'];

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email = $email;
	} else {
		$error_messege_email = "* Please Enter Valid Email";
	}

	$mobil_no =  validate($_POST['your_mobile']);

	if ($mobil_no == "") {
		$error_messege_mob = "Enter Your mobile Number";
	} elseif (!preg_match("/(^(\+88)?(01){1}[3456789]{1}(\d){8})$/", $mobil_no)) {
		$error_messege_mob = "Please Enter Vaid Number";
	} else {
		$mobil_no = $mobil_no;
	}
	$password = validate($_POST['password']);
	$confirm_pass =  validate($_POST['comfirm_password']);

	if ($password != $confirm_pass) {
		$error_messege_pass = "* Password Didnt match";
	} else {
		$password = $password;
	}

	$query = "INSERT into registration (first_name,last_name,email,mobile_no,pass) VALUES 
			('$first_name','$last_name','$email','$mobil_no','$password')";
		
	$result = mysqli_query($conn,$query);
	
	if (!$result) {
		echo "Cant insert";
	}
	else{
		header("location:home.php");
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">You Need to create an acount for Selling any property that you OWNED </p>
				<p class="text-2"><span></span> Please Provide your real information so that any user can contact you for your ad.</p>
				<div class="form-left-last">
					<a href="login.php"><input type="submit" name="account" class="account" value="Have An Account"></a>
				</div>
				<div class="form-left-last">
					<a href="index.php"><input type="submit" name="account" class="account" value="Back to Home"></a>
				</div>
			</div>
			<form class="form-detail" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="myform">
				<h2>REGISTER FORM</h2>
				<div class="form-group">
					<div class="form-row form-rows-1">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" id="first_name" class="input-text" required>
					</div>
					<div class="form-row form-rows-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text" required>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Your Email</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required ">
					<span class=" error" style="color: red; padding:0%;"><?php echo $error_messege_email; ?></span>
				</div>
				<div class=" form-row">
					<label for="your_mobile">Your Mobile No</label>
					<!-- ^(?:\01)?(?:\d{11}|\d{11})$ -->
					<input type="text" name="your_mobile" id="your_mobile" class="input-text" required>
					<span class="error" style="color: red;"><?php echo $error_messege_mob; ?></span>
				</div>
				<div class=" form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>

					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Comfirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>

				</div>
				<span class="error" style="color: red;"><?php echo $error_messege_pass; ?></span>
				<!-- <div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					<input type="checkbox" name="checkbox">
					<span class="checkmark"></span>
					</label>
					
				</div> -->
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<!-- <script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>