<?php
    //syntax - copy(source_file, destination_file)
    //ex: copy("tausif.txt","moon.text");

    copy("tausif.txt","moon.text"); //override file

    //deleting file
    //unlink() function is used to delete file.
    //syntax : unlink(filename,context)
    //ex: unlink("tausif.txt");

    unlink("tausif.txt");

    //writing a file
    //syntax : fwrite(file,string,length);
    //ex : fwrite($handle, "new text");

    $handle = fopen("tausif.txt","w");
    fwrite($handle, "hello tausif");

    //appending to files
    $handle = fopen("geek.txt","a");
    fwrite($handle, "world");

?>