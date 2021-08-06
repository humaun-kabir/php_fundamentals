<?php
    //when function call it self known as recursive function.
    // it is advisable avoid recursive function if possible.

    //recursive function

    function recur($a){
        if($a <= 10){
            echo "$a <br>";
            recur($a+ 1); // function calling it self
        }
    }

    recur(1); // calling function
?>