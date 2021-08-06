<?php
    //pass by value
    $n = 2;
    echo "value of n = $n <br>";

    function add($a)// $n = $n = 2 here n is duplicate 
    {
        echo "value inside function $a <br>";
        $n = 4; //$n = 4
        echo "value inside function $a <br>";
    }
    add($n); // $n = 2

    echo "value of n = $n <br>";
?>