<?php

//Reuqesting for the user to input a number N between 1 and 100.
$N = readline("Please enter a number, which if between 1 and 100: ");

//Declaring an array that holds the colors for the socks.
$colors = array("red" => 1, "green" => 2, "blue" => 3);

//Declaring the socks array.
$socks = array();

//Creating a while loop, that fills the socks array with randombly colored socks, until it reaches a size of 2*N.
while(count($socks) < 2*$N)
{
    $color = array_rand($colors);
    array_push($socks, $color);
    array_push($socks, $color);
}

//Creating a function that prints the sock pairs we generate.
function printPairs($array, &$iterations)
{
    for($i = 0; $i < count($array)/2; $i++)
    {
        echo $array[$i] . ", " . $array[$i+1] . "\n";

        $iterations++;
    }
    return $iterations;
}

//Creating a function that finds pairs of socks.
function findPair($array)
{
    $iterations = 0;

    $redPile = array();
    $greenPile = array();
    $bluePile = array();

    foreach ($array as $val)
    {
        if($val == "red")
        {
            array_push($redPile, $val);
        }

        if($val == "green")
        {
            array_push($greenPile, $val);
        }

        if($val == "blue")
        {
            array_push($bluePile, $val);
        }

        $iterations++;
    }
    
    //Applying the function to print out the pairs that have been generated.
    printPairs($redPile, $iterations);
    printPairs($greenPile, $iterations);
    printPairs($bluePile, $iterations);
    
    //Printing out the number of iterations.
    echo $iterations . "\n";
}

//Applying the function that generates pairs, using the socks array.
findPair($socks);

//Printing out the complexity of the solution.
echo "The solution used's is of a O(3N) time complexity.";

?>