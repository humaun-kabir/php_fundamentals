<?php
    declare(strict_types=1); // enabling strict mode
    function add(int $a, int $b){
        echo '$a is'. gettype($a) . "type variable and value = $a";
        echo '$b is'. gettype($b) . "type variable and value = $b";
        return ($a+$b);
    }

    
    echo add(2,"30");
    // if strict mode on then show error bt when off then run the code
    

?>