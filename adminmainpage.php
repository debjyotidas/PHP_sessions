<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:admin_login.php');
    // $_SESSION['user'] = time();
}
if(isset($_SESSION['user']))
{
    $_SESSION["login_time_stamp"] = time();
    if(time()-$_SESSION["login_time_stamp"] >60) 
    {
        session_unset();
        session_destroy();
        header("location:admin_login.php");
    }
}
else
{
    header("location:admin_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php'?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container center-div shadow">
        <div class="heading text-center text-uppercase text-white mb-5">
            Hello, Welcome <?=$_SESSION['user']?> !!!!
        </div>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
    
</body>
</html>