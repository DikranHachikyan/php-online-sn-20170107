<select name="year" id="">
	<option value="0">--- Година ---</option>
	<?php for($i=2017; $i > 2000; $i--):?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
	<?php endfor;?>	
</select>