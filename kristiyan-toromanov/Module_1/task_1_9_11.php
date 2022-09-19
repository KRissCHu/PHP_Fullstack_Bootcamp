<?php

//Requesting for the user to input the array we will be sorting.
$unsortedArray = readline("Please enter a series of numbers, separated by commas: ");
$unsortedArray = explode(",", $unsortedArray);

//Creating the function, which implements the insertion sort.
function insertionSort($array)
{
    //Looping through the elements of the array.
    for ($i = 1; $i < count($array); $i++)
    { 
        $swap = $array[$i];
        $j = $i - 1;
 
        //move elements of the subarray that are greater than the key one position forward
        while ($j >= 0 && $array[$j] > $swap)
        {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
     
        $array[$j + 1] = $swap;
    }

    return $array;
}
 
//Implementing the function.
$sortedArray = insertionSort($unsortedArray);

//Printing out the results.
for($i = 0; $i < count($sortedArray); $i++)
{
    echo $sortedArray[$i]." ";
}

?>