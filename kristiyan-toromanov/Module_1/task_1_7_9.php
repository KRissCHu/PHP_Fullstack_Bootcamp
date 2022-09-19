<?php

//Requesting the input of the variables we will work with, while making sure that the m variable has more numbers than the n variable value.
do
{
  
    $n = readline("Please enter the 'n' amount of numbers: ");
    $m = readline("Please enter the 'm' list of numbers, separated by comma. The amount of numbers you enter must be greater than the value of 'n': ");
    $m = explode(",", $m);

}
while($n > count($m));

//Creating the function, which will sort the permutations of n out of m and prints them out.
function lottery($array,$frontSide,$frontPosition)
{
    if($frontSide == 1)
    {
        for($i=0; $i < count($array); $i++)
        {
            echo $frontPosition . ',';
            echo $array[$i];
            echo "\n";
        }
    }
    else
    { 
        for($i=0; $i < count($array); $i++)
        {
            $secondaryArray = $array;
            unset($secondaryArray[$i]);
            $secondaryPosition = $frontPosition;
            $secondaryPosition .= $array[$i];
            lottery(array_values($secondaryArray), $frontSide - 1, $secondaryPosition);
        }
    }

}

//Declaring the empty space, meant to serve as the initial position and calling the function, in order to print the result.
$initialPosition = '';
lottery($m,$n,$initialPosition);

?>