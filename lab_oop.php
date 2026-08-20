<?php
/* Part A:
I made a class named student, we defince class with Class keyword
class can have properties (which is same as variable but inside a class)
and behaviors that are same as functions/methods but inside a class

class itself is an oop term, that enable us, use same code in multiple places
even other files, class is like a blue print
*/
class Student // class is keyword and Student is name of class
{
    function sayHello() // this is behavior of Student class, normally a function
    {
        echo "Hello! I am a student."; // whenever this behavior of class called, we echo this string in browser
    } // this is a block of code, block of codes are represented as {} shows begin and end of block of code

}


/*
after creating class finished, we made objects of those class
in order to use codes of that class, without writing those codes again
object is like a reference to class
we can use behaviors and properties of classes using this object
new keyword is used for making objects, we have same new keyword in javascript as well as
*/
$student1 = new Student(); // variables are defined by starting a dollar sign at start


$student1->sayHello(); // instead of . notation that we have in js and python we use -> sign to access behaviors and properties of a class


?>