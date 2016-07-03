<?php
class Employee
{
    public $name;
    public $add;
    public $doj;
    public function __construct($name,$add,$doj)
    {
        $this->name = $name;
        $this->add = $add;
        $this->doj = getdate();
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
}
$Revathy = new Employee("Revathy","Berberishouse",$doj);

$Revathy->CheckEmployeeOverAYear();
?>