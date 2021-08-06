<?php
    //passing anonymous function as argument

    function disp($a_fun){
        return $a_fun();
    }
    echo disp(function(){
        return "tausif";
    });
?>