<?php 
// http://localhost/webdev/lab_03/lab_03.php check this url to display web page
// Name: Ahmad Emran MOwahid
// Roll No: 5
//ID: Q01017740
/* ======================= TASK 1 =============================
===============================================================*/
class Library {
    const MAX_BOOKS = 3; // this is a constant by name of MAX_BOOKS, we dont use $ as we use it in normal variable declaration
} // constant name recommended to have all capital letters
// this is a value related to the class itslef not the objects, as normal variables that related to objects 

echo "Maximum books allowed: " . Library::MAX_BOOKS . "<br> =========================== Task 2 ================================ <br>"; // outside of class we access constant without creating object
// this value is constant because it doesnt use $ sign for declaration, they are all with capital letter, we could access it without using object creation

/* ======================= TASK 2 =============================
===============================================================*/
class StudentCounter 
{
    public static $count = 0; // static property, relate to class itself not objects

    public static function addStudent() // we can call this function, or also we can make a contruct function that call everytime we create object of class, and count increase
    {
        self::$count += 1; // self relate to the class itself, unlike $ sign that point to object
    } // we increase count by one every time the function of add Student is called
}

StudentCounter::addStudent(); // each time we call this method, count will increase
StudentCounter::addStudent(); // each time count doesnt go to 0 again
StudentCounter::addStudent(); // but that count relate to class itself and object cant change it here, however it can change, since it is static not const

echo "Total Student: " . StudentCounter::$count . "<br> =========================== Task 3 ================================ <br>";

/* ======================= TASK 3 =============================
===============================================================*/

abstract class Vehicle // we make a parent class Vehicle that is abstract
{ // objects cant create from abstract classes, it is only a parent class that child classes should inherit from that, and modify methods according their need
    abstract public function start(); // this is an abstract method inside an abstract class, we can have normal methods also inside an abstract class
}

class Car extends Vehicle // this is a child class, that inherit from parent class, , and modify start according of the class itself which is car, 
{ // parent class only say that child should have this start method, but the child itself can manage the behavior
    public function start()  // this is the method, that the structure was defined at parent class, we only change its behavior here
    {
        echo "Car engine started" . "<br>";
    }
}

class Bike extends Vehicle 
{
    public function start() 
    {
        echo "Bike started" . "<br>";
    }
}

$car = new Car(); // we make an object from child calss 
$bike = new Bike();

$car->start(); // we can call behavior of child classes, that their structure was defined in parent class
$bike->start();

?>