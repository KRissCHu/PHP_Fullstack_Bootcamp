<?php

//Declaring the linked list array.
$linkedList = array();

//Declaring the array elements for the cities.
$element = array('value' => "Sofia", "nextIndex" => 1);
$element1 = array('value' => "Plovdiv", "nextIndex" => 2);
$element2 = array('value' => "Varna", "nextIndex" => 3);
$element3 = array('value' => "Burgas", "nextIndex" => 4);
$element4 = array('value' => "Ruse", "nextIndex" => 5);
$element5 = array('value' => "Stara Zagora", "nextIndex" => 6);
$element6 = array('value' => "Pleven", "nextIndex" => 7);
$element7 = array('value' => "Sliven", "nextIndex" => 8);
$element8 = array('value' => "Dobrich", "nextIndex" => 9);
$element9 = array('value' => "Shumen", "nextIndex" => 10);

//Creating the function that adds the elements into the linked list.
function add(array $element, array &$linkedList) : void
{
    if(empty($linkedList))
    {
        $element["nextIndex"] = null;
        array_push($linkedList, $element);
    }
    else
    {
        $element["nextIndex"] = null;
        array_push($linkedList, $element);
        $linkedList[sizeof($linkedList) - 2]["nextIndex"] = count($linkedList) - 1;
    }
}


//Creating the function, which searches for specific elements in the linked list.
function search(array $element, array $linkedList) : int
{
    for($i = 0; $i < count($linkedList); $i++)
    {
        if($element["value"] == $linkedList[$i]["value"])
        {
            return $i;
        }
    }
    return -1;
}

//Creating the function, which removes elements from the linked list.
function remove(array $element, array &$linkedList) : void
{
    $index = search($element, $linkedList);

    if($index != -1)
    {
        $len = count($linkedList);
    
        array_splice($linkedList, $index, 1);
    
        for($i = 0; $i < count($linkedList); $i++)
        {
            if($i == count($linkedList)-1)
            {
                $linkedList[$i]["nextIndex"] = null;
            }
            else
            {
                $linkedList[$i]["nextIndex"] = $i + 1;
            }
            
        }
    }
    else
    {
        echo "Not found!";
    }
    
}

//Creating the function, which sorts the elements in the linked list, via bubble sort.
function sortList(array &$linkedList) : void
{
    for($i = 0; $i < count($linkedList); $i++)
    {
        for ($j = 0; $j < count($linkedList) - $i - 1; $j++)
        {
            if ($linkedList[$j]["value"] > $linkedList[$j+1]["value"])
            {
                $temp = $linkedList[$j]["value"];
                $linkedList[$j]["value"] = $linkedList[$j + 1]["value"];
                $linkedList[$j+1]["value"] = $temp;
            }
        }
    }
}

//Adding all of the elements to the linked list, via the add function.
add($element, $linkedList);
add($element1, $linkedList);
add($element2, $linkedList);
add($element3, $linkedList);
add($element4, $linkedList);
add($element5, $linkedList);
add($element6, $linkedList);
add($element7, $linkedList);
add($element8, $linkedList);
add($element9, $linkedList);

//Sorting the linked list via the sorting function.
sortList($linkedList);

//Printing out the results.
print_r($linkedList);

?>