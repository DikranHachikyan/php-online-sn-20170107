<?php include_once 'inc/config.inc.php';?>
<!DOCTYPE html>
<html lang="<?php echo DEF_LANG;?>">
<head>
	<meta charset="<?php echo ENC;?>">
	<title><?php echo TITLE;?></title>
</head>
<body>
	<?php
		$tm = mktime(0,0,0,3,0,2017);
		echo $tm;
	?>
	<pre>
		<?php 
			$dt = getdate($tm);
			print_r($dt);
		?>	
	</pre>
</body>
</html>
