<?php 
	$filename = 'data.txt';
	$last = isset($_GET['timestamp']) ? $_GET['timestamp'] : 0;  //set timestamp to 0 if not set
	$current = filemtime($filename);

	while($current <= $last) {
		usleep(100000);
		clearstatcache(); //clear cache to correct results
		$current = filemtime($filename);
	}
	
	$response = array();
	$response['msg'] = file_get_contents($filename);
	$response['timestamp'] = $current;
	echo json_encode($response);	
?>