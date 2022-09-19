<?php

//Requesting the user to populate the first array with numbers separated by commas.
$firstArray = readline("Please enter the numbers for the first array, separated by commas: ");
$firstArray = explode(",", $firstArray);

//Requesting the user to populate the second array with numbers separated by commas.
$secondArray = readline("Please enter the numbers for the second array, separated by commas: ");
$secondArray = explode(",", $secondArray);

//Creating the function that checks and prints the elements that exist in both arrays.
function checkIntersection($array1, $array2)
{ 
    //Creating an array that will hold the matching numbers from the two other arrays.
    $matches = array();

    for($i = 0; $i < count($array1); $i++)
    {
        $currentNumber = $array1[$i];
        
        for($j = 0; $j < count($array2); $j++)
        {
            if($currentNumber == $array2[$j])
            {
                array_push($matches, $currentNumber);
            }
        }
    }
    
    return $matches;
}

//Applying the function and printing out the result.
echo implode(',', checkIntersection($firstArray, $secondArray));

?>