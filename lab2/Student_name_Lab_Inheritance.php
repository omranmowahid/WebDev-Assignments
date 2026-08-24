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
        echo "========================================================= <br> ======================= Task 1 =============================<br><br> ". 
        "Name: " . $this->name . "<br>" . // <br> is use to break, new line of code in brwoser
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

/*
    =========================================================
    =========================================================
    ================= Task 1: Experiment: ==================
    =========================================================
    =========================================================
*/

// echo "public     " . $student1->name;  // we want to access a public property outside of class
// echo "private      " . $student1->studentId; // as we access private property we got an error Cannot access private property StudentAccount
// echo "protected     " . $student1->department; // protected property only can accessed in child classes where we inherit from parent class, not outside of class. here we take this error Cannot access protected property StudentAccount:

/*
    =========================================================
    =========================================================
    =============== Task 2: Inheritance =====================
    =========================================================
    =========================================================
*/
echo "<br><br>========================================================= <br> ======================= Task 2 =============================<br><br> ";

class Person // a class create by name of Person and then it will come as parent class
{
    protected $name; // this property access within the class itself and all child classes
    
    public function __construct($name) // this is constructor and is called when we create the object from this class
    {
        $this->name = $name; // take the name from object (function argument) and assign it to property
    }

    public function introduce() // this is a public method that display name of student in web page
    {
        echo "My name is " . $this->name . "<br>"; // this message is displayed in web page
    }
    }

    class Student extends Person // another class is made that inherit from a class (parent) and automatically take all properities and metehods of parent class
    {

    public function study() // this is a method that gonna work behind of all that methods that are availablel in parent  class
    {
        echo $this->name . " is studying. "; // take name from parent class and display it in web page
    }
}
$student2 = new Student("Sara"); // we make an object from the child class and can access all property & method from parent class
$student2->introduce(); // introduce is the method that is in parent class and we can access it
$student2->study(); // but study is in child class and we can access it also from the child that we created the object 


?>