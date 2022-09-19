<?php

//Requesting the input of the matrix size and ensuring that the correct number is entered.
do
{
    $matrixSize = readline("Please enter the size of the matrix. It's size must be between 2 and 10: ");
}
while($matrixSize < 2 || $matrixSize > 10);

//Creating the matrix array.
$matrix = array();


//Requesting the input of the matrix rows.
for($i = 0; $i < $matrixSize ; $i++)
{
    echo "Enter row numer ".($i+1).": ";

    $row = readline();
    $row = explode(",", $row);
    $row = array_slice($row, 0, $matrixSize);
    array_push($matrix, $row);
}

//Calculating the total sum of the matrix's rows and displaying it.
for($j=0; $j < sizeof($matrix); $j++)
{

    $rowSum = 0;

    for($k=0; $k < sizeof($row); $k++)
    {
        $rowSum += $matrix[$j][$k];
    }

    echo $rowSum;
    echo "\n";
}

?>