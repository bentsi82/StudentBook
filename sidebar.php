<table class="window">
<?php 

	// will be moved to vars.php in the next lesson
	$links = array(
			"Messages" => "messages.php",
			"Profile" => "profile.php",
                        
			);
	//// the same as writing:
	//$links = array();
	//$links["Messages"] = "messages.php";
	//$links["Profile"] = "profile.php";

	foreach($links as $description => $hyperlink)
	{
            ?>
            <tr>
                <td class="sidebar_option">
            <?php
            echo "<a href=\"$hyperlink\">$description</a><br />";
            ?>
                </td>
            </tr>
            <?php
		
		//// the same as writing
		// echo '<a href="' . $value . '">' . $key . '</a><br />';
	}
?>

</table>