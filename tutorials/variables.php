
<?php 
     
    // variables - a reusable container that holds data
    // strings, integer, float, boolean 
    
    // 1. variables are case sensitive
    // 2. shouldn't begin with a number
    // 3. can begin with a letter or underscore
    // 4. variables are represented by dollar sign foloowed by variable name 
    // Note: the '\' in front of the dollar sign is called escape sequence
    $name = "Andy";
    $email = "mitchy99@gmail.com";
    echo "{$name} is my name and my email is  {$email} <br><br>";

    $price = 6.99;
    $quantity =  6;
    $food = "pizza"; 
    $total = $quantity * $price;
    echo "{$name}, you ordered {$quantity} quantity of food. The price of each is \${$price}<br> <br>";
    echo "Total price:  \${$total}";
    
?>
