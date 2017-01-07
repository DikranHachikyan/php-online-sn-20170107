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
			<option value="USD">USD</option>
			<option value="EUR">EUR</option>
		</select>
		<br>
		<input type="submit" value="Изчисли" >
	</form>
	<?php
		//данните от фурмуляра се обработват тук!!!
		$amount = $_GET['amount'];
		$currency = $_GET['currency'];
		define('USD_RATE', 1.7);
		define('EUR_RATE', 1.95);
	?>
	  
   <?php if( $currency === 'USD'): ?>
	
        <div><?php echo $amount;?> лв. са <?php echo round($amount/USD_RATE, 2);?>USD</div>
	
	<?php  elseif( $currency === 'EUR'): ?>

		<div><?php echo $amount;?>лв. са <?php echo round($amount/EUR_RATE,2);?> EUR</div>
	
	<?php else: ?>
	
		<h3>Въведете сума и изберете валута!</h3>
	
	<?php endif; ?>
	
</body>
</html>
