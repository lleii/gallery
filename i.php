<?php
define("LF","\r\n");

//$ar2 = parse_ini_file("a.ini");
//print_r($ar2);

for ($x=0; $x<=50; $x++) {
  $ar['0000' . $x] = rand(0,10000);
  //echo "$x ==> $ar[$x]";
  //$ar2[00001] = $ar2['00001'] + 1;
} 

  print_r($ar);
  $s = arsort($ar);
  print_r($ar);

//$ar2[00001] = $ar2['00001'] + 1;
//$ar2['00005'] =  1;
//print_r($ar2);
//print_r($ar3);
//print_r($ar2['Size']);
//write_ini_file($ar2,"a.ini");

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
