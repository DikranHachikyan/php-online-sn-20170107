<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="get">
		Сума:<input type="text" name="amount">лв.
		<br>
	<select name="currency">
		<option value="">---Валута---</option>
		<?php
			
			$crs =  array('USD','EUR','CHF','NZD');
		?>
		<?php for( $i=0 ; $i < count($crs); $i++ ): ?>
			
	<option value="<?php echo $crs[$i];?>"><?php echo $crs[$i];?></option>
		
		<?php endfor; ?>
	</select>
		<br>
		<input type="submit" value="Изчисли" >
	</form>
	
</body>
</html>
