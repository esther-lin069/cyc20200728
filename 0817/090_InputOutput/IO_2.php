<?php

$fileDir = dirname ( __FILE__ );
$fileResource = opendir ( $fileDir ); //開檔

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : //讀檔?>
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); //關檔 ?> 
</body>
</html>
