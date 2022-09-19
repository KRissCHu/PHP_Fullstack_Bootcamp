<?php

//Creating the function that solves the game.
function is_solved($boardArray)
{   
    //Creating the game and board.
    $game = array();

    $leftDiagonal = array();
    array_push($leftDiagonal, $boardArray[0][0], $boardArray[1][1], $boardArray[2][2]);
    
    $rightDiagonal = array();
    array_push($rightDiagonal, $boardArray[0][2], $boardArray[1][1], $boardArray[2][0]);
    
    array_push($game, $boardArray[0], $boardArray[1], $boardArray[2], array_column($boardArray, 0), array_column($boardArray, 1), array_column($boardArray, 2), $leftDiagonal, $rightDiagonal);
    
    
    //Checking the status of the game.
    for($i = 0; $i < count($game); $i++)
    {
        if(in_array(1, $game[$i]))
        {
            if(array_count_values($game[$i])[1] == 3) return 1; //Output if 'X' won the game.
        }
        if(in_array(2, $game[$i]))
        {
            if(array_count_values($game[$i])[2] == 3) return 2; //Output if 'O' won the game.
        }
        
    }
    for($i = 0; $i < count($game); $i++)
    {
        if(in_array(0, $game[$i]))
        {
            if(array_count_values($game[$i])[0] > 0) return -1; //Output if the game is not yet finshed.
        }
        
    }
    
    return 0; // Output if the game is a draw.
    
}

//Creating example games to test the function.
//Draw.
echo is_solved([
        [1, 2, 1],
        [1, 1, 2],
        [2, 1, 2]
]);
echo "\n";

//Victory for 'X'.
echo is_solved([
    [1, 0, 1],
    [1, 1, 2],
    [2, 1, 1]
]);
echo "\n";

//Victory for 'O'.
echo is_solved([
    [1, 2, 0],
    [1, 1, 2],
    [2, 2, 2]
]);
echo "\n";

//Unfinished game.
echo is_solved([
    [0, 0, 0],
    [1, 1, 2],
    [2, 1, 2]
]);

?>