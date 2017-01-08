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
				while( $i <= 10 ){
					echo '<option value="'.$i.'">Currency '.$i.'</option>';
					$i++;
				}
			?>
		</select>
		<br>
		<input type="submit" value="Изчисли" >
	</form>
	
</body>
</html>
