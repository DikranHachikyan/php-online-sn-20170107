<?php
	include_once 'config.inc.php';

	function show( $msg){
		if( empty($msg)){
			return;
		}		
		echo 'Message:'.$msg;		
	}

	function suma($a, $b){
		return $a + $b;
	}
