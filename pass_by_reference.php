<?php

    //pass by reference
    $n = 2;
    echo "value of n = $n <br>";

    function add(&$a) 
    {
        echo "value inside function $a <br>";
        $a = 4; 
        echo "value inside function $a <br>";
    }
    add($n); 

    echo "value of n = $n <br>";
?>

?>