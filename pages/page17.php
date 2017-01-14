<?php
	
	function show( $msg){
		if( empty($msg)){
			return;
		}		
		echo 'Message:'.$msg;		
	}

	function suma($a, $b){
		return $a + $b;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div><?php show('');?></div>
	<div><?php show('Hello PHP');?></div>
	<div>Result:<?php echo suma(5,6);?></div>
	
	
</body>
</html>
