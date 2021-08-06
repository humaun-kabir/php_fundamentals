<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">
        <select name="location[]" multiple>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Mymensing">Mymensing</option>
            <option value="Bogura">Bogura</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>