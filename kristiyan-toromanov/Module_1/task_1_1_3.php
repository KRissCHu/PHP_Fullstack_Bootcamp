<?php

//Creating a break constant, for ease of use:
    const BR = '<br />';

//Creating variables of different Scalar types:
    $string = 7; //Integer
    $integer = 1.234; //Float
    $float = "I float."; //String

//Displaying the Scalar types of the variables:
    echo gettype($string).BR;
    echo gettype($integer).BR;
    echo gettype($float).BR;

?>