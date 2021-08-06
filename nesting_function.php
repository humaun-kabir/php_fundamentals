<?php
    //nesting function is function inside function

    // function outer_function(){
    //     block of statement;
    //     function inner_function(){
    //         block of statement;
    //     }
    // }

    //we can't call inner function without calling outer function. first make call to outer then inner.

    //nesting of function

    function outer_display(){ //outer function
        echo "outer function";

        function inner_display(){ //inner function
            echo "inner function";
        }
    }

    outer_display();
    inner_display();
?>