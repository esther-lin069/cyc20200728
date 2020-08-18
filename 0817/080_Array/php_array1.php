<?php
// $bloodType[] = 'A';
// $bloodType[] = 'B';
// $bloodType[] = 'AB';
// $bloodType[] = 'O';

$bloodType = ['A','B','AB','O'];

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}

foreach( $bloodType as $key => $item ){
	echo $key .">" .$item ."<br>";
}
?>