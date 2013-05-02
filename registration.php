
<?php
	include_once 'ServerFiles/library.php';
        include_once 'ServerFiles/database.php';
        include_once 'ServerFiles/vars.php';
        $pagestyles = array(
			"Master" => "masterPageStyle.css",
                        "Tabs" => "Tabs_jquery/tabs_style.css"
			);
        
        $pagejs = array(
                        "Tabs" => "Tabs_jquery/tabs.js"
			);
?>


<?php
	page_start("Registration",$pagestyles,$pagejs,$isValidPage=TRUE);
?>


<?php 
        logo();
        tabsmenu();
?>


<?php 
 	page_end();
?>

            //<?php
//
//            include 'ServerFiles/database.php';
//            
//            sb_db_connect();
//            
//            global $db;
//            $firstname = $_POST["firstname"];
//            $lastname = $_POST["lastname"];
//            $username = $_POST["username"];
//            $newpassword = $_POST["newpassword"];
//            $birthdate = 20;
//            $address = 'a';
//            $email = $_POST["email"];
//            
//            $result = $db->query("INSERT INTO Users(ID, FirstName, LastName, 
//                UserName, Password, Age, Address, Email) 
//                VALUES(NULL, '$firstname', '$lastname', '$username', '$newpassword',
//                '$age', '$address', '$email')");
//            
//            if($result){
//            echo "Successful";
//            }
//
//            else {
//            echo "ERROR";
//            }
//
//            sb_db_disconnect();
//            
//            ?>


