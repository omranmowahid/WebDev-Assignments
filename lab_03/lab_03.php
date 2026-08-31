<?php 
// http://localhost/webdev/lab_03/lab_03.php check this url to display web page

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

?>