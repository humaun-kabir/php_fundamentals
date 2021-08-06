<?php
    //can't call conditional function before it's define.
    if(TRUE){
        function display(){
            echo "conditional function";
        }
    }
    display();

    // calling function with condition

    if(TRUE){//calling function
        display(); // function_name();
    }
?>