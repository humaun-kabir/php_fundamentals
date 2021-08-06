<?php
    //local variable
    /* the variable which is declared inside a function has a LOCAL
    scope. its value remains valid just within the function.*/ 

    function display(){
        $a = 10; //local variable
        echo "accessing value inside function = $a <br>";
    }
    display();
    //below code will not work, can't access $a outside function.
    //echo "accessing value outside function = $a <br>";


    //global variable

    /* the variable which is declared outside a function has a GLOBAL scope.
    it's accessibility is just outside the function. */
    $a = 10; //global variable
    function displayg(){
        //below code won't work, can't access $a inside function
        //echo "accessing value inside function = $a <br>";
    }

    displayg();
    echo "accessing value outside function = $a <br>";


    //global keyword
    /* if we want to access data ouside a function from code inside
    a function we have to use global keyword within the function */

    $a = 10; //global keyword
    function displaygb(){
        global $a; // defining it's global
        echo "accessing value inside function = $a<br>";
    }
    displaygb();
    echo "accessing value outside function = $a <br>";

    //static variable


?>