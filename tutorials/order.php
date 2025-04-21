<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "order.php" method = "GET">
        <h1> Order Pizza </h1>
        <label> Quantity: </label>
        <input type = "number" name = "quantity"> <br><br>
        <input type = "submit" value = "order"> <br><br>
    </form>
</body>
</html>

<?php
    //price of one pizza  is $999.9
    $price = 6.99;

    //getting the quantity of pizza goin' to be purchased from user
    $quantity = $_GET["quantity"];

    //calculating the total price
    $total = $price * $quantity;

    //displaying total to user
    echo "You ordered {$quantity} quantities of pizza and your total price is \${$total}";

?>