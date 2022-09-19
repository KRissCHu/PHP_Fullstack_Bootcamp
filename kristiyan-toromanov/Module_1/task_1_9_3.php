<?php

//Requesting for the user to manually input a sorted array, from which the number is to be found.
$arrayToSearch = readline("Please enter an ascendantly sorted array, whose elements are separated by commas: ");
$arrayToSearch = explode("," , $arrayToSearch);

//Requesting for the user to input the number, for which the binary search will look.
$number = readline("Please enter a number you would like to find in the array: ");

//Obtaining the length of the array as a variable.
$length = count($arrayToSearch);

//Creating a function with logarithmic time complexity O(logN), using Binary Search.
function binarySearch($array, $n, $length, $start)
{
    //Implementing a variable, which serves as a counter for the number of iterations taken until the final result was found.
    $counter = 1;

    while ($start <= $length)
    {
        //Determining the middle.
        $mid = $start + ($length - $start) / 2;
  
        //If the sought after number is at the middle, the answer has been found and we return it.
        if ($array[$mid] == $n)
        {
            return "The sought after number " . $array[$mid] . " was found in the array after " . $counter . " iterations of the function.";
        }

        //If the sought after number is greater than the number at the middle, we continue the search using only the right part of the array.
        if ($array[$mid] < $n)
        {
            $start = $mid + 1;
        }
        else //If the sought after number is lesser than the number at the middle, we continue the search using only the left part of the array.
        {
            $length = $mid - 1;
        }

        $counter++;
    }

    //Informing the user that the number was not found at the end of the search.
    return "The number you are looking for was not found in the array. This result was discovered after " . $counter . " iterations of the function.";
}    


//Applying the function.
echo binarySearch($arrayToSearch, $number, $length, 0);

?>