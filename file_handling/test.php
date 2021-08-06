<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        print_r($_FILES["myfile"]);
        echo $_FILES["myfile"]["name"] . "<br>"; //file name
        echo $_FILES["myfile"]["type"] . "<br>"; //file type
        echo $_FILES["myfile"]["tmp_name"] . "<br>"; //temp file
        echo $_FILES["myfile"]["error"] . "<br>"; //number of error
        echo $_FILES["myfile"]["size"] . "<br>"; //file size
        */

        //move_uploaded_file($_FILES["myfile"]["tmp_name"], "images/".$_FILES["myfile"]["name"]);

        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "images/".$_FILES["myfile"]["name"])
        ){
            echo "uploaded success";
        }else{
            echo "failed";
        }
    ?>
</body>
</html>