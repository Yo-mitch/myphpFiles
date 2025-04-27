<!-- 
 this is insert.php file. this file should be triggered after when the sign up button is clicked.
it checks the validity of the information provided and pushes them to the databases. 

NB: the GET method was used in this program just for practicing purposes.
-->

<?php
    //getting the connection from the connection file in the include folder
    require_once("include/connection.php");

    //getting our data and storing them
    $username = $_GET["username"];
    $password = hash('md5', $_GET["password"]); //hashing the password

    //user authentication
    if (isset($_GET["submit"])) {
        if (empty($username) || empty($password)){
            echo "fill in the blanks";
        }elseif ($password <= 6) {
            //making sure password is more than 6
            echo "<br> <br> <br> sign up unsuccessful! <br>
                passsword should be more than 6 characters!";
        }
        else{
            //code snippet to push data into the database
            $query = " INSERT into signup (username, password) VALUES ('$username', '$password') ";

            //real pushing is done here
            $result = mysqli_query($connection, $query);

            //checking if push was successful
            if ($result){
                //open the view page
                header("location: view.php");
            }else{
                //still be at the index file
                header("location: index.html");
            }
        }
    }
    else{
        echo "submit not set!";
    }
?>
