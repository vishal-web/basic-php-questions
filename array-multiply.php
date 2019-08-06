<?php
	$array = [1, 2, 3, 4];

	$new_array = [];
	for ($i=0; $i < count($array); $i++) { 
		$calculate = 1;
		for($j=0; $j < count($array); $j++) {
			if ($array[$i] !== $array[$j]) {
				$calculate *= $array[$j]; 
			}
		}
		$new_array[$i] = $calculate;
	}

	echo '<pre>';
	print_r($new_array);
	echo '</pre>';
?>