<?php
    //while loop
    //feof() function
    //fgets() function
    // syntax feof($file_handle);
    // ex: feof($handle);

    //fgets($file_handle,length);
    //ex: fgets($handle);

    // if no length specified, the length default to 1024 bytes.

    $handle = fopen("tausif.txt", "r");
    echo fgets($handle);

    $handle = fopen("tausif.txt", "r");
    while(!feof($handle)){
        $data = fgets($handle);
        echo "$data <br>";
    }

    //file close

    $handle = fopen("tausif.txt", "r");
    while(!feof($handle)){
        $data = fgets($handle);
        echo "$data <br>";
    }
    fclose($handle);
    //if the file is not open then file close function shows error.
    






?>