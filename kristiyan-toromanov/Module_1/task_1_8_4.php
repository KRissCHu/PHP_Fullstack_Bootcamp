<?php

//Requesting for the user to enter the desired number, from which to begin the countdown.
$X = readline("Please enter the number, from which the countdown will begin: ");

//Creating the recursive function that implements the countdown.
function countdown($X)
{
    if($X == 0) 
    {
        return 0;
    }
    
    echo "Number is ". $X. "\n";

    countdown($X-1);
}
    
countdown($X);

?>