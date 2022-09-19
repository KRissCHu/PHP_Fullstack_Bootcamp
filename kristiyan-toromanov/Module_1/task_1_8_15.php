<?php

//Requesting for the user to input the size of the matrix.
$N = readline("Please enter the integer, which will determine the size of the matrix (N*N): ");

//Creating a function, which allows the user to input the elements of the matrix.
function inputMatrix($N)
{
    $matrix = array();

    for($i = 0; $i < $N; $i++)
    {
        $count = $i + 1;

        //Requesting for the customer to enter the elements of a given row.
        $row = readline("Please enter the elements of row number " . $count . ", separated by a comma: ");
        $row = explode(",", $row);

        array_push($matrix, $row);
    }
    return $matrix;
}

//Applying the matrix input function and requesting for the customer to input the elements of the matrix.
$matrix = inputMatrix($N);

//Creating a function, which transponses the created matrix.
function transposeMatrix($matrix)
{
    for($i = 0 ; $i < count($matrix); $i++)
    {
        for($j = 0; $j < count($matrix); $j++)
        {
            $transposed[$i][$j] = 0;
            $transposed[$i][$j] = $matrix[$j][$i];
        }
    }
    return $transposed;
}

//Creating a function, which prints the created matrix.
function printMatrix($matrix)
{
    for($i = 0; $i < count($matrix); $i++)
    {
        for($j = 0; $j < count($matrix); $j++)
        {
            echo $matrix[$i][$j] . ", ";
        }
        echo "\n";
    }
}

//Applying the two functions and printing the result.
printMatrix(transposeMatrix($matrix));

?>