<?php
    // fopen() - this function is used to open a file or URl
    //syntax - fopen(filename,mode,include_path,context)
    /* file name - it is the name of file or url.
    mode - in which mode we want to open this file ex: r,w etc.
    include_path - set this parameter to '1' or TRUE to specify that you want to
                    search for the file in the PHP include path.
    context - contexts modify or enhance the behavior of the data stream
                from and to files.
    if the open operation fails, it returns FALSE and an error on failure.
    */

    // opening a file
    /* $handle = fopen("tausif.txt","r");
        $handle = fopen("/home/test/tausif.txt","r");
        $handle = fopen("/home/test/tausif.txt","wb");
        $handle = fopen("http://www.w3schools.com/","r");
        $handle = fopen("ftp://user:password@w3schools.com/tausif.txt","w");
    */

    $handle = fopen("tausif.txt","r");
    //$handle = fopen("http://www.w3schools.com/","r");
    if($handle){
        echo "file opened";
    }else{
        echo "not found";
    }

    $handle = fopen("tausif.txt","r") or die ("not found");
    echo "rest of the code";
    
    

?>