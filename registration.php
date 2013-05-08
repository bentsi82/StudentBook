
<?php
	include_once 'ServerFiles/library.php';
        include_once 'ServerFiles/database.php';
        include_once 'ServerFiles/vars.php';
        include_once 'registration_funcs.php';
        
        $pagestyles = array(
			"Master" => "masterPageStyle.css",
                        "Tabs" => "Tabs_jquery/tabs_style.css",
                        "Uploadify" => "uploadify/uploadify.css"
			);
        
        $pagejs = array(
                        "Tabs" => "Tabs_jquery/tabs.js",
                        "Uploadify" => "uploadify/jquery.uploadify.min.js"
			);
?>


<?php
	page_start("Registration",$pagestyles,$pagejs,$isValidPage=TRUE);
?>


<?php 
        logo();
        regmenu();
?>


<?php 
 	page_end();
?>

            


