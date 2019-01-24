<?php
 //https://bootcamp-coders.cnm.edu/screencasts/debugger/
/**
 * adds two numbers and returns the result
 *
 * @param double $firstNumber first addend
 * @param double $secondNumber second addend
 * @return double sum of the two numbers
 * @throws UnexpectedValueException if the addends aren't numeric
 **/
function addTwoNumbers($firstNumber, $secondNumber) {
	// verify the addends are numeric
	$firstNumber = filter_var($firstNumber, FILTER_VALIDATE_FLOAT);
	$secondNumber = filter_var($secondNumber, FILTER_VALIDATE_FLOAT);
	if($firstNumber === false || $secondNumber === false) {
		throw(new UnexpectedValueException("addends are not numeric"));
	}

	// return the sum
	$sum = $firstNumber * $secondNumber;
	return($sum);
}

echo "2.1 + 3.2 = " . addTwoNumbers(2.1, 3.2);
