<?php

//Requesting the input of the n-th fibonachi number.
$n = readline("Please enter the value of the n-th fibonachi number you wish to find: ");
/*
//Recursion Solution.
function fibonachiRecursion(int $n)
{
    if($n <= 2) 
    {
        return 1;
    }
    else
    {  
         return fibonachiRecursion($n - 1) + fibonachiRecursion($n - 2);
    }
}

//Iterative loop and three values solution.
function fibonachiIterative3(int $n)
{
    $value0 = 1;
    $value1 = 0;
    $value2 = 0;
    
    while($n--)
    {
        $value2 = $value1;
        $value1 = $value0;
        $value0 = $value1 + $value2;
    }

    return $value1;
}*/


//Loop and two variables solution.
    function fibonachiLoop2($n)
    {
        $value1 = 0;
        $value2 = 1;

        while($n--)
        {
           $value2 = $value1 + $value2;
           $value1 = $value2 - $value1;
        }
        
        return $value1;
    }

echo fibonachiLoop2($n);

?>