<?php


        

if(!defined('__DIR__')) {
            define('__DIR__', dirname(__FILE__));
        }
$dir = __DIR__;
$iniPath = $dir . '/gallery/' . $_GET['n'] . '.ini';

if (file_exists($dir . '/gallery/' . $_GET['n'] . '.jpg')) 
	{ $imgPath = 'gallery/' . $_GET['n'] . '.jpg';}
else if (file_exists($dir . '/gallery/' . $_GET['n'] . '.png')) 
	{ $imgPath = 'gallery/' . $_GET['n'] . '.png';}
else if (file_exists($dir . '/gallery/' . $_GET['n'] . '.gif')) 
	{ $imgPath = 'gallery/' . $_GET['n'] . '.gif';}
else 
	{die('ERROR: Failed to initialize imgPath');}


//$_config     = array();

$ini = parse_ini_file($iniPath, true);


//print_r($imgPath);
//print_r($config['Catolog']);
$navId='pro';

include 'resources/themes/uber-light/header.htm';
include 'resources/themes/uber-light/sidebar.htm';
include 'resources/themes/uber-light/single.htm';
include 'resources/themes/uber-light/footer.htm';





//echo "$config['b']['Catolog']";
?>