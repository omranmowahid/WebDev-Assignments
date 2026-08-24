<?php



class StudentAccount {
    public $name;
    private $studentId;
    protected $department;

    public function __construct($name, $studentId, $department) 
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }
}


?>