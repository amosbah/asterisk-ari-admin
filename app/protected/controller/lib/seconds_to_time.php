<?php
	function secondsToTime($seconds)
	{
		// extract hours
		$hours = floor($seconds / (60 * 60));
	 
		// extract minutes
		$divisor_for_minutes = $seconds % (60 * 60);
		$minutes = floor($divisor_for_minutes / 60);
	 
		// extract the remaining seconds
		$divisor_for_seconds = $divisor_for_minutes % 60;
		$seconds = ceil($divisor_for_seconds);
	 
		$strh = strval($hours);
		$strm = strval($minutes);
		$strs = strval($seconds);
		if (strlen($strh) == 1){
			$strh = '0' . $strh;
		}
		if (strlen($strm) == 1){
			$strm = '0' . $strm;
		}
		if (strlen($strs) == 1){
			$strs = '0' . $strs;
		}
		return $strh . ':' . $strm . ':' . $strs;
	}
	
	//echo secondsToTime(1000);
?>