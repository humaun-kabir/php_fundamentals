<?php
    // function function_name(para1,para2,para3="value"){
    //     block of statement
    // }

    // function function_name(para1,para2="value",para3){ // wrong syntax
    //     block of statement
    // }

    function display($name, $phone, $address="bd"){
        echo "$name $phone $address <br>";

    }

    display("tausif","12234");
    display("dip","345","usa");



?>