<?php

//Requesting for the user to enter the two strings.
$firstString = readline("Please enter the first string: ");
$secondString = readline("Please enter the second string: ");

//Creating the function that checks the strings for matching substrings.
function longestSubstringMatch($firstString, $secondString)
{
    //Declaring the variable that will hold the matching substring.
    $match = '';

    for($i = 0; $i < strlen($firstString); $i++)
    {
        for($j = strlen($firstString) - $i; $j > 0; $j--)
        {
            //Obtaining the substring from the first one entered.
            $substring = substr($firstString, $i, $j);
            
            //Checking whether the substring exists in the second one and if it is longer than the previously obtained substring.
            if (strpos($secondString, $substring) !== false && strlen($substring) > strlen($match))
            {        
                $match = $substring;
                break;
            }
        }
    }
        return $match;
}
 
//Printing out the result.
echo "The longest common substring is ".'"'.longestSubstringMatch($firstString, $secondString).'"';

?>