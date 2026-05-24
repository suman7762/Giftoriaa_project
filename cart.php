<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Alight Custom Gift</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/cart.css">
</head>
<style>
  
</style>
<body>

<section class="acg-cart-section">
    <div class="container">
        <h2 class="cart-main-title mb-4">Your Shopping Cart</h2>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="cart-items-wrapper">
                    <div class="cart-item" data-price="700">
                        <div class="item-img-box">
                            <img src="assets/images/product1.jpg" alt="Product Image">
                        </div>
                        <div class="item-details">
                            <h4 class="product-name">Premium Customized Photo Frame</h4>
                            <p class="product-meta">Category: Personalized Gifts</p>
                            <span class="product-price">₹700</span>
                        </div>
                        <div class="item-quantity-controls">
                            <button class="qty-btn minus-btn"><i class="fa-solid fa-minus"></i></button>
                            <span class="qty-number">1</span>
                            <button class="qty-btn plus-btn"><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <div class="item-total-price">
                            <span class="line-total">₹700</span>
                        </div>
                        <div class="item-remove">
                            <button class="remove-btn" title="Remove Item"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </div>
                    <div class="cart-item" data-price="1200">
                        <div class="item-img-box">
                            <img src="assets/images/couple-coffee-mug (1).jpg" alt="Product Image">
                        </div>
                        <div class="item-details">
                            <h4 class="product-name">Customized Wooden Desk Organizer Clock</h4>
                            <p class="product-meta">Category: Corporate Gifts</p>
                            <span class="product-price">₹1200</span>
                        </div>
                        <div class="item-quantity-controls">
                            <button class="qty-btn minus-btn"><i class="fa-solid fa-minus"></i></button>
                            <span class="qty-number">1</span>
                            <button class="qty-btn plus-btn"><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <div class="item-total-price">
                            <span class="line-total">₹1200</span>
                        </div>
                        <div class="item-remove">
                            <button class="remove-btn" title="Remove Item"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-summary-card">
                    <h3 class="summary-title">Order Summary</h3>
                    <hr>
                    <div class="summary-row">
                        <span>Subtotal (<span id="total-items-count">2</span> items)</span>
                        <span id="summary-subtotal">₹1900</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping Charges</span>
                        <span class="text-success" id="summary-shipping">FREE</span>
                    </div>
                    <div class="summary-row text-danger">
                        <span>Coupon Discount</span>
                        <span id="summary-discount">-₹0</span>
                    </div>
                    <hr>
                    <div class="summary-row total-row">
                        <span>Total Amount</span>
                        <span id="summary-total">₹1900</span>
                    </div>
                    <div class="summary-actions mt-4">
                        <button class="btn-checkout-now">PROCEED TO CHECKOUT</button>
                        <a href="index.php" class="btn-continue-shopping"><i class="fa-solid fa-arrow-left me-2"></i> Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/cart-script.js"></script>
  <?php
  include 'includes/footer.php';
  ?>
</body>
</html>