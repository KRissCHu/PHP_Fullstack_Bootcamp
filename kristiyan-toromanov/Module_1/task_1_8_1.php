<?php

//Declaring the array of people as per the task example.
$personArr = array('First name' => 'Boyko', 'Second name' => 'Metodiev', 'Family name' => 'Borisov', 'Age' => '62', 'Occupation' => 'Unemployed');

//Printing out the keys of the array and their value as per the task example.
foreach($personArr as $key => $value)
{
    echo $key . " - ". $value;
    echo "\n";
}

?>