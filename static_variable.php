<?php
    /* a variable within a function reset every time when we call it.
    in case if we need, variable values to remain save even outside
    the function then we have to use static keyword. */

    function display(){
        static $a=0; //static variable
        $a++;
        return $a;
    }

    echo "calling static variable's function <br>";
    echo display()."<br>";  //$a =1
    echo display()."<br>";  //$a =2
    echo display()."<br>";  //$a =3


    function display2(){
        $a=0; 
        $a++;
        return $a;
    }

    
    echo display2()."<br>";  //$a =1
    echo display2()."<br>";  //$a =1
    echo display2()."<br>";  //$a =1
?>