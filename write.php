<?php 
	$msg = $_GET['msg'];
	$handle = fopen('data.txt', 'a');
	fwrite($handle, $msg);
	fclose($handle);
	exit;	
?>