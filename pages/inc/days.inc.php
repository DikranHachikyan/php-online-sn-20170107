<select name="day" id="">
	<option value="0">--- Дата ---</option>
	<?php for($i=1; $i <= 31; $i++):?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
	<?php endfor;?>	
</select>