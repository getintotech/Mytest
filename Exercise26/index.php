<?php
class Employee
{
    public $name;
    public $add;
    public $doj;
    public $dob;
    public function __construct($name, $add, $dob)
    {
        $this->name = $name;
        $this->add = $add;
        $this->doj = getdate();
        $this->dob = $dob;
        echo "Date of Joinin - ".$doj."<br>";
    }
    
    public function CheckEmployeeOverAYear()
    {
        $time = new DateTime($this->doj);
        $date1 = getdate();        
        echo 'Today Date - '.$date1;        
        $diff = $time->diff($date1)->format("%a");
        echo $diff. "<br>";
        if ($diff > 365)
        {
            echo "Congratulations ". $this->name ." for completing a year";
        }  
    }
    
    public function EmployeeRetirement()
    {
        $time = new DateTime($this->dob);
        $date1 = getdate();
        
        $diff = $time->diff($date1)->format("%a");
    }
}

$Revathy = new Employee("Revathy", "Berberishouse", new DateTime("1980-08-02"));

$Revathy->CheckEmployeeOverAYear();
?>