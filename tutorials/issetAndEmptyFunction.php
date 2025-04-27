<!-- this code snippet seems to explore the differences between the isset() and empty() functiions -->

<!-- the isset() function checks if a variable is set and is not null or empty. (checking for existence)
The empty() function will return true for variables that are set to false, 0, or an empty string,such as "" or "0". (checking if it has no value) -->

<!-- this program explores the use of these functions in a log in page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "issetAndEmptyFunction.php" method = $_GET>
        <h4> Exploring the isset() and empty() functions </h4> 
        <h1> Log In </h1> 

        <!-- getting the username -->
        <label> Username : </label>
        <input type = "text" name = "username"> <br><br>

        <!-- getting the password -->
        <label> Password : </label>
        <input type = "password" name = "password"> <br><br>

        <!-- log in button -->
        <input type = "submit" name = "submit" >    
    </form>
</body>
</html>

<?php
    //getting the username
    $username = $_GET["username"];
    //getting the password
    $password = $_GET["password"];

    //checking if username and password is set
    if (isset($username) && isset($password)){
        if(empty($username)){
            echo "enter username";
        }else if (empty($password)){
            echo "enter password";
        }else{
            echo "username is ($username) and password is ($password)";
        }
    }else{
        echo "username and password is not set";
    }
?>


