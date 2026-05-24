<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist | Alight Custom Gift</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/wishlist.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="acg-wishlist-section">
    <div class="container">
        <div class="wishlist-header mb-5">
            <h2 class="wishlist-main-title">My Wishlist</h2>
            <p class="wishlist-subtitle">You have <span id="wishlist-count">3</span> items in your wishlist</p>
        </div>
        
        <div class="row g-4" id="wishlist-grid">
            
            <div class="col-xl-3 col-lg-4 col-md-6 wishlist-item-card">
                <div class="acg-wish-card">
                    <button class="wish-delete-btn" title="Remove from Wishlist"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="wish-img-box">
                        <img src="assets/images/shompa-bera-doll.jpg" alt="Customized Bobblehead Doll">
                    </div>
                    <div class="wish-content-box">
                        <p class="wish-category">Personalized Caricature</p>
                        <h4 class="wish-product-name">Customized Female Saree Bobblehead Doll</h4>
                        <div class="wish-price-row">
                            <span class="wish-current-price">₹3,499</span>
                            <span class="wish-old-price">₹4,999</span>
                        </div>
                        <button class="btn-wish-to-cart"><i class="fa-solid fa-bag-shopping me-2"></i> ADD TO CART</button>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wishlist-item-card">
                <div class="acg-wish-card">
                    <button class="wish-delete-btn" title="Remove from Wishlist"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="wish-img-box">
                        <img src="assets/images/product1.jpg" alt="Acrylic Keychain">
                    </div>
                    <div class="wish-content-box">
                        <p class="wish-category">Keychains</p>
                        <h4 class="wish-product-name">Customized Puzzle Acrylic Keychain</h4>
                        <div class="wish-price-row">
                            <span class="wish-current-price">₹700</span>
                        </div>
                        <button class="btn-wish-to-cart"><i class="fa-solid fa-bag-shopping me-2"></i> ADD TO CART</button>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 wishlist-item-card">
                <div class="acg-wish-card">
                    <button class="wish-delete-btn" title="Remove from Wishlist"><i class="fa-regular fa-trash-can"></i></button>
                    <div class="wish-img-box">
                        <img src="assets/images/couple-coffee-mug (1).jpg" alt="Wooden Organizer">
                    </div>
                    <div class="wish-content-box">
                        <p class="wish-category">Desk Organizers</p>
                        <h4 class="wish-product-name">Customized Wooden Desk Organizer Clock</h4>
                        <div class="wish-price-row">
                            <span class="wish-current-price">₹1,200</span>
                            <span class="wish-old-price">₹1,800</span>
                        </div>
                        <button class="btn-wish-to-cart"><i class="fa-solid fa-bag-shopping me-2"></i> ADD TO CART</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets\js\wishlist.js"></script>
</body>
</html>