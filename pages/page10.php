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
			$i=0;
			$crs =  array('USD','EUR','CHF','NZD');
		?>
		<?php	while( $i < count($crs) ): ?>
	<option value="<?php echo $crs[$i];?>"><?php echo $crs[$i];?></option>
		<?php	$i++; ?>
		<?php endwhile; ?>
	</select>
		<br>
		<input type="submit" value="Изчисли" >
	</form>
	
</body>
</html>
