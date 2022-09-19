<?php

//Requesting for the user to manually input an array, from which the number is to be found.
$arrayToSearch = readline("Please enter an array, whose elements are separated by commas: ");
$arrayToSearch = explode("," , $arrayToSearch);

//Requesting for the user to input the number, for which the linear search will look.
$number = readline("Please enter the number you would like to find: ");

//Creating a function with linear time complexity O(N), using a linear search.
function linearSearch($array, $n)
{
    //Implementing a variable, which serves as a counter for the number of iterations taken until the final result was found.
    $counter = 1;

    //Creating the for loop, which drives the linear search.
    for($i = 0; $i < count($array); $i++)
    {
        //Checking to see if the current element is the number we are looking for.
        if($array[$i] == $n)
        {
            return "It took " . $counter . " iterations of the function in order to locate " . $n . ".";
        }

        //Increasing the counter.
        $counter++;
    }

    //Informing the user that the number was not found at the end of the search.
    return "The number you are looking for was not found in the array. This result was discovered after " . $counter . " iterations of the function.";
}

//Applying the function.
echo linearSearch($arrayToSearch, $number);

?>