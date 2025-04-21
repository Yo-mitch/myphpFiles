
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <h1>Log In</h1> 
        <label> Username: </label> <br>
        <input type = "text" name="username"> <br> <br>

        <label></label> Password: </label> <br> 
        <input type  = "password" name="password"> <br> <br>

        <input type = "submit" value = "Log in"> <br> <br>
    </form>
</body>
</html>

<!-- my first php program -->
<?php
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";

    // echo "Hello  World!<br> <br>";

    // echo "This is my first php script <br> <br>";

    //embedding html script to a php file

?>
