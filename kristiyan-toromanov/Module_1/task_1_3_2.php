<?php

function secretaryIsMakingCoffee(){
    echo __FUNCTION__;
}

function bossCameInTheOffice(){
    echo __FUNCTION__."\n";
    secretaryIsMakingCoffee();
}

bossCameInTheOffice();

?>