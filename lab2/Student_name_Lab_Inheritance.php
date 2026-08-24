<?php // this is the tag that shows php codes are inside this tag
/*
    =========================================================
    =========================================================
    =============== Task 1: Access Modifiers ================
    =========================================================
    =========================================================
*/

class StudentAccount { // class keyword for making class and StudentClass is the name of class, that we can access it
    public $name; // public is the keyword that define the scope that we can access this property (inside, outside or at children class)
    private $studentId; // private: we can only access this property/method inside the class itself not outside nor child classes
    protected $department; //proctected: accessed inside class and child classes not outside of class

    public function __construct($name, $studentId, $department) // thiss is constructor function and is called when the object is created, usaully we use for assigning values to properties or also we can use it for some block of codes that should run at the very first step
    {
        $this->name = $name; // this keyword point to the object itself that is created, and take those values that is used in declaration of object
        $this->studentId = $studentId; // student id property
        $this->department = $department; // department property
    }

    public function showInfo() // this function is used for printing or displaying info about a student in web page of browser
    {
        echo "Name: " . $this->name . "<br>" . // <br> is use to break, new line of code in brwoser
        "Student ID: " . $this->studentId . "<br>" . 
        "department: " .$this->department . "<br>";
    }

    function getStudentId() // this function is use to display a private property in the web page, this property cant accessed and modified form outsisde of class
    {
        echo "Student ID from method: " . $this->studentId;
    }
}


$student1 = new StudentAccount('Ahmad Emran', 1001, "Computer Science"); // we make an object from class with new keyword and pass parameters to class then constructor will assign these values to properties and can accessed through the class
$student1->showInfo(); // call a method or behavior from the class, this method display info about student in web page
$student1->getStudentId(); // call another method of object that display a private property in web page




?>