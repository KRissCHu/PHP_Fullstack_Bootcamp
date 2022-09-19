<?php

//Requesting the user to populate the array with numbers separated by commas.
$givenArray = readline("Please enter numbers into the given array, separated by commas: ");
$givenArray = explode(",", $givenArray);

//Creating the function that finds the minimum element in the array.
function findMinInArray($array)
{       
    $minimum = $array[0];
    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i] < $minimum)
        {
            $minimum = $array[$i];
        }
    }
    
    return $minimum;
}

//Creating the function that finds the maximum element in the array.
function findMaxInArray($array)
{
    $maximum = $array[0];
    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i] > $maximum)
        {
            $maximum = $array[$i];
        }
    }
    
    return $maximum;
}

    echo "The minimum of this array is " . findMinInArray($givenArray) . "\n";
    echo "The maximum of this array is " . findMaxInArray($givenArray);

?>