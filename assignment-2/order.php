<?php
require_once './includes/create.php';

if(isset($_POST['submit_order'])) {
    $create = new Create();
    
    // Get form data
    $name = $create->escape_string($_POST['name']);
    $phone = $create->escape_string($_POST['phone']);
    $size = $create->escape_string($_POST['size']);
    $crust = $create->escape_string($_POST['crust']);
    
    // Handle toppings
    $toppings = '';
    if(isset($_POST['toppings']) && is_array($_POST['toppings'])) {
        $toppings = implode(', ', $_POST['toppings']);
    }
    
    // Calculate price
    $base_price = 0;
    switch($size) {
        case 'Small': $base_price = 10; break;
        case 'Medium': $base_price = 13; break;
        case 'Large': $base_price = 16; break;
        case 'X-Large': $base_price = 19; break;
    }
    
    $topping_count = isset($_POST['toppings']) ? count($_POST['toppings']) : 0;
    $total_price = $base_price + ($topping_count * 1);
    
    // Insert into database
    $query = "INSERT INTO pizza_orders (name, phone, size, crust, toppings, total_price, order_date) 
              VALUES ('$name', '$phone', '$size', '$crust', '$toppings', '$total_price', NOW())";
    
    if($create->execute($query)) {
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: Could not save order. Please try again.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>