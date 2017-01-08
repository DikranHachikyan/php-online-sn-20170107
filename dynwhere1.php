<html>
	<head>
		<title>Dynamic Where Clause 1</title>
	</head>
	<body>
	<form method="GET" action="">
	<fieldset style="width:200px;">
		<label><input type="checkbox" value="ALFKI" name="cid[]" />ALFKI</label><br />
		<label><input type="checkbox" value="BOLID" name="cid[]" />BOLID</label><br />
		<label><input type="checkbox" value="ANATR" name="cid[]" />ANATR</label><br />
		<label><input type="checkbox" value="PARIS" name="cid[]" />PARIS</label><br />
		</fieldset>
		<input type="submit" value="View" />
	</form>
	<?php
		$ids = $_GET['cid'];
		if( !empty( $ids) && is_array($ids) && count($ids) > 0  ):
		
			$w = implode( "','" , $ids ); // ALFKI','BOLID','PARIS
			$sql = "select customerid, companyname, contactname
							from customers 
							where customerid in ( '".$w."' )";
	?>
			<div style="font-weight:bold;color:#F00">SQL Request: <?=$sql;?><div>
	<?php endif; ?>
	</body>
</html>
