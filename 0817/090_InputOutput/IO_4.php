<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";  //不解析語法字串，輸出純文字
} 

?> 