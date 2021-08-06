<?php
    //when a function return FALSE, we can use the die function
    //in php to print an error message.
    //when php call die function, the application quits.
    //die("message");

    // ex:

    // function disp(){}

    // disp() or die("error : application");

    // returning errors from functuions
    echo "first line <br>";
    function disp($a){
        if($a <= 10){
            echo "$a <br>";
            return TRUE;
        }else{
            return FALSE;
        }
    }

    disp(24) or die ("error: enter valid number");
    echo ("rest of the code");



?>