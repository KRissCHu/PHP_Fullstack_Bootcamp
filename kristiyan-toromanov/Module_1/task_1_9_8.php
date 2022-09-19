<?php

//Creating a function, which checks if the year that is being reviewed is a leap year.
function leapYearCheck($year)
{
    if($year % 4 == 0)
    {
        if($year % 100 == 0)
        {
            if($year % 400 == 0)
            {
                return true;
            }
            return false;
        }
    	return true;
    }
    else
    {
    	return false;
    }
}

//Creating the function, which generates EGN numbers.
function generatingEGN()
{
    $egeneta = array();
    
    while(count($egeneta) < 50)
    {
        //Creating the EGN variable, which will hold the numbers.
        $egn = array();

        //Adding the year to the number.
        array_push($egn, rand(0, 9));
        array_push($egn, rand(0, 9));

        if($egn[0] == 0)
        {
            $year = $egn[0].$egn[1] + 2000;
        }
        else
        {
            $year = $egn[0].$egn[1] + 1900;
        }

        //Generating a random month.
        $mesec = rand(1, 12);

        //Using the function, with which the month is checked to generate a day.
        $day = checkMonth($mesec, $year);

        //Years, which begin with 0 are after 1999.
        if($egn[0] == 0)
        { 
            $mesec = $mesec + 40;
        }
        else
        {
            $mesec = rand(1, 12);
        }

        //Adding the month to the egn number.
        if($mesec < 10)
        {
            array_push($egn, 0);
            array_push($egn, $mesec);
        }
        else
        {
            array_push($egn, intval(substr(strval($mesec),0,1)));
            array_push($egn, intval(substr(strval($mesec),1,strlen(strval($mesec)))));
        }
        
        //Adding the day to the egn number.
        if($day < 10)
        {
            array_push($egn, 0);
            array_push($egn, $day);
        }
        else
        {
            array_push($egn, intval(substr(strval($day),0,1)));
            array_push($egn, intval(substr(strval($day),1,strlen(strval($day)))));
        }
        
        //Adding the identification number of the city to the egn number.
        array_push($egn, rand(0, 9));
        array_push($egn, rand(0, 9));

        //Determining the eng owner's gender and adding that to the egn number.
        do
        {
            $gender = rand(0,9);
        }
        while($gender % 2 == 0);

        array_push($egn, $gender);

        //Applying the controlNumber function in order to add the control number of the egn number.
        array_push($egn, controlNumber($egn));

        array_push($egeneta, $egn); 
    }

    //Returning the generated egn numbers.
    return $egeneta;
}

//Creating a function that generates the control number for the egn number
function controlNumber($egn)
{
    $weights = array(2, 4, 8, 5, 10, 9, 7, 3, 6);
    $sum = 0;
    for($i = 0; $i < count($weights); $i++)
    {
        $sum += $weights[$i] * $egn[$i];
    }

    $rem = $sum % 11;

    if($rem < 10 )
    {
        return $rem;
    }
    else
    {
        return 0;
    }
}

//Creating a funciton, which checks the birth month.
function checkMonth($month, $year)
{
    $day = 0;

    switch($month)
    {
        case 1:
            $day = rand(1,31);
            break;
        case 2:
            if(leapYearCheck($year))
            {
                $day = rand(1, 29);
            }
            else
            {
                $day = rand(1, 28);
            }
            break;
        case 3:
            $day = rand(1,31);
            break;
        case 4:
            $day = rand(1,30);
            break;
        case 5:
            $day = rand(1,31);
            break;
        case 6:
            $day = rand(1,30);
            break;
        case 7:
            $day = rand(1,31);
            break;
        case 8:
            $day = rand(1,31);
            break;
        case 9:
            $day = rand(1,30);
            break;
        case 10:
            $day = rand(1,31);
            break;
        case 11:
            $day = rand(1,30);
            break;
        case 12:
            $day = rand(1,31);
            break;
    }
    return $day;
}

//Applying the function to generate the desired egn numbers.
$egnNumbers = generatingEGN();

//Pringitng out the results.
for($i = 0; $i < count($egnNumbers); $i++)
{
    echo implode("", $egnNumbers[$i])."\n";
}

?>