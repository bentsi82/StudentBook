<?php
	include_once 'ServerFiles/library.php';
        include_once 'ServerFiles/vars.php';
        $pagestyles = array(
			"Master" => "masterPageStyle.css",
                        "Forgot" => "forgotPasswowdPageStyle.css"
			);
        $pagejs=NULL;
?>


<?php
	page_start("Forgot Password",$pagestyles,$pagejs,$isValidPage=TRUE);
?>


<?php 
        logo();
        sendpass();
?>


<?php 
 	page_end();
?>