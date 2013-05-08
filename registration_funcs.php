<?php

    function save_to_db()
    {
        sb_db_connect();

        global $db;
        
        $firstname = $_SESSION['firstname'] = $_POST['firstname'];
        $lastname = $_SESSION['lastname'] = $_POST['lastname'];
        $username = $_SESSION['username'] = $_POST['username'];
        $newpassword = $_SESSION['newpassword'] = $_POST['newpassword'];
        $birthdate = $_SESSION['birthdate'] = '2013-05-21';
        $address = $_SESSION['address'] = 'address';
        $email = $_SESSION['email'] = $_POST['email'];
        
        echo $_POST['firstname'];

        $result = $db->query("INSERT INTO Users(ID, FirstName, LastName, 
            UserName, Password, Age, Address, Email) 
            VALUES(NULL, '$firstname', '$lastname', '$username', '$newpassword',
            '$birthdate', '$address', '$email')");

        if($result)
        {
            header('Location:wall.php');
            exit;
        }

        else 
        {
            header('Location:main.php');
            exit;
        }

        sb_db_disconnect();
    }
    
    function aaa()
    {
        echo '123';
    }

?>