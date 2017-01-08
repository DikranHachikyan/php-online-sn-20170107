<html>
	<head>
		<title>Dynamic Where Clause 1</title>
		<script type="text/javascript">
			function send( nm ,val )
			{
				var fld = document.createElement("input");
				if( fld != null )
				{
					fld.type = "text";
					fld.name = nm;
					fld.value= val;
					var frm = document.getElementById("frm");
					if ( frm != null )
					{
					
					frm.appendChild( fld );
					frm.submit();
					}
				}
			}
		</script>
	</head>
	<body>
	<pre>
	<?php
		print_r($_POST);
	?>
	</pre>
	<a href="javascript:send('pt' , 'hello')">Link</a>
			
	<form id="frm" method="POST">
	</form>
	</body>
</html>