<?php

//Increasing the memory limit to 1030 megabytes, as I kept getting a Fatal Error message that the program was exceeding the allowed limit by PHP. 1030 megabytes is the minimum, which allows me to enter a 6 symbol password(abcdef) as an example.
ini_set('memory_limit', '1030M');

//Requesting for the user to input the password that the algorithm will try to find.
do
{
    $password = readline("Please enter a password not longer than 6 symbols, which must only contain lower case letters: ");
}
while(strlen($password) > 6 || strlen($password) <= 0 || is_numeric($password));

//Creating the function that will find the password.
function findPassword($password)
{
    $letterRange = range("a", "z");
    $size = count($letterRange);
    $combinations = 0;
    $array = array_fill(0, 1, "");
    
    while(true)
    {
        for($i = 0; $i < count($array); $i++)
        {
            for($j = 0; $j < $size; $j++)
            {
                if($array[$i].$letterRange[$j] == $password)
                {
                    return $combinations;
                }
                else
                {
                    array_push($array, $array[$i].$letterRange[$j]);
                    $combinations++;
                }
            }
            
        }
    }
}

//Applying the function and printing out the result.
echo "Password '". $password . "' was found with " . (findPassword($password)+1) . " combinations.";

?>