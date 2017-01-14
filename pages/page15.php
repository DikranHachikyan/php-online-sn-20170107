<?php
	$msg = 'Hello PHP';//Global variable
	function show( ){
		global $msg;
		global $_SERVER;
		$t = 'message:'; //Local variable
        //$msg = 'Local var';

		echo $t.$msg;
		echo '<div>Reguest Method:'.$_SERVER['REQUEST_METHOD'].'</div>';				
	}

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php show();?>
</body>
</html>
