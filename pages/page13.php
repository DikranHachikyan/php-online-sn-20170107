<?php
	function suma( $a, $b){
		echo  '<div>'.$a.' + '.$b.'='.($a + $b).'</div>';				
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php suma(5,6);?>
	<?php suma(2,3);?>
	<?php suma(1,2);?>
</body>
</html>
