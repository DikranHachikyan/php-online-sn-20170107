<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$amount = $_GET['amount'];
		$rate = $_GET['currency'];
	?>
	<form action="" method="get">
		Сума:<input type="text" name="amount" value="<?php echo $amount;?>">лв.
		<br>
	<select name="currency">
		<option value="">---Валута---</option>
		<?php
			
			$crs =  array('USD'=>1.7,'EUR'=>1.95,'CHF'=>2.5,'NZD'=>1.8);
		?>
		<?php	foreach( $crs as $key=>$value): ?>
	<option value="<?php echo $value;?>" 
				  <?php echo ($value == $rate)? 'selected="selected"':'' ;?>	
	><?php echo $key;?></option>
		
		<?php endforeach; ?>
	</select>
		<br>
		<input type="submit" value="Изчисли" >
	</form>
	
	<?php
		if( !empty($amount) && 
			!empty($rate) && 
			is_numeric($amount) && 
			is_numeric($rate)
		  ):
	?>
	<div>Резултат:<?php echo round($amount/$rate, 2);?></div>
		<?php endif; ?>

	<pre><?php print_r($_GET);?></pre>
</body>
</html>
