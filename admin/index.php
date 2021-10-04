<?php 
session_start();
include "db.php";
error_reporting(E_ERROR | E_PARSE);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['userpass'];


    $query = "SELECT * from admin_login";
    $result = mysqli_query($conn,$query);
    $fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $error_msg = "";
    foreach($fetch as $data):
        if($data['username'] == $username && $data['pass'] == $pass)
        {
            $_SESSION['username']= $username;
            header("location:dashboard.php");
        }
        else{
            $error_msg = "Invalid Username or Password";
        }
    endforeach;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            margin: 0%;
            padding: 0%;
            background-color:#5bccf6;

        }

        .admin_login {
            margin-left: auto;
            margin-right: auto;
            margin-top: 6rem;
            padding-top: 2rem;
            text-align: center;
            width: 30%;
            background-color: white;
            border-radius: 05px;

        }

        .admin_login_form {
            margin-left: auto;
            margin-right: auto;
            padding-top: 2rem;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 1em;
        }
        input {
            background-color: #f2f2f2;
            width: 200px;
            height: 30px;
            border: none;
            border-radius: 10px;
        }

        tr td {
            margin-bottom: 2rem;
        }

        .button {
            background-color:#fcde67;
            width: 100px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <div class='admin_login'>
        <h2>Admin Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class='admin_login_form'>
                
                <tr>
                    <td> <input type="text" name="username" id="username" placeholder="User Name"></td>

                </tr>
                
                <tr>
                    <td><input type="password" name="userpass" id="userpass" placeholder="Password"></td>

                </tr>
                <tr>


                    <td><input class="button" type="submit" value="Log In"></td>

                </tr>
            </table>


            <span style="color: red;"><?php echo $error_msg;?></span>

        </form>
    </div>
</body>

</html>