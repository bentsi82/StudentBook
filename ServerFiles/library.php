<?php

include_once 'vars.php';

function page_start($title,$pagestyles,$pagejs,$isValidPage)
{
    include_once 'html_header.php';
}

function page_end()
{
    include_once 'html_footer.php';
}

function sidebar()
{
    include_once 'sidebar.php';
}

function login()
{
    include_once 'login.php'; 
}

function signup()
{
    include_once 'signup.php'; 
}

function logo()
{
    include_once 'logo.php'; 
}

function sendpass()
{
    include_once 'sendpassword.php'; 
}

function regmenu()
{
    include_once 'Tabs_jquery/tabs.php';
}

function redirectOnNoLogin()
{
    if (!isset($_SESSION['username']))
    {
        header('Location:main.php');
        exit;
    }
}

function mimuna()
{
	$x = array("heyo","whats up",3,4,5);
	
	$x[0] = "heyo";
	$x[1] = "whats up";
	$x[2] = 3;
	unset($x[3]);
	unset($x[4]);
	$x[300] = 4;
	$x[400] = 5;
	
	// will have problem reaching 300 and 400
	for ($i = 0; $i< count($x); $i++)
	{
		echo $x[$i] . "\n";
	}
	
	foreach ($x as $key => $value)
	{
		echo $value . "\n";		
	}
	
	if (isset($makore))
	{
		echo $makore;
	}
	
	$makore = 7;
	unset($makore);
}
?>