<?php

//Requesting the input of the string variable.
$input = readline("Enter the word you wish to check: ");

//Creating a function to check if the input word is a palindrome.
function palindromeConfirmation(string $reviewed)
{
    $reviewed = mb_strtolower($reviewed);

    $checker = $reviewed;
    $checker = strrev($checker);

    if($reviewed == $checker)
    {
        return "Yes";
    }
    else
    {
        return "No";
    }

}

echo palindromeConfirmation($input);

?>