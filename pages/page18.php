<?php include_once 'inc/config.inc.php';?>
<?php include_once 'inc/functions.inc.php';?>
<?php include_once 'inc/functions.inc.php';?>
<!DOCTYPE html>
<html lang="<?php echo DEF_LANG;?>">
<head>
	<meta charset="<?php echo ENC;?>">
	<title><?php echo TITLE;?></title>
</head>
<body>
	<div><?php show('');?></div>
	<div><?php show('Hello PHP');?></div>
	<div>Result:<?php echo suma(5,6);?></div>

	<ul>
		<?php
			$i=1;
			while( $i < 5):
		?>
		<?php include './inc/li.inc.php';?>
		<?php
				$i++;
			endwhile;
		?>
	</ul>
	
</body>
</html>
