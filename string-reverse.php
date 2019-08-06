<?php
	$string = 'Hi my name is vishal kumar this string must be reverse order without using any predeined function.';

	$reverse = '';
	
	echo gettype($reverse);
	echo "<hr>";
	echo gettype($string[0]);
	echo "<hr>";

	// method 1
	/*$string_length = strlen($string);
	while ($string_length > 0) {
		--$string_length;
		$reverse .= $string[$string_length];
	}*/

	// method 2
	$counter = 0;
	while (!empty($string[$counter])) {
		$reverse = $string[$counter].$reverse;
		++$counter;
	}

	echo $reverse;
?> 