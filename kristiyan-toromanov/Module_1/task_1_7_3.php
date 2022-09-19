<?php

//Requesting the input of the original array's elements.
$originalArray = readline("Please enter the variables, whose elements you wish to reverse, sepparated by commas: ");
$originalArray = explode(",", $originalArray);

//Creating a function to reverse the original array.
function reversal(array $initialArray)
{
    $reversedArray = array();
    $startingArraySize = sizeof($initialArray); //I initially did not use such a variable, instead trying to use $i < count/sizeof($initialArray) in the for loop itself, but only kept getting the last few results flipped. I then realized that in each loop the array_pop was reducing the size of the array, resulting in the count/sizeof variable in the for loop statement to get changed, which was causing the error. Due to that I am adding this variable here.

    for($i = 0; $i < $startingArraySize; $i++)
    {
        array_push($reversedArray, array_pop($initialArray));
    }

    return $reversedArray;
}

print_r(reversal($originalArray));

?>