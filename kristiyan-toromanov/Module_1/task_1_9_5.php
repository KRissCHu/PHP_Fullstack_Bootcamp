<?php

//Creating a string array, consisting of the names of Princess Anna's friends'.
$friends = array("Lea", "Katya", "Raya", "Mariya", "Valentina");

//Creating a function, which generates the desired schedule.
function scheduleGeneration($array)
{
    //Declaring an array variable, which will hold the generated schedule.
    $schedule = array();

    for($i = 0; $i < count($array); $i++)
    {
        //Declaring an array that will hold the temporary components as they are assembled by the algorithm.
        $temporaryHolding = array_slice($array, 2, count($array));
        
        //Creating the algorithm itself.
        for($j = 0;$j < count($temporaryHolding); $j++)
        {
            $pairings = array();

            array_push($pairings, $array[0], $array[1]);

            $current = $temporaryHolding[$j];

            array_push($pairings, $current);

            sort($pairings);

            if(!in_array($pairings, $schedule))
            {
                array_push($schedule, $pairings);

                unset($pairings);
            }

        }
        array_push($array, array_shift($array));

        unset($pairings);
    }
    return $schedule;
}

//Applying the function.
$finalAnswer = scheduleGeneration($friends);

//Printing out the results.
for($i = 0; $i < count($finalAnswer); $i++)
{
    echo implode(", ", $finalAnswer[$i])."\n";
}

?>