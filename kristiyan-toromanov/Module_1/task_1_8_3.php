<?php

//Creating a function, which checks for prime numbers.
function primeChecker($number)
{
   if($number == 1)
   {
       return 0;
   }

   for($i = 2; $i <= $number/2; $i++)
   {
        if($number % $i == 0)
        return 0;
   }

   return 1;
}

//Using the function in a for loop that rotates 100 times to pick out and output the prime numbers between 1 and 100.
for($number = 1; $number <= 100; $number++)
{
	$checker = primeChecker($number);

    if($checker == 1)
    {
		echo $number." ";
	}	
}  
?>