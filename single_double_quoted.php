<?php
    $number = 456;
    echo "$number <br>";
    echo '$number';//it doesn't parse the data.
    //echo "tausif "loves" coding";//can't use double quote within double quote
    //echo 'tausif 'loves' coding ';//can't use sigle quote within single quote 
    echo "tausif 'loves' coding";//can use double quote within single quote
    echo 'tausif "loves" coding ';//can use single quote within double quote
    echo "tausif $number <br>";
    echo 'tausif $number <br>';
    echo 'tausif \$number <br>';

    //here doc
    $number = 123;
    echo <<< MYDATA
welcome to tausif heredoc
now you can "write" code $number

MYDATA;

//now doc

    echo <<< MYDATA
welcome to tausif heredoc
now you can "write" code $number

MYDATA;




?>