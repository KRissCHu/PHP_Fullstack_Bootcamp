<?php

//Requesting the input of the list of integers that is to be sorted.
$sortingList = readline("Please enter a list of integer numbers, separated by commas: ");
$sortingList = explode(",", $sortingList);

//Creating the function that will sort the list.
function sorting($listToSort)
{
    for($i = 0; $i < count($listToSort); $i++)
    {    
        for($j = 0; $j < count($listToSort) - 1; $j++)
        {
            if($listToSort[$j] > $listToSort[$j+1])
            {
               $holder = $listToSort[$j];
               $listToSort[$j] = $listToSort[$j+1];
               $listToSort[$j + 1] = $holder;
            }
        }
    }

    return $listToSort;
}

//Printing the sorted result.
print_r(sorting($sortingList));

?>