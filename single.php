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




//$ar2 = parse_ini_file("a.ini");
//print_r($ar2);


//  print_r($ar);
//  $s = arsort($ar);
//  print_r($ar);

//$ar2[00001] = $ar2['00001'] + 1;
//$ar2['00005'] =  1;
//print_r($ar2);
//print_r($ar3);
//print_r($ar2['Size']);
//write_ini_file($ar2,"a.ini");
define("LF","\r\n");

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