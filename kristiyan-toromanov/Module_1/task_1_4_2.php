<?php

//Selection input request
$fruit_selection = readline("Which of the following fruits would you like to select? Tomato, Kiwi, Banana or Orange: ");

switch ($fruit_selection)
{
    case 'Tomato': echo 'Red';
    break;
    case 'Banana': echo 'Yellow';
    break;
    case 'Orange': echo 'Orange';
    break;
    case 'Kiwi': echo 'Brown';
    break;
    default: echo "This entry is not a part of our selection options. Please try again.";
    break;
}

?>