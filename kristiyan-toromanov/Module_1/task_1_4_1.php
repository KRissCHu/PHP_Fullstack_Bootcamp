<?php

//Creating the year variable.
$year = readline("Enter the year you want to check: ");

//Function to check if the entered year is a leap year.
function isYearLeap($year)
{
    if($year % 100 == 0)
    {   
        if($year % 400 == 0)
        {
            echo "Yes, this is a leap year.";
        }
        else
        {
            echo "No, this is not a leap year.";
        }
    }
    elseif($year % 4 == 0)
    {
        echo "Yes, this is a leap year.";
    }
    else
    {
        echo "No, this is not a leap year.";
    }
}

echo isYearLeap($year);

?>