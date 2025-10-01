<?php
include_once './includes/header.php';

if(isset($_GET['success']) && $_GET['success'] == '1') {
    echo '
    <div class="success-message">
        <h2>Order Successful!</h2>
        <p>Your pizza order has been received and is being prepared!</p>
        <a href="index.php" class="home-btn">Order Another Pizza</a>
    </div>
    ';
} else {
?>

<form action="order.php" method="post" class="pizza-form">
    <h2 class="form-title">Order Your Pizza</h2>
    
    <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required placeholder="Enter your name">
    </div>
    
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required placeholder="Enter your phone">
    </div>
    
    <div class="form-group">
        <label>Pizza Size:</label>
        <div class="size-options">
            <div class="size-option">
                <input type="radio" id="small" name="size" value="Small" required>
                <label for="small">Small ($10)</label>
            </div>
            <div class="size-option">
                <input type="radio" id="medium" name="size" value="Medium">
                <label for="medium">Medium ($13)</label>
            </div>
            <div class="size-option">
                <input type="radio" id="large" name="size" value="Large">
                <label for="large">Large ($16)</label>
            </div>
            <div class="size-option">
                <input type="radio" id="xlarge" name="size" value="X-Large">
                <label for="xlarge">X-Large ($19)</label>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label for="crust">Crust Type:</label>
        <select id="crust" name="crust" required>
            <option value="">Select Crust</option>
            <option value="Thin Crust">Thin Crust</option>
            <option value="Regular">Regular</option>
            <option value="Pan Pizza">Pan Pizza</option>
            <option value="Stuffed Crust">Stuffed Crust</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Toppings ($1 each):</label>
        <div class="toppings-grid">
            <div class="topping-option">
                <input type="checkbox" id="cheese" name="toppings[]" value="Extra Cheese">
                <label for="cheese">Extra Cheese</label>
            </div>
            <div class="topping-option">
                <input type="checkbox" id="pepperoni" name="toppings[]" value="Pepperoni">
                <label for="pepperoni">Pepperoni</label>
            </div>
            <div class="topping-option">
                <input type="checkbox" id="mushrooms" name="toppings[]" value="Mushrooms">
                <label for="mushrooms">Mushrooms</label>
            </div>
            <div class="topping-option">
                <input type="checkbox" id="olives" name="toppings[]" value="Olives">
                <label for="olives">Olives</label>
            </div>
        </div>
    </div>
    
    <button type="submit" name="submit_order" class="submit-btn">
         Place Order
    </button>
</form>

<?php
}
include_once './includes/footer.php';
?>