<?php

    const BR = '<br />';

    //Initial commit.
        //echo "Hello, world! <br> <i>Italians are nice people.</i>";

    //==========================================================================================================================================
    //User input tutorial.
       /* $name = readline("Enter your name: ");
        echo "Hello " . $name . ", we wish you the best of luck with your studies! \n";*/
    //==========================================================================================================================================
    //Multilpe input tutorial.
        /*$firstNum = readline("First number: ");
        $secondNum = readline("Second number: ");
        $thirdNum = readline("Third number: ");

        $sum = $firstNum + $secondNum + $thirdNum;
        echo "Sum = " . $sum . "\n";*/
    //==========================================================================================================================================
    //Functions tutorial.

    /*echo multiply(5,6);

    function multiply($one, $two){
        return $one * $two;
    }

    echo BR;

    multiply_print(5, 10);

    function multiply_print($one, $two){
        echo $one * $two;
    }

    echo BR;

    function print_info(array $info, $color='lightblue', $cellpadding = 10){
        echo "<table bgcolor='$color' border='3'" . "bordercolor = 'black' cellpadding = '$cellpadding' " . "cellspacing='0'>";

        foreach ($info as $key => $value){
            echo '<tr><td>'.ucwords($key).'</td><td>'.$value.'</td></tr>';
        }
        echo '</table>';
    }

    $my_info = array('name' => 'Kristiyan', 'age' => 24, 'gender' => 'normal');

    print_info($my_info, 'lightgreen', 20);

    $func_name = 'print_info';

    echo BR;

    $func_name($my_info, 'pink');
    //==========================================================================================================================================
    //recursive function

    function recursion($a){
        if($a <= 10){
            echo "$a\n";
            recursion($a + 1);
        }
    }
    echo BR;
    recursion(0);
    //==========================================================================================================================================
    //passing function parameters by reference

    function add_some_extra(&$string) //allow function to modify its parameters
    {
        //add string to existing variable
        $string .= 'add something extra.';
    }
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str; //outputs 'This is a string, and something extra.'
    echo BR;*/
    //==========================================================================================================================================
    //Conditional Statements tutorial.

    /*$answer = 42;
    $truth = 1;
    if($answer == 42)
    {
        echo "The ultimate answer is 42." . BR;
        if( $truth )//boolean variable assumed
        {
            echo 'You speak the truth!';
        }
        else
        {
            echo 'That is a lie!';
        }
    }
    elseif($answer == 13)
    {
        echo "Today is your lucky day!" . BR;
        if( $truth )//boolean variable assumed
        {
            echo 'You speak the truth!';
        }
        else
        {
            echo 'That is a lie!';
        }
    }
    else
    {
        echo "You don't have life figured out yet! Keep trying!" . BR;
        if( $truth )//boolean variable assumed
        {
            echo 'You speak the truth!';
        }
        else
        {
            echo 'That is a lie!';
        }
    }*/
    //==========================================================================================================================================
    //Ternary Operator
    //is this true ? Yes : No

    /*$are_you_okay = true;
    $message = $are_you_okay ? "Yeah, I'm good." : "No, leave me alone!";
    echo $message;*/
    //==========================================================================================================================================
    //Switch Statement tutorial.

    /*$animals = array('Cat', 'Dog', 'Duck', 'Monster');

    switch ($animals[array_rand($animals)])
    {
        case 'Cat': echo "Meow!";
        break;
        case 'Dog': echo "Woof!";
        break;
        case 'Duck': echo "Quack!";
        break;
        default: echo "Unknown animal detected! Run for your life!";
    }*/

    //Case grouping
    /*$species = array('Cat', 'Dog', 'Cow', 'Bee', 'Fly', 'Ant');

    switch ($animals[array_rand($$species)]):
        case 'Cat':
        case 'Dog':
        case 'Cow': 
        echo "We are animals";
        break;
        case 'Bee':
        case 'Ant':
        case 'Fly': 
        echo "We are insects";
        break;
        endswitch;*/


    /*function getChineseZodiac($year)
    {
        switch($year % 12)
        {
            case 0: return 'Monkey';//years 0, 12, 1200, 2004...
            case 1: return 'Rooster';
            case 2: return 'Dog';
            case 3: return 'Boar';
            case 4: return 'Rat';
            case 5: return 'Ox';
            case 6: return 'Tiger';
            case 7: return 'Rabit';
            case 8: return 'Dragon';
            case 9: return 'Snake';
            case 10: return 'Horse';
            case 11: return 'Lamb';
        }
    }
    echo getChineseZodiac(2014);*/
    //==========================================================================================================================================

    //Arrays tutorial.
    //Multydimensional array.

    /*$students = array(array('Mark', 15, 46), array('John', 13, 65), array('Tom', 14, 56));

    for($i = 0; $i <= 2; $i++)
    {
        for($j = 0; $j <= 2; $j++)
        {
            echo $students[$i][$j] . ' ';
        }
        echo BR;
    }*/

    //==========================================================================================================================================
    //Loops tutorial.

    /*$dir = 'movies';
    $files = scandir($dir);
    $files = array_diff($files, array('..', '.'));
    $files = array_values($files);

    pre_r($files);

    function pre_r($array)
    {
        echo "<pre><font color='red'>";
        print_r($array);
        echo '</font></pre>';
    }*/

    //==========================================================================================================================================

        

?>
