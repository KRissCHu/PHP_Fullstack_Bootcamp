<?php

//Requesting for the user to input the letter that will be reviewed.
$letters = readline("Please enter an array of singular letters, separated by a comma: ");
$letters = explode(",", $letters);

//Creating the function that checks the frequency of the letters' appearance in the array.
function letterFrequencyCheck($array)
{
    $result = array();
    
    //Filtering through the letters in the array and checking the number of appearances each letter makes.
    for($i = 0; $i < count($array); $i++)
    {
        $current = $array[$i];
        $appearances = 1;
    
        for($j = 0; $j < count($array)-1; $j++)
        {
            if($i == $j)
            {
                continue;
            }

            if($current == $array[$j])
            {
                $appearances++;
            }
        }

        $result[$current] = $appearances;
        $appearances = 0;
    }

    echo "The most common letter is "."'".array_search(max($result), $result)."'".". It has been used ". max($result). " times.";  
}

//Applying the function.
letterFrequencyCheck($letters);

?>