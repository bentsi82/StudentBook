<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<?php 

    session_start();
    if (!$isValidPage)
        redirectOnNoLogin();
    
?>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Book - <?php echo $title;?></title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>        <?php 

            if (isset($pagejs))
                foreach($pagejs as $script => $path)
                {
                    echo "<script src=\"$path\" type=\"text/javascript\"></script>";
                }
        
            if (isset($pagestyles))    
                foreach($pagestyles as $style => $link)
                {
                    echo "<link href=\"$link\" rel=\"stylesheet\" type=\"text/css\" />";
                }

        ?>
</head>
<body>