<?php
    //anonymous functions, also known as closures or lambda, allow the creation
    //of functions which have no specified name.
    //can be stored in a variable.
    //can be returned ina function.
    //can be pass in a function

    // syntax 
    // function(){
    //     block of statement;
    // };

    //normal function
    function show(){
        echo "normal function";
    }
    show();

    // anonymous function
    $a = function(){
        echo "anonymous function";
    };
    $a();

    //variable scope in anonymous function
    $y = 34; //global variable
    $a = function($p){
        echo "anonymous function $p";
    };
    $a($y);

    $y= 34;//global variable
    $r = 10;//global variable
    $a = function($p) use ($r){
        echo "anonymous function $p $r";
    };
    $a($y);


    //anonymous function
    $r = 10; //global variable
    $a = function() use ($r){
        echo "anonymous function $r";
    };
    $a();

    //anonymous function
    $y = 34; //global variable
    $r = 10; //global variable
    $a = function($p) use ($r){
        echo "anonymous function $r $p";
    };
    $a($y);


?>