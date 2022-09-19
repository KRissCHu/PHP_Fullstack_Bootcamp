<?php

    //Requesting the input of the array values.
    $numbersArray = readline("Please enter integer numbers, sepparated by commas: ");
	$numbersArray = explode(",", $numbersArray);
    
    //Obtaining the number of elements in the array, for the purpose of looping.
    $numberCount = sizeof($numbersArray)-1;
    
    //Variable used for next element in the array.
    $j=1;

    //Sorting the numbers.
    sort($numbersArray);
    
    //Checking the array for duplicate numbers and removing them.
    for($i = 0;$i < $numberCount; $i++)
    {
        if($numbersArray[$i] == $numbersArray[$j])
        {
            unset($numbersArray[$i]);
        }
        $j++;
    }

    print_r($numbersArray);

?>