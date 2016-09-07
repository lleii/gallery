<?php


        


define("LF","\r\n");





$a = parse_ini_file("resources/db/visit.txt");

$j=0;
foreach($a as $x=>$x_value)
    {
      $j++;
      if ($j>3) break;
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
    }


//print_r($a[0]);

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





//echo "$config['b']['Catolog']";
?>
