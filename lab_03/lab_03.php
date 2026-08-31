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



?>