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

//name words outside the class, becuase it is public
// student id cant work outside becuase it is privatet
//department cant work outside, becuase it only works inside class and in childs


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


/*
    =========================================================
    =========================================================
    =============== Task 3: Inheritance =====================
    =========================================================
    =========================================================
*/
echo "<br><br>========================================================= <br> ======================= Task 3 =============================<br><br> ";

class Employee // is the class (parent class) that we then gonna acess this class by child object
{
    public $company; // can accessed every where even outside of class
    protected $name; // can access at the parent and child classes
    private $salary; // can only accessed inside the class iteself not outside
    
    public function __construct($name, $company, $salary)  // this is constructor and is called when object is created, we usually use to assign values to properties at the creation of object but we can run every block of codes here
    {
        $this->company = $company; // this keyword point to the object itself that is created, and take those values that is used in declaration of object
        $this->name = $name; // name id property
        $this->salary = $salary; // salary property
        
         
         
    }
    public function showEmployee() // this is a public method that display info in web page
    {
        echo "Name: " . $this->name . "<br>" . // Name: name  
        "Company: " . $this->company . "<br>" . // comapny: company
        "Salary: " . $this->salary . "<br>"; // salary: salary
    }
    public function getSalary() { // this function display a private property in web page
        echo "Salary from method: " . $this->salary . "<br>";
    }
}
class Manager extends Employee // we create a child class using extend keyword that we can access all properties and methods of parent class
{ 
    public function manageTeam()  // a function in child class and display info about object in web page
    {
        echo $this->name . " is managing the team";
    }
}
$manager1 = new Manager("Ali", "Kabul Tech", 30000); // create an object using the new key word from the child class
$manager1->showEmployee(); // we can access all properties and functions from both child class and parent class
$manager1->getSalary(); // this is a method in parent class that we access from child object
$manager1->manageTeam();


/*
ans1: public is an access modifier that define scope of accessability of properties and methods of a class
ans2: private means this property of method can only accessed inside the class
ans3: protected means this property can accessed inside the class and child classes not outside the class or another class
ans4: extends is a keyword that power a class to inherit its properties and methods from antoher class
ans5: the class that is inherited class child extends parent the second class that we wrote is parent and this relatioship is available using this extends keyword
and6: the class that is being inherited class child extends parent the first calss that we wrote is child and already have all properties and methods of parent class
and7: protected is useful so child can access properties and methods of parent class, but they are still a kind of private, becuase someone else cant access it
*/


?>