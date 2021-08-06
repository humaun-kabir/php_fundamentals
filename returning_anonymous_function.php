<?php
    //anonymous function 
    function disp($str){
        return function($a_str) use ($str){
            return "$str $a_str";
        };
    }

    $a = disp("hello");
    echo $a("tausif");
?>