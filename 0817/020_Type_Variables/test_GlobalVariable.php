<?php
$a = 20;
function myfunction($b) {
	print "a=$a<br>"; // $a 未被定義
	$a = 30;
	print "a=$a<br>"; // 30
	global $a, $c;    // $c 在這裡被定義為全域變數
	print "a=$a<br>"; // 20
	return $c = ($b + $a);
}
print myfunction(40) + $c; //120
?>