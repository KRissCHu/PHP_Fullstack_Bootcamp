<?php

class Department
{
    private $name;
    private $manager;
    private $documents = array();

    public function __construct($name, $manager, $documents)
    {  
       $this->name = $name;
       $this->manager = $manager;
       $this->documents = $documents;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    public function getManager()
    {
        return $this->manager;
    }

    public function addToDocuments($documents)
    {
        array_push($this->documents, $documents);
    }

    public function getDocuments()
    {
        return $this->documents;
    }
}

class Position
{
    private $name;
    private $salaryRange;
    private $department;

    public function __construct($name, $salaryRange, $department)
    {  
        $this->name = $name; 
        $this->salaryRange = $salaryRange; 
        $this->department = $department; 
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSalaryRange($salaryRange)
    {
        $this->salaryRange = $salaryRange;
    }

    public function getSalaryRange()
    {
        return $this->salaryRange;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }

}

class Employee
{
    private $firstName;
    private $lastName;
    private $age;
    private $sex;
    private $startDate;
    private $currentPosition;
    private $previousPositions;
    private $currentSalary;
    private $previousSalaries;

    public function __construct($firstName, $lastName, $age, $sex, $startDate, $currentPosition, $previousPositions, $currentSalary, $previousSalaries)
    {  
        $this->firstName = $firstName; 
        $this->lastName = $lastName; 
        $this->age = $age; 
        $this->sex = $sex; 
        $this->startDate = $startDate; 
        $this->currentPosition = $currentPosition; 
        $this->previousPositions = $previousPositions; 
        $this->currentSalary = $currentSalary; 
        $this->previousSalaries = $previousSalaries; 
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setCurrentPosition($currentPosition)
    {
        $this->currentPosition = $currentPosition;
    }

    public function getCurrentPosition()
    {
        return $this->currentPosition;
    }

    public function setPreviousPositions($previousPositions)
    {
        $this->previousPositions = $previousPositions;
    }

    public function getPreviousPositions()
    {
        return $this->previousPositions;
    }

    public function searchPreviousPosition($searchedPosition)
    {
        return array_search($searchedPosition, $this->previousPositions);
    }

    public function setCurrentSalary($currentSalary)
    {
        $this->currentSalary = $currentSalary;
    }

    public function getCurrentSalary()
    {
        return $this->currentSalary;
    }

    public function setPreviousSalaries($previousSalaries)
    {
        $this->previousSalaries = $previousSalaries;
    }

    public function getPreviousSalaries()
    {
        return $this->previousSalaries;
    }

    public function getHighestPreviousSalary()
    {
        $max = 0;

        foreach ($this->previousSalaries as $salary) 
        {
            if($salary > $max){
                $max = $salary;
            }
        }

        return $max;
    }
}

class PTO_request
{
    private $employee;
    private $start_date;
    private $end_date;
    private $reason;
    private $directManager;
    private $isApproved = false;
    private $requestCount = 0;

    public function __construct($employee, $start_date, $end_date, $reason, $directManager)
    {
        $this->employee = $employee;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->reason = $reason;
        $this->directManager = $directManager;
    }

    public function approve($department)
    {
        $this->isApproved = true;

        if($department->getName() == "Administration")
        {
            $department->addToDocuments($this);

            $this->requestCount++;

            file_put_contents("PTO_REQUEST# {$this->requestCount}" , $this->convertToText());
        }
    }

    public function convertToText()
    {
        return "Employee Name: {$this->employee->getFirstName()}, {$this->employee->getLastName()} \n Age: {$this->employee->getAge()} \n Sex: {$this->employee->getSex()} \n Starting Date: {$this->start_date} \n Ending Date: {$this->end_date} \n Reason: {$this->reason} \n Direct manager: {$this->directManager->getFirstName()}, {$this->directManager->getLastName()}\n";
    }
}




/*$departmentAlpha = new Department("Administration", "", array());
$firstPosition = new Position("Student", "0-1000", $departmentAlpha);
$secondPosition = new Position("Administration Lead", "0-1000", $departmentAlpha);
$employee1 = new Employee("Rumen", "Pavlov", 21, "Male", "15/11/2021", $firstPosition, array(), 1000, array());
$manager1 = new Employee("Georgi", "Georgiev", 43, "Male", "12/1/2010", $secondPosition, array(), 3500, array());
$pto = new PTO_request($employee1, "10/19/2021", "10/26/2021", "Medical", $manager1);
$departmentAlpha->setManager($manager1);
$pto->approve($departmentAlpha);*/

?>