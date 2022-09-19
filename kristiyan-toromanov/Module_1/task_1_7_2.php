<?php

//Request the input of the variables, whose average will be found.
$variables = readline("Please enter the variables, whose average you wish to find, sepparated by commas: ");
$variables = explode(",", $variables);

//Declaring the summation variable that will hold the combined value of the variables.
$sum = 0;

//Finding the average of the variables.
for($i = 0; $i < count($variables); $i++)
{
    $sum += $variables[$i];
}

echo($sum / count($variables));

?>