<?php

class Continent
{
    private $countries;

    function __construct(array $countries)
    {
        $this->countries = $countries;
    }

    function getCountries()
    {
        return $this->countries;
    }

    function getBiggestCity()
    {
        $maxPops = 0;
        $biggestCity = 0;

        for($i = 0; $i < count($this->countries); $i++)
        {
            $continentCities = $this->countries[$i]->getCities();

            for($j = 0; $j < count($continentCities); $j++)
            {
                if($continentCities[$j]->getPopulation() > $maxPops)
                {
                    $maxPops = $continentCities[$j]->getPopulation();
                    $biggestCity = $continentCities[$j];
                
                }
            }
        }

        return $biggestCity;
    }

}

class Country 
{
    private $cities;

    function __construct(array $cities)
    {
        $this->cities = $cities;
    }

    function getCities()
    {
        return $this->cities;
    }
}

class City
{
    private $name;
    private $population;

    function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    function getName()
    {
        return $this->name;
    }

    function getPopulation()
    {
        return $this->population;
    }

}

$Bulgaria = new Country(array(new City("Plovdiv", 343424), new City("Sofia", 1236000), new City("Burgas", 202766)));

$Italy = new Country(array(new City("Rome", 2873000), new City("Florence", 382258), new City("Naples", 962003)));

$Finland = new Country(array(new City("Helsinki", 656920), new City("Espoo", 292796), new City("Tampere", 241009)));

$Europe = new Continent(array($Bulgaria, $Italy, $Finland));
print_r($Europe->getBiggestCity());

?>