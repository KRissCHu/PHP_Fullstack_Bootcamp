<?php

//Task 1_9_1_a

//Requesting for the user to input a number.
$number = readline("Please enter a number: ");


//Creating a function with constant time complexity O(1), which checks if the user input number is greater than 10.
function isGreaterThanTen($n)
{
    if($n > 10)
    {
        return "The number is greater than 10.";
    }
    else
    {
        return "The number is not greater than 10.";
    }
}

//Applying the function.
echo isGreaterThanTen($number);

//=========================================================================================================
//Task 1_9_1_b

/*
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
echo binarySearch($arrayToSearch, $number, $length, 0);*/



//=========================================================================================================
//Task 1_9_1_c

/*

//Requesting for the user to manually input an array, from which the number is to be found.
$arrayToSearch = readline("Please enter an array, whose elements are separated by commas: ");
$arrayToSearch = explode("," , $arrayToSearch);

//Requesting for the user to input the number, for which the linear search will look.
$number = readline("Please enter the number you are looking for: ");

//Creating a function with linear time complexity O(N), using a linear search.
function linearSearch($array, $n)
{
    //Creating the for loop, which drives the linear search.
    for($i = 0; $i < count($array); $i++)
    {
        //Checking to see if the current element is the number we are looking for.
        if($array[$i] == $n) return $i;
    }

    //Informing the user that the number was not found at the end of the search.
    return "The number you are looking for was not found in the array.";
}

//Applying the function. 
//echo linearSearch($arrayToSearch, $number);
*/


//=========================================================================================================
//Task 1_9_1_d 

/*

//Requesting for the user to manually input the array, which will be sorted.
$arrayToSort = readline("Please enter an array to be sorted, whose elements are separated by commas: ");
$arrayToSort = explode("," , $arrayToSort);

//Creating a function with quadratic time complexity O(N^2), by Bubble Sorting the input array.
function bubbleStort($array)
{
    for($i = 0; $i < count($array); $i++)
    {   
        for($j = 0; $j < count($array) - $i - 1; $j++)
        {
            if($array[$j] > $array[$j+1])
            {
                echo "true";
                $swap = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $swap;
            }
        }
    }
    return $array;
}

//Applying the function.
print_r(bubbleStort($arrayToSort));

*/

//=========================================================================================================
//Task 1_9_1_e

/*

//Requesting for the user to input the three numbers, which will be used to find the points that form a 3D plane.
$X = readline("Please enter the first number, whihc will be used to find the points of the plane: ");
$Y = readline("Please enter the second number, whihc will be used to find the points of the plane: ");
$Z = readline("Please enter the third number, whihc will be used to find the points of the plane: ");

//Requesting for the user to input the number that will equate to the 3D plane, which will be searched for.
$plane = readline("Please enter the number that will equate to the 3D plane: ");

//Requesting for the user to input the number of rotations of the algorithm.
$rotations = readline("Please enter the number of rotations that the algorithm should go through: ");

//Creating a function with cubic time complexity O(N^3), which finds the points of a 3D Plane and creates an array out of them.
function findPlanePoints($x, $y, $z, $common, $n)
{
    $answers = array();

    for($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j < $n; $j++)
        {
            for($k = 0; $k < $n; $k++)
            {
                if($x * $i + $y * $j + $z * $k == $common)
                {
                    array_push($answers, $i, $j, $k);
                }
            }
        }
    }
    return $answers;
}

//Applying the function.
print_r(findPlanePoints($X, $Y, $Z, $plane, $rotations));

*/

//=========================================================================================================
//Task 1_9_1_f

/*

//Requesting for the user to input the range of the search.
$range = readline("Please enter the range you wish to set for the search of a fibonacci number: ");

//Creating a function with exponential time complexity O(2^N), by finding a fibonacci number from the given range.
function fibonacciFind($n)
{
    if($n<=2)
    {
        return 1;
    }
    else
    {
        return fibonacciFind($n-1) + fibonacciFind($n-2);
    }
}

//Applying the function.
echo "The fibonacci number from the range you have set is " . fibonacciFind($range) . ".";

*/

?>