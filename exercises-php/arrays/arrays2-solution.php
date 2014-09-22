<?php
/*
Arrays exercise 2 - solution

2014-09-22
*/

/*
Given an array of integers as parameter, find and output the mean and the 
median of the parameter array.
- The mean is the average of the numbers. 
- The median can be found by sorting the numbers and picking the middle one 
  (e.g., the median of {3, 3, 5, 9, 11} is 5). If there is an even number of 
  numbers, then there is no single middle value; the median is then computed as 
  the mean of the two middle values (the median of {1, 5, 7, 9} 
  is (5 + 7) / 2 = 6).

For example,
	$numbers = array(1, 5, 7, 9);
	meanAndMedian($numbers);
should output
	mean =  5.5
	median = 6 
*/

$numbers = array(1, 5, 7, 9);

function meanAndMedian($numbers) {
	$mean = 0;
	$median = 0;
	
	// compute them only if the array is non-empty
	if (count($numbers) > 0) {
		// mean
		$sum = 0;
		for ($i = 0;$i < count($numbers); $i++) {
			$sum += $numbers[$i];
		}
		$mean = $sum / count($numbers);
		
		// median		
		sort($numbers); // sort numbers first
		if (count($numbers) % 2 == 1) { // odd number of numbers
			$middle = floor(count($numbers) / 2); // need to be rounded down
			$median = $numbers[$middle];
		}
		else { // even number of numbers
			$middle = count($numbers) / 2; // no rounding needed
			$median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
		
		}
	}
	
	
	echo "mean = " . $mean . "\n";
	echo "median = " . $median . "\n";
	
} 

meanAndMedian($numbers);

?>
