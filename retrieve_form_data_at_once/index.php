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
        Name: <input type="text" name="name" > <br> <br>
        Roll: <input type="text" name="roll" > <br> <br>
        Course: <br>
            <select name="course[]" multiple>
                <option value="PHP">PHP</option>
                <option value="JAVA">JAVA</option>
                <option value="JS">JS</option>
                <option value="CSS">CSS</option>
            </select> <br> <br>
            <input type="submit" value="Submit">

    </form>
</body>
</html>