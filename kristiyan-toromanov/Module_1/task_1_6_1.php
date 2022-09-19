<?php

//Declaring function for discovering the average of a student's grades.
function averageGrade()
{
    //Requesting the input of the student's grades.
    $student_grades = readline("Please enter the grades of the student, using the numbers between 2 and 6, sepparated by commas: ");
	$student_grades = explode(",", $student_grades);
    
    //Declaring variable in which to hold the total sum of the grades.
    $total_sum = 0;

    //Checking if all of the grades were entered correctly and if so, adding them to a total sum.
	for($i = 0; $i < count($student_grades);$i++)
    {
    	if($student_grades[$i] < 2 || $student_grades[$i] > 6)
        {
        	return "Invalid output, please only use the numbers between 2 and 6. and try again";
            break;
        }
        else
        {
            $total_sum += $student_grades[$i];
        }
    }
    //Returning the student's average grade.
    return $total_sum/count($student_grades);
}

echo averageGrade();

?>