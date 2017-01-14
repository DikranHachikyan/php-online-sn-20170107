<?php
	$months = array(1=>'Jan','Feb','Mar','Apr','May','Jun','Jul','Avg','Sep','Oct','Nov','Dec');	
?>
<select name="month" id="">
	<option value="0">--- Месец ---</option>
	<?php for($i=1; $i <= 12; $i++):?>
		<option value="<?php echo $i;?>"><?php echo $months[$i];?></option>
	<?php endfor;?>	
</select>