<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        if(strlen($username) <= 8){
            echo "username must be 8 characters";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Username : <input type="text" name="username"> <br><br>
        Password : <input type="password" name="pass"> <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>