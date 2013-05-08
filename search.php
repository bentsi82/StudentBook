
<?php
	include_once 'ServerFiles/library.php';
        include_once 'ServerFiles/database.php';
        include_once 'ServerFiles/vars.php';
        
        $pagestyles = array(
			"Master" => "masterPageStyle.css",
                        "Search" => "searchPageStyle.css"
			);
        $pagejs=NULL;
?>


<?php
	page_start("Search",$pagestyles,$pagejs,$isValidPage=TRUE);
?>


<?php 
        logo();
        search();
?>


<?php 
 	page_end();
?>

            


