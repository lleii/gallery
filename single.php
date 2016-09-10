<?php

ini_set('display_errors', false);
        

if(!defined('__DIR__')) {
            define('__DIR__', dirname(__FILE__));
        }
$dir = __DIR__;
$iniPath = $dir . '/gallery/' . $_GET['n'] . '.txt';

if (file_exists($dir . '/gallery/' . $_GET['n'] . '.jpg')) 
	{ $imgPath = 'gallery/' . $_GET['n'] . '.jpg';}
else if (file_exists($dir . '/gallery/' . $_GET['n'] . '.png')) 
	{ $imgPath = 'gallery/' . $_GET['n'] . '.png';}
else if (file_exists($dir . '/gallery/' . $_GET['n'] . '.gif')) 
	{ $imgPath = 'gallery/' . $_GET['n'] . '.gif';}
else 
	{
    //die('ERROR: Failed to initialize imgPath');
    //header('HTTP/1.1 404 Not Found');
    //header("status: 404 Not Found");
    include '404.php';
    exit;
  }

$ini = parse_ini_file($iniPath, true);
date_default_timezone_set("Asia/Shanghai");
//$_config     = array();

define("LF","\r\n");




$a = parse_ini_file("resources/db/visit.txt");
//print_r($argv[1]);

if (isset($_GET['n']))
{
	if(empty($_COOKIE[$_GET['n']])){ //判断COOKIE的是否存在
 		setcookie($_GET['n'],1,time()+3600); //如果不存在,则创建COOKIE
		if (isset($a[$_GET['n']]))
			{
  				$a[$_GET['n']]++;
			}
		else
			{
  				$a[$_GET['n']]=500;
			}
		arsort($a);
//		print_r($a);
		write_ini_file($a,"resources/db/visit.txt");
	}
}


function write_ini_file($array,$filename) {
  $ok = "";
  $s = "";
  foreach($array as $k=>$v) {
    if(is_array($v)) {
      if($k != $ok) {
        $s .= LF."[$k]".LF;
        $ok = $k;
      }
      $s .= write_ini_file($v,"");
    }else {
      if(trim($v) != $v || strstr($v,"["))
$v = "\"$v\"";
      $s .= "$k = $v".LF;
    }
  }
  if($filename == "")
    return $s;
  else {
    $fp = fopen($filename,"w");
    fwrite($fp,$s);
    fclose($fp);
  }
}

//print_r($imgPath);
//print_r($config['Catolog']);
$navId='pro';


include 'resources/themes/uber-light/header.htm';
include 'resources/themes/uber-light/sidebar.htm';
include 'resources/themes/uber-light/single.htm';
include 'resources/themes/uber-light/footer.htm';





//echo "$config['b']['Catolog']";
?>