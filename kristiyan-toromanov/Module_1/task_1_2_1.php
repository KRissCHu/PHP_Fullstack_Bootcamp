<?php

//Input birth year.
$birthYear = readline("What year were you born in? : ");

//Print birth year and current age of the user.
echo "You were born in " . $birthYear . ", which means that you are currently ";
echo date("Y") - $birthYear;
echo " years old. \n"

?>