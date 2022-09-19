<?php

//Requesting for the user to enter the numbers for the one dimensional array.
$oneDimension = readline("Please enter the numbers that will populate the one dimensional array, separated by commas: ");
$oneDimension = explode(",", $oneDimension);

//Creating the function that transforms the one dimensional array into a multy dimensional one, based on the number of digits in each element.
function dimensionTransfer($array)
{
    //Declaring the multy dimensional array.
    $multyDimensional = array("1" => array(), "2" => array(), "3" => array());
    
    for($i = 0; $i < count($array); $i++)
    {
        //Creating the section that holds single digit numbers.
        if(strlen($array[$i]) == 1) 
        {
            array_push($multyDimensional["1"], intval($array[$i]));
        }

        //Creating the section that holds double digit numbers.
        if(strlen($array[$i]) == 2)
        {
            array_push($multyDimensional["2"], intval($array[$i]));
        }

        //Creating the section that holds tripple digit numbers.
        if(strlen($array[$i]) == 3)
        {
            array_push($multyDimensional["3"], intval($array[$i]));
        }
    }

    return $multyDimensional;
}

//Applying the function and printing the results.
print_r(dimensionTransfer($oneDimension));

?>