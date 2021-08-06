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
        echo "Date of birth :";
        $new_date = date('d-m-y',strtotime($_REQUEST['d']));
        echo $new_date;
    ?>
</body>
</html>