<?php
/* 
    localhost/webdev/lab_oop.php
    ==================== Part A ==================
    ==============================================
    I made a class named student, we defince class with Class keyword
    class can have properties (which is same as variable but inside a class)
    and behaviors that are same as functions/methods but inside a class

    class itself is an oop term, that enable us, use same code in multiple places
    even other files, class is like a blue print
*/
class Student // class is keyword and Student is name of class
{

    /*
        ==================== Part B ==================
        ==============================================
        public is a keyword that allow access to these properties from outside of class
        private is a keyword that cant access from out of class, only accessable within class
        we only initialize these properties, and then we pass parameters to class while creating object
    */

    public $name; // a properties that is accessable from outside of class
    public $studentId; // we use $ sign before defining properties and all variables
    public $department; //public is keyword and $department is name of the property of class


    /* 
        this is a constructor funciton same as __init__ of python, 
        this function is called everytime we make object from this class
        as we pass params using object to class, those values are assigned to properties, as we do in manually in __construct function
        these properties and can use through the class, and help in DRY code
        if we need these properties only in one method, then no need to make a constructor for that
    */
    function __construct($name, $studentId, $department)  // we can use other names in arguemts also like ($stud, $id, $dep), but recommended is the same name as properties names
    {
        $this->name = $name; // by $this keyword we reference/point to current obj, properties of class we defined above
        $this->studentId = $studentId; // $studentId in the right of equal sign operator is the same name as function name argument
        $this->department = $department; // we connect values taken from user to properties we have in class
    }

    function showInfo() // class have this behavior so by calling it, user can see info that passed through the object to class
    {
        echo "Name: " . $this->name . "<br>"; // echo is keyword that print values in browser
        echo "Student ID: " . $this->studentId . "<br>"; // $this again point to the current object 
        echo "Department: " . $this->department . "<br>"; // we can use values of this object after reference current object using $this keyword
    }

    /*
    ============== Part B Finished ===============
    ==============================================
    */

    function sayHello() // this is behavior of Student class, normally a function
    {
        echo "Hello! I am a student.<br><br>"; // whenever this behavior of class called, we echo this string in browser
    } // this is a block of code, block of codes are represented as {} shows begin and end of block of code

}


/*
after creating class finished, we made objects of those class
in order to use codes of that class, without writing those codes again
object is like a reference to class
we can use behaviors and properties of classes using this object
new keyword is used for making objects, we have same new keyword in javascript as well as
we pass three params to class, and then we assign these arguments to properties 
*/
$student1 = new Student("Ahmad Emran", "Q01012031", "IT"); // variables are defined by starting a dollar sign at start


$student1->sayHello(); // instead of . notation that we have in js and python we use -> sign to access behaviors and properties of a class


$student1->showInfo(); // we check to see student info in browser by calling showinfo behavior of this obj created from class

?>