<?php

//Requesting for the user to input the array, which we will be surveying.
$numbers = readline("Please enter integers, with which to populate the array, separated with commas: ");
$numbers = explode(",", $numbers);

//Creating the function, which reviews the array for repeating numbers and checks which one is the first to repeat.
function firstRepeater($array)
{
    for($i = 0; $i < count($array); $i++)
    {
        $currentNumber = $array[$i];
    
        for($j = $i; $j < count($array); $j++)
        {
            if($i == $j)
            {
               continue;
            }

            if($currentNumber == $array[$j])
            {
               return $currentNumber;
            }
        }
    }
}

//Applying the function and printing out the results.
echo firstRepeater($numbers) . " [" . firstRepeater($numbers) . " is the first element that repeats]";

?>