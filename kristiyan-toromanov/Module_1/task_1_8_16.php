<?php

//Requesting for the user to input the variable, which will act as the capstone for the indices.
$X = readline("Enter X: ");

//Creating a function, which generates a matrix with random elements between 0 and 100.
function generateRandomMatrix()
{
    $matrix = array();

    for($i = 0; $i < 4; $i++)
    {
        $row = array();
        for($j = 0; $j < 4; $j++){
            array_push($row, rand(0, 100));
        }
        array_push($matrix, $row);
    }
    return $matrix;
}

//Applying the function and creating a matrix with random elements.
$matrix = generateRandomMatrix();

//Creating a function that prints the created matrix.
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

//Creating a function, which prints the indices of the elements from the matrix.
function printIndices($matrix, $X)
{
    for($i = 0; $i < count($matrix); $i++)
    {
        for($j = 0; $j < count($matrix); $j++)
        {
            if($matrix[$i][$j] < $X) echo "[" . $i . "]" . "[" . $j . "]" . "\n";
        }  
    }
}

//Applying the random matrix generation function and printing out the result.
echo "Presenting the generated matrix: " . "\n";
printMatrix($matrix);

//Applying the function, whihc prints the indices of the matrix's elements and printing out the result.
printIndices($matrix, $X);

?>