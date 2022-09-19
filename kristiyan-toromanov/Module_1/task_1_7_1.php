<?php

//Requesting the input value for 'n'.
$n = readline("Please input the non-negative integer, whose factorial you wish to find: ");

//Finding factorial without recursive function.
/*$factorial = 1;
for($i = $n; $i >= 1; $i--){
    $factorial = $factorial * $i;
}
echo $factorial;*/

//Finding factorial with recursive function.
function findFactorial(int $n){
    if($n < 1){
        return 1;
    }else{
        return $n * findFactorial($n-1);
    }
}

echo findFactorial($n);


?>