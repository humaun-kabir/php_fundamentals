<?php
    //passing array to function
    $marks = array(10,20,30,40); //defining array
    function total($subject){    // array parameter
        $sum = 0;
        foreach($subject as $num){
            $sum = $sum + $num;
        }

        return $sum;
    }
    echo total($marks); // passing array marks

?>