<!-- this is insert.php file. this file should be triggered after when the sign up button is clicked.
it checks the validity of the information provided and pushes them to the databases.

NB: the GET method was used in this program just for practicing purposes. -->

<?php
    //getting the connection from the connection file in the include folder
    require_once("include/connection.php");

    //getting our data and storing them
    $firstname = $_GET["firstname"];
    $surname = $_GET["surname"];
    $programmeCode = $_GET["programme-code"];
    $referenceNumber = $_GET["reference-number"];
    $domain = $_GET["domain"];

    //user authentication
    if (isset($_GET["submit"])) {
        if (empty($firstname) || empty($surname) || empty($programmeCode) || empty($referenceNumber)){
            echo "fill in the blanks";
        }
        else{
            //code snippet to push data into the database
            $query = " INSERT into interndb (first_name,  surname, programme_code, reference_number) VALUES ('$firstname', '$surname', '$programmeCode', '$referenceNumber') ";

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
