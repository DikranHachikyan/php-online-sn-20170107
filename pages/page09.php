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
				$i=1;
			?>
			<?php	while( $i <= 10 ): ?>
		<option value="<?php echo $i;?>">Currency <?php echo $i;?></option>
			<?php	$i++; ?>
			<?php endwhile; ?>
		</select>
		<br>
		<input type="submit" value="Изчисли" >
	</form>
	
</body>
</html>
