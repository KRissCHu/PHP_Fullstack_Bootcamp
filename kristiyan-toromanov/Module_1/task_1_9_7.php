<?php

//Requesting for the customer to input the type of cards he wants to generate.
$cards = readline("Please enter the type of cards you wish to generate, either a Visa or a MasterCard: ");

//Creating a function, which generates 50 credit card numbers from the type that was input.
function creditCardGenerator($type)
{
    $creditCards = array();
    
    while(count($creditCards) < 50 )
    {
        $temporaryNumber = array();
        
        if($type == "Visa" || $type == "VISA")
        {
            array_push($temporaryNumber, 4);
        } 
        if($type == "MasterCard" || $type == "MASTERCARD")
        {
            echo "in";
            array_push($temporaryNumber, 5);
            array_push($temporaryNumber, rand(1, 5));
        }
        

        while(count($temporaryNumber) < 16)
        {
            array_push($temporaryNumber, rand(0, 9));
        }

        if(validatingNumber($temporaryNumber))
        {
            $string = implode("", $temporaryNumber);
            array_push($creditCards, $string);
        }
        else
        {
            continue;
        }
    }
    return $creditCards;
}

//Creating a function, which checks if the generated card numbers are valid.
function validatingNumber($array)
{
    $sum = 0;

    for($i = 0; $i < count($array); $i++)
    {
        if($i % 2 != 0)
        {
            $arr[$i] = $array[$i] * 2;

            if(strlen(strval($arr[$i])) == 2)
            {
                $sum += intval(strval($array[$i])[0]);
                $sum += intval(strval($array[$i])[1]);
            }
            else
            {
                $sum += $arr[$i];
            }
        }
        else
        {
            $sum += $array[$i];
        }
    }
    
    if($sum % 10 == 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

//Applying the card number generating function and printing the result.
print_r(creditCardGenerator($cards));

?>