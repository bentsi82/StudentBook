<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php

            include './ServerFiles/database.php';
            
            
            sb_db_connect();
            
            if (sb_db_isLoginValid($_POST['username'],$_POST['userpassword']))
                echo 'Entered Successfuly';
            else
                echo 'Wrong Username or Password';
            
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['userpassword'] = $_POST['userpassword'];

            sb_db_disconnect();
            
            ?>
        </div>
    </body>
</html>



