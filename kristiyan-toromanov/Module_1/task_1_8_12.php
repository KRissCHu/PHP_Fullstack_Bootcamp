<?php

//Creating a function that allows for a full matrix to be entered by the user.
function inputMatrix()
{
    $matrix = array();
    
    for($i = 0; $i < 3; $i++)
    {
        $count = $i + 1;
        
        echo "Please enter the elements in row number " . $count . ", separated by commas: ";
        $row = readline();
        $row = explode(",", $row);
        
        array_push($matrix, $row);

    }
    
    return $matrix;
}

//Requesting for the user to enter the elements of the first matrix.
echo "You can now enter the elements for the first matrix." . "\n";
$matrix1 = inputMatrix();
//Requesting for the user to enter the elements of the second matrix.
echo "You can now enter the elements for the second matrix." . "\n";
$matrix2 = inputMatrix();

//Creating a function that adds together the elements of two matrixes, into a new matrix.
function sumMatrix($matrix1, $matrix2)
{
    $summedMatrix = array();
    for($i = 0 ; $i < 3 ; $i++)
    {
        $newRow = array();

        for($j = 0; $j < 3; $j++)
        {
            array_push($newRow, $matrix1[$i][$j] + $matrix2[$i][$j]);
        }

        array_push($summedMatrix, $newRow);
    }
    return $summedMatrix;
}

//Creating a function that prints out a matrix.
function printMatrix($matrix)
{
    for($i = 0; $i < 3; $i++)
    {
        for($j = 0; $j < 3; $j++)
        {
            echo $matrix[$i][$j] . ", ";
        }
        
        echo "\n";
    }
}

//Applying the printing and summation functions.
printMatrix(sumMatrix($matrix1, $matrix2));

?>