<?php
    //scalar type declaration
    //coercive mode
    // function add(int $a, int $b){
    //     return ($a+$b);
    // }

    // echo add(2.3,4.2);


    function add(int $a, int $b){
        echo '$a is'. gettype($a) . "type variable and value = $a";
        echo '$b is'. gettype($b) . "type variable and value = $b";
        return ($a+$b);
    }

    
    echo add(2,"30");

    echo "<br>";

    function con(string $a, string $b){
        echo '$a is'. gettype($a) . "type variable and value = $a";
        echo '$b is'. gettype($b) . "type variable and value = $b";
        return ($a.$b);
    }

    echo con(2,"30");
?>