<?php

//Requesting for the user to input the N sum that will be searched for.
$N = readline("Please enter the number, which will be the sum that the program searches for: ");

//Requesting for the user to input the array from which we will be searching for the number of times the sum N appears.
$numbers = readline("Enter array, separate ints with commas: ");
$numbers = explode(",", $numbers);

//Creating the function that finds the pairs that form the sum and counts their number.
function sumFinder($n, $array)
{
    $pairs = 0;

    for($i = 0; $i< count($array); $i++)
    {
        $currentNumber = $array[$i];
     
        for($j = 0; $j < count($array); $j++)
        {

            if($i == $j)
            {
                continue;
            }

            if(($currentNumber + $array[$j]) == $n)
            {
                $pairs++;
            }

        }
    }

    return ceil($pairs / 2);
}

//Applying the function and printing out the result.
echo "The array contains " . sumFinder($N, $numbers) . " pairs that add up to the total of " . $N . '.';

?>