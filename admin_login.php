<?php include 'logincheck.php' ?>

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
    <header>
        <div class="container center-div shadow ">
            <div class="mb-5 heading text-center text-white text-uppercase">admin login page</div>
            <div class="container row d-flex flex-row justify-content-center">
                <div class="admin_form shadow p-2">
                    <form action="loginCheck.php" method="POST">
                            <div class="form_grp">
                                <label>Username:</label><br/>
                                <input type="text" name="username" value="" class="form-control"  autocomplete="off">
                            </div>
                            <div class="form_grp">
                                <label>Password:</label><br/>
                                <input type="password"  class="form-control" name="passwo" value="" autocomplete="off">
                            </div>
                            <input type="submit" class="btn btn-success" name="submit">
                    </form>
                </div>
            </div>
        </div>
        
    </header>
</body>
</html>