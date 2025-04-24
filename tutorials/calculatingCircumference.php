<!-- this piece of snippet dynamically calculates the circumference of a circle -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action = "calculatingCircumference.php" method = $_GET>
        <h1> Circumference </h1>
        <label> Radius: </label>
        <input type = "number" name = "radius">
        <input type = "submit" name = "calculate" value = "calculate">
    </form>
 </body>
 </html>

 <?php
    //getting the value of radius
    $radius = $_GET["radius"];
    // echo $radius;

    //calculating the circumference of the circle
    $circumference = 2 * 3.14 * $radius;

    //displaying circumference to the user
    echo "<br> The circumference of the circle is: {$circumference}";

 ?>