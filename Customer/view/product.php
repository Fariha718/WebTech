<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="../css/cus.css">
</head>
<body>

<form action="logout.php" method="POST">
    <button type="submit">Logout</button>

    <a href="payment.php?order_id=<?= $order_id ?>&amount=<?= $total_price ?>">Make Payment</a>

</form>

    <section class="product-section">
        <h2>Our Products</h2>
        <div class="product-container">
            
            <div class="product-card">
                <img src="../images/apple.jpg" >
                <h3>Apples</h3>
                <p class="price">160 TK / kg</p>
                <button class="add-to-cart">Add to Cart</button>
                
            </div>

            <div class="product-card">
                 <img src="../images/milk.jpg" >
                <h3>Chocolate Milk</h3>
                <p class="price">30 TK / L</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="../images/Mojo.webp" >
                <h3>Mojo</h3>
                <p class="price">20 TK /250 ml</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="../images/rice.jpg" >
                <h3>Rice</h3>
                <p class="price">800 / 5kg</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="../images/tissue.jpg" >
                <h3>tissue</h3>
                <p class="price">90 TK / Packet</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="../images/orange.jfif" >
                <h3>Orange</h3>
                <p class="price">200 TK/ kg</p>
                <button class="add-to-cart" data-name="orange" data-price="200">Add to Cart</button>
            </div>

            

            <div class="product-card">
                <img src="../images/dove.jpg" >
                <h3>Dove Shampoo</h3>
                <p class="price">300 TK/ 500 ml</p>
                <button class="add-to-cart" data-name="shampoo" data-price="300">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="../images/soap.jpg" >
                <h3>Dove Soap</h3>
                <p class="price">150 Tk/ 100 gm</p>
                <button class="add-to-cart" data-name="soap" data-price="150">Add to Cart</button>
            </div>

        </div>
    </section>
    <section class="cart-section">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p><strong>Total:</strong> $<span id="cart-total">0.00</span></p>
    </section>

    <button onclick="addToCart(<?php echo $product_id; ?>)">Add to Cart</button>

<script>
function addToCart(product_id) {
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'product_id=' + product_id
    })
    .then(response => response.json())
    .then(data => alert(data.message))
    .catch(error => console.log(error));
}
</script>




    
    <script src="../jss/productjs.js"></script>

</body>
</html>
