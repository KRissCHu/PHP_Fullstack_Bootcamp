<?php

//Requesting the input of the number from the user.
$number = readline("Please enter the number, whose digit total you wish to find out: ");

//Transforming the number into a string, so that its individual components can be taken out into an array.
$number = strval($number);

//Creating the array that will hold the individual digits.
$components = array();

//Transferring the components into the array. Using strlen to get the length of the string, since the 'count' feature did not work on it.
for($i = 0; $i < strlen($number); $i++)
{
    array_unshift($components, $number[$i]);
}

//Creating the function that will find the sum of the digits.
function sumDigit($n)
{
    $sum = 0;

    for($i = 0 ; $i < count($n); $i++)
    {
        $sum += $n[$i];
    }
    
    echo $sum;
    
}

sumDigit($components);

?>