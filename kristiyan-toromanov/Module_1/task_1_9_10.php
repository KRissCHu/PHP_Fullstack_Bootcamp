<?php

//Requesting for the user to input the array we will be sorting.
$unsortedArray = readline("Please enter unsorted numbers, separated by commas: ");
$unsortedArray = explode(",", $unsortedArray);

//Creating the bubble sort function.
function bubbleSort($array)
{
    //Looping through the given array.
    for($i = 0; $i < count($array); $i++)
    {
        //Looping through the remainder of the array in the current loop iteration, while ignoring the numbers that are already in the correct position.
        for($j = 0; $j < count($array) - $i - 1; $j++)
        {
            //Swapping the positions of the current element and the one in front of it, if the one in front of it is lesser than the current element.
            if($array[$j] > $array[$j+1])
            {
                $swap = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $swap;
            }
        }
    }
    return $array;
}

//Applying the function in order to sort the input array.
$sortedArr = bubbleSort($unsortedArray);

//Printing out the results.
for($i = 0; $i < count($sortedArr); $i++)
{
    echo $sortedArr[$i]." ";
}

?>