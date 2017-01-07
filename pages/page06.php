<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$user_lang = 'bg';
		$site_langs = array('bg','en','de','fr');

		$key = array_search( $user_lang, $site_langs);

		if( $key === false ){
			echo '<div>'.$user_lang.' не се поддържа от сайта</div>';
		}
		else{
				echo '<div>'.$user_lang.' се поддържа от сайта ('.$key.')</div>';
		}
	?>
		
</body>
</html>
