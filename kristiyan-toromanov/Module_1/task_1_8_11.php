<?php

//Requesting for the user to input the numbers of the array.
$numbers = readline("Please input the numbers, which will be populating the array, separated with commas: ");
$numbers = explode(",", $numbers);

//Sorting the array.
rsort($numbers);

//Printing out the result.
echo "The three largest elements in the array are: " . $numbers[0] . ', ' . $numbers[1] . ', ' . $numbers[2];

?>