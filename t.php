<?php 
$now = time();
date_default_timezone_set("Asia/Shanghai");
//echo date("Y-m-d");
//print_r($now);
//2010-05-28
$Date_1="2009-07-08";

//echo $Date_1+1;

$Date_2="2009-06-08";
$Date_List_a1=explode("-",$Date_1);

$Date_List_a2=explode("-",$Date_2);

$d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);

$d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);

$Days=round(($d1-$d2)/3600/24);

//echo "两日期之前相差有$Days 天";


?>
