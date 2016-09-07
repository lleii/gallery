<?php
define("LF","\r\n");

$a = parse_ini_file("a.ini");
//print_r($argv[1]);

if (isset($a[$argv[1]]))
{
  $a[$argv[1]]++;
}
else
{
  $a[$argv[1]]=500;
}
arsort($a);
print_r($a);
//for ($x=0; $x<=50; $x++) {
 // $ar['0000' . $x] = rand(0,10000);
  //echo "$x ==> $ar[$x]";
  //$ar2[00001] = $ar2['00001'] + 1;
//} 

  //$s = arsort($ar);

//$ar2[00001] = $ar2['00001'] + 1;
//$ar2['00005'] =  1;
//print_r($ar2);
//print_r($ar3);
//print_r($ar2['Size']);
write_ini_file($a,"a.ini");

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
?>
