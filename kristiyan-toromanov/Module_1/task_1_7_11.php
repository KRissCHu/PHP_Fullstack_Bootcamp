<?php

//Creaiting the function that will check the number of taken chairs and the number of available chairs from other meetings.
function findChairs($rooms, $need)
{
    $takenChairs = array();
    
    for($i = 0; $i < count($rooms); $i++)
    {
        //Creating the people occupying chairs in other meeting rooms.
        $people = intval(substr_count($rooms[$i][0], "X", 0, strlen($rooms[$i][0])));
        
        $allChairs = intval($rooms[$i][1]);
        
        $freeChairs = $allChairs - $people;
        
        //Giving a notification that no chairs are needed.
        if($need == 0)
        {
            echo "Game On";
            echo "\n";
            return $takenChairs;
        }        
        
        if($freeChairs > $need)
        {
            array_push($takenChairs, $need);
            $need = 0;
            continue;
        }

        $need = $need - $freeChairs;
        
        array_push($takenChairs, $freeChairs);
    }

    //Giving a notification that there are not enough spare chairs.
    if($need > 0)
    {
        echo "Not enough!";
        echo "\n";
    }

    return $takenChairs;
}

//Creating a case example, with which to utilize the function.
$caseExample = findChairs([["XXXXX",6],["XXXXX", 5], ["XXXXXX",6], ["XXXXXX",9], ["XXXXXXXX", 10]], 10);

print_r($caseExample);

?>