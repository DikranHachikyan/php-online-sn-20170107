<?php
	//--------------------------------------
	//function suma( $a, [$b=1, [$msg='Result']])
    //--------------------------------------
	function suma( $a, $b=1, $msg='Result'){
		echo  '<div>'.$msg.' '.($a + $b).'</div>';				
	}

	/***************************************
	* !!!!
	* function suma( $a=1, $b, $msg='Result'){}
	* 
	****************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php suma(5,6,'Sum');?>
	<?php suma(2);?>
	<?php suma(7,1,'Total:');?>
</body>
</html>
