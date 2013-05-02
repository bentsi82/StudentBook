<?php

    $db=1;
    
    function sb_db_connect()
    {
        global $db;
        
        $mysql_host = "localhost";
        $mysql_database = "studentbook";
        $mysql_user = "root";
        $mysql_password = "bentsiwebhost82";
        
        $db = new mysqli ($mysql_host,$mysql_user,$mysql_password,$mysql_database) or die(mysql_error());
    }
    
    function sb_db_disconnect()
    {
        global $db;
        $db->close();
    }
    
    function sb_db_isLoginValid($username , $password)
    {
        global $db;
        
        $res = $db->query("SELECT COUNT(*) As 'Amount' 
                            FROM Users
                            WHERE UserName='$username'
                            AND Password='$password'");
                           
        $firstrow = $res->fetch_assoc();
            
        return $firstrow["Amount"] == 1;
    }
    
    function sb_db_insertTable()
    {
    }
?>