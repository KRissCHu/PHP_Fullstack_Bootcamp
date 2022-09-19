<?php

//Creating a global variable, which can be called and used everywhere in the program.
$GLOBALS["fCalls"] = 0;


//Requesting for the user to manually input a sorted array, from which the number is to be found.
$arrayToSearch = readline("Please enter an ascendantly sorted array, whose elements are separated by commas: ");
$arrayToSearch = explode("," , $arrayToSearch);

//Requesting for the user to input the number, for which the binary search will look.
$number = readline("Please enter a number you would like to find in the array: ");

//Creating the binary search function, which looks up the desired number from the input array.
function binarySearch($array, $num, $start, $length)
{
    //The global variable keeping track of the number of times the function has been called.
    $GLOBALS["fCalls"]++;

    //Determining the middle.
    if ($length >= $start)
    {
        $mid = ceil($length + ($start - $length) / 2);
        
        //Directly printing out the result, if the sought after number is the starting middle.
        if ($array[$mid] == $num)
        {
            return "The sought after number " . $array[$mid] . " was found in the array using " . $GLOBALS["fCalls"] . " function calls.";
        }
        else if($array[$mid] > $num) //If the sought after number is lesser than the middle, we disregard the right half of the array and continue the search with the left one.
        {
            return binarySearch($array, $num, $start, $mid - 1); 
        }
        else //If the sought after number is greater than the middle, we disregard the left half of the array and continue the search with the right one.
        {
            return binarySearch($array, $num, $length, $mid + 1); 
        }
    }
    
    
    //Informing the user that the number was not found at the end of the search.
    return "The number you are looking for was not found in the array. It took " . $GLOBALS["fCalls"] . " function calls for this result to be discovered.";
    
}
  
//Applying the function.
binarySearch($arrayToSearch, $number, 0, count($arrayToSearch));

//Printing out the results.
echo "The sought after number was found using " . $fCalls." function calls.";

?>
