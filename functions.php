<?php
	function dateFromCalendar($a){
		$b='aaaa-aa-aa';
		$b[0] = $a[6];
		$b[1] = $a[7];
		$b[2] = $a[8];
		$b[3] = $a[9];
		$b[5] = $a[0];
		$b[6] = $a[1];
		$b[8] = $a[3];
		$b[9] = $a[4];
		return $b;
	}
?>
