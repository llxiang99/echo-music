<?php 
header("Content-type:text/html;charset=utf-8");
$filename = $_GET['file']; //歌曲地址
$file = $_GET['name']; 
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=".$file.'.mp3');
readfile($filename);
 ?>