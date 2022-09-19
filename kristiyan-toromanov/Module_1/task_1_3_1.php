<?php

const BR = '<br />';

$height = readline("Enter your height here: ");
$sex = readline("Enter your sex (M/F) here: ");
$idealWeight = calculateIdealWeight($height, $sex);
echo "Your ideal weight is " . $idealWeight;

function calculateIdealWeight(int $height, string $sex){

    if($sex == 'M')
    {
        return $height - 100;
    }
    if($sex == 'F')
    {
        return $height - 110;
    }
    else
    {
        return "Incorrect data entered. Please try again.";
        
    }

}

?>