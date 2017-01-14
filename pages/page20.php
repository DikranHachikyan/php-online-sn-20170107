<?php include_once 'inc/config.inc.php';?>
<!DOCTYPE html>
<html lang="<?php echo DEF_LANG;?>">
<head>
	<meta charset="<?php echo ENC;?>">
	<title><?php echo TITLE;?></title>
</head>
<body>
	<form action="">
		<?php include_once 'inc/days.inc.php';?>
		<?php include_once 'inc/months.inc.php';?>
		<?php include_once 'inc/years.inc.php';?>
		<br>
		<input type="submit" value="Check">
	</form>
	<?php
		$day = $_GET['day'];
		$month = $_GET['month'];
		$year = $_GET['year'];
	?>
	<?php if( !empty($day) && !empty($month) && !empty($year)):?>
		<?php if( checkdate($month, $day, $year)):?>
		<?php
			$tm = mktime(0,0,0,$month, $day, $year);
			$date  = getdate($tm);
		?>
		<div>
			<?php echo $day; ?>.<?php echo $month; ?>.<?php echo $year; ?> е валидна дата и е 
			<?php echo $date['yday']; ?> ден от годината.
		</div>
		<?php else:?>
			<div>Проверете въведената дата</div>
		<?php endif;?>
	<?php endif;?>
</body>
</html>
