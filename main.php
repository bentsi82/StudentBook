<?php
	include_once 'ServerFiles/library.php';
        include_once 'ServerFiles/database.php';
        include_once 'ServerFiles/vars.php';
        $pagestyles = array(
			"Master" => "masterPageStyle.css",
                        "Main" => "mainPageStyle.css"
			);
        $pagejs = NULL;
?>


<?php
	page_start("Main",$pagestyles,$pagejs,$isValidPage=TRUE);
?>


<?php 
        echo "<div id=\"main_header\"><p>בסטודנטבוק אתה תחווה , תשתף ותשמור תמיד על קשר עם חבריך ללימודים .</p></div>";
        logo();
        login();
        signup();
?>


<?php 
 	page_end();
?>
