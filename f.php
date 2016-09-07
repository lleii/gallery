<?php
date_default_timezone_set("Asia/Shanghai");
print_r(date("F d Y H:i:s.") . " \n");
print_r(date("F d Y H:i:s.",time()) . " \n");
print_r(date("Y-m-d H:i:s.",fileatime('tmp/00001.txt')) . "  atime访问\n");
print_r(date("F d Y H:i:s.",filectime('tmp/00001.txt')) . "  ctime改变  V\n");
print_r(date("F d Y H:i:s.",filemtime('tmp/00001.txt')) . "  mtime修改\n");
//print_r(filemtime('tmp/00002.jpg'));

?>
