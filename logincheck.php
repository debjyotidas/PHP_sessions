<?php
session_start(); // Start the session
$con = mysqli_connect('localhost','root',);
if($con){
    echo "connection successfull";
}
else{
    echo "no connection";
}

$db = mysqli_select_db($con,'admin_session');

if(isset($_POST['submit'])){
    $usern = $_POST['username'];  //form input for username textbox
    $passw = $_POST['passwo'];  //form input for password textbox

    $sql = "select * from admintable where user = '$usern' && pass = '$passw' "; //comparing table's user and pass with input fields
    $query= mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);

    if($row == 1){
        echo "login successfull";
        $_SESSION['user'] = $usern;
        $_SESSION["login_time_stamp"] = time();
        header('location:adminmainpage.php');
    }
    else{
        echo "Login Failed";
        header('location:admin_login.php');
    }
    

    
    
    


}
?>