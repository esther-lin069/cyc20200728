<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f)) //文件是否讀到結束行
{
	$line = fgets($f); //讀一行
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>

<!-- https://www.w3school.com.cn/php/php_ref_filesystem.asp -->