<?php

//Creating an array of random integers.
$randomArray = range(1, 100);

//Duplicating one of the numbers in the array and inserting it in the array.
array_push($randomArray, rand(1,100));

//Randomizing the updated array.
shuffle($randomArray);


//Task 1_9_12_a, creating a function with O(N*N) complexity to find the duplicated number.

function duplicateSearchNN($array)
{
    for($i = 0;$i < count($array); $i++)
    {
        $current = $array[$i];
        
        for($j = 0; $j < count($array); $j++)
        {
            if($i == $j)
            {
                continue;
            }

            if($current == $array[$j])
            {
                return $current;
            }
        }
    }
}

//Applying the function.
echo duplicateSearchNN($randomArray);

//========================================================================================================================================

//Task 1_9_12_b, creating a function with O(N*logN) complexity to find the duplicated number.

//Declaring the length of the random array as a variable, as it is required for the below functions to work.
/*$size = sizeof($randomArray);

//Using mergesort in order to sort the array with time complexity of O(N*logN).
function mergesort(&$Array, $left, $right)
{
    if ($left < $right)
    { 
      $mid = $left + (int)(($right - $left)/2);

      mergesort($Array, $left, $mid);
      mergesort($Array, $mid+1, $right);

      merge($Array, $left, $mid, $right);
    }
  }
  
  //Creating a merge function, which performs sort and merge operations for the mergesort function.
  function merge(&$Array, $left, $mid, $right)
  {

    // Creating two temporary arrays to hold the split elements of the main array. 

    $n1 = $mid - $left + 1;
    $n2 = $right - $mid;

    $LeftArray = array_fill(0, $n1, 0); 
    $RightArray = array_fill(0, $n2, 0);

    for($i=0; $i < $n1; $i++)
    { 
      $LeftArray[$i] = $Array[$left + $i];
    }

    for($i=0; $i < $n2; $i++)
    { 
      $RightArray[$i] = $Array[$mid + $i + 1];
    }
  
    $x=0;
    $y=0;
    $z=$left;

    while($x < $n1 && $y < $n2)
    {
      if($LeftArray[$x] < $RightArray[$y])
      { 
        $Array[$z] = $LeftArray[$x]; 

        $x++; 
      }
      else
      { 
        $Array[$z] = $RightArray[$y];  

        $y++; 
      }

      $z++;
    }
  
    //Copying the remaining elements of the LeftArray.
    while($x < $n1)
    { 
       $Array[$z] = $LeftArray[$x];
       $x++;  
       $z++;
    }
  
    // Copying the remaining elements of the RightArray.
    while($y < $n2)
    { 
      $Array[$z] = $RightArray[$y]; 
      $y++;  
      $z++; 
    }
  }

//Applying the mergesort function.
mergesort($randomArray, 0, $size-1);


//Creating the function, which searches for the duplicated element in the random array.
function duplicateSearchNlogN($array, $low, $high)
{

    if ($low > $high)
    {
        return -1;
    }

    $mid = floor(($low + $high) / 2);
 
    if ($array[$mid] != $mid + 1)
    {
        if ($mid > 0 && $array[$mid] == $array[$mid - 1])
        {
            return $mid;
        }
        
        return duplicateSearchNlogN($array, $low, $mid - 1);
    }
 
    return duplicateSearchNlogN($array, $mid + 1, $high);
}

//Applying the function.
echo duplicateSearchNlogN($randomArray, 0, $size - 1);*/

//========================================================================================================================================

//Task 1_9_12_c, creating a function with O(N) complexity to find the duplicated number.
/*function duplicateSearchN($array)
{
    for ($i = 0; $i < count($array); $i++)
    {
        if ($array[abs($array[$i])] >= 0)
        {
            $array[abs($array[$i])] = -$array[abs($array[$i])];
        }
        else
        {
            echo abs($array[$i]);
        }
    }

}

//Applying the function.
echo duplicateSearchN($randomArray);*/
?>