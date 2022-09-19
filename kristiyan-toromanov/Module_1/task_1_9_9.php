<?php

//Requesting for the user to input the array, which we will be sorting.
$unsortedArray = readline("Please enter an unsorted list of numbers, separated by commas: ");
$unsortedArray = explode(",", $unsortedArray);


function selectionSort($array)
{
    //Creating a loop through the array.
    for($i = 0; $i < count($array); $i++)
    {
        //Getting the indect of the current minimal element in the goven array.
        $min = $i;

        //Looping through the rest of the array in the current loop.
        for($j = $i + 1; $j < count($array); $j++)
        {
            //Updating the minimal value if an element lesser than the current minimal element is found.
            if ($array[$j] < $array[$min])
            {
                $min = $j;
            }
        }
        
        //Placing the current minimal element at the beginning of the current subarray.
        if ($array[$i] > $array[$min])
        { 
            $swap = $array[$i];
            $array[$i] = $array[$min];
            $array[$min] = $swap;
        }

    }

    return $array;
}

//Applying the function.
$sortedArray = selectionSort($unsortedArray);

//Printing the resuls.
for($i = 0; $i < count($sortedArray); $i++)
{
    echo $sortedArray[$i]." ";
}

?>