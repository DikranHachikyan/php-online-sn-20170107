<?php
	
	function show( ){
		static $m=1;
		$m++;
		echo $m;				
	}

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div><?php show();?></div>
	<div><?php show();?></div>
	<div><?php show();?></div>
	
</body>
</html>
