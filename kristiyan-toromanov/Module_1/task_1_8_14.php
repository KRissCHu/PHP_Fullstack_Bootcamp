<?php

//Declaring the input and separating the different elements with ';'.
$input = "20381745, Beijing, China, Asia;1153717, Birmingham, UK, Europe;13960236, Tokyo, Japan, Asia;8918653, Mexico City, Mexico, North America;8336817, New York City, USA, North America;22000000, Mumbai, India, Asia;1281000, Sofia, Bulgaria, Europe;10290000, Seoul, Korea, Asia;27796000, Shanghai, China, Asia;14862000, Lagos, Nigeria, Africa;15154000, Buenos Aires, Argentina, South America;20485000, Cairo, Egypt, Africa;8173941, London, UK, Europe;346790, Plovdiv, Bulgaria, Europe;3979576, Los Angeles, USA, North America;15773658, Chongqing, China, Asia";
$input = explode(";", $input);

//Creating the three dimensional array that will hold the emelents of the above input.
$threeDimensions = array();

//Creating a loop, which transfers the input elements into the three dimensional array.
foreach($input as $val)
{
    $dimensionTransfer = explode(", ", $val);
    $threeDimensions[$dimensionTransfer[3]][$dimensionTransfer[2]][$dimensionTransfer[1]] = $dimensionTransfer[0];
}    

//Printing the result.
print_r($threeDimensions);

?>