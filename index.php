<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftoriaa - Homepage Main Content</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- 🔥 1. MAIN HERO SLIDER -->
    <section class="hero-section">
        <div class="slider-container" id="slider">

            <!-- Slide 1: Example - images/banner1.jpg -->
            <div class="slide active" style="background-image: url('assets/images/27cfacf3-08f6-433d-a098-f7a03bc1b0e9.jpg');">
                <div class="slide-content">
                    <!-- <h1 class="slide-title">Perfect Gifts</h1>
                <p class="slide-subtitle">For every special moment in life</p>
                <a href="#" class="cta-button">Shop Now</a> -->
                </div>
            </div>

            <!-- Slide 2: Example - images/banner2.jpg -->
            <div class="slide" style="background-image: url('assets/images/e8b7707f-9fec-4f2b-a8fb-5fa08688e621.jpg');">
                <div class="slide-content">
                    <!-- <h1 class="slide-title">Personalized Gifts</h1>
                <p class="slide-subtitle">Make it special with your touch</p>
                <a href="#" class="cta-button">Explore</a> -->
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide" style="background-image: url('assets/images/Gemini_Generated_Image_7635o47635o47635.png');">
                <div class="slide-content">
                    <!-- <h1 class="slide-title">Birthday Special</h1>
                <p class="slide-subtitle">Surprise your loved ones</p>
                <a href="#" class="cta-button">View Gifts</a> -->
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="slide" style="background-image: url('assets/images/0f215897-7044-46fd-88b6-c9cccefabdbb.jpg');">
                <div class="slide-content">
                    <!-- <h1 class="slide-title">Wedding Gifts</h1>
                <p class="slide-subtitle">Celebrate love & togetherness</p>
                <a href="#" class="cta-button">Discover</a> -->
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="slide" style="background-image: url('assets/images/47b692a6-a6c8-4a42-8a1e-a67d96105fa2.jpg');">
                <div class="slide-content">
                    <!-- <h1 class="slide-title">Corporate Gifts</h1>
                <p class="slide-subtitle">Perfect for your team</p>
                <a href="#" class="cta-button">Shop Corporate</a> -->
                </div>
            </div>

        </div>

        <!-- Arrows aur Pagination same rahenge -->
        <button class="nav-arrow prev-arrow" id="prevBtn">‹</button>
        <button class="nav-arrow next-arrow" id="nextBtn">›</button>
        <div class="pagination" id="pagination"></div>
    </section>

    <!-- 🔥 2. CIRCULAR CATEGORIES -->
    <section class="custom-category-section">
        <div class="container">
            <h2 class="main-title">Gifts by Occasion & Events</h2>
            <p class="main-subtitle">Alight Custom Gift - A Bit of You in Every Gift</p>

            <div class="category-grid">
                 <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?6" alt="Personalized"></div>
                        <p>Personalized Gifts</p>
                    </div>
                </a>
                 <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?5" alt="Corporate"></div>
                        <p>Corporate Gifts</p>
                    </div>
                </a>
                <a href="new-arrival-gifts.php">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?1" alt="Birthday"></div>
                        <p>Birthday</p>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?2" alt="Anniversary"></div>
                        <p>Anniversary</p>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?3" alt="Trophies"></div>
                        <p>Trophies</p>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?4" alt="Mini You"></div>
                        <p>Fun & funky</p>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?7" alt="Hampers"></div>
                        <p>Gift Hampers</p>
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <div class="image-holder"><img src="https://picsum.photos/200?8" alt="Handmade"></div>
                        <p>Love one</p>
                    </div>
                </a>
                
            </div>
        </div>
    </section>

    <!-- Main Wrapper Section - Isme aap background color change kar sakte hain -->
    <section class="bs-custom-section">
        <div class="bs-container">
            <div class="bs-title-wrapper">
                <span class="bs-main-title">Custom Home Decor & Accessories</span>
            </div>

            <div class="bs-category-grid">
                <!-- Item 1 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/ad6d51fb-ac18-4165-b572-97e2b6697a54.jpg" alt="Photos frames">
                    </div>
                    <p class="bs-label">Photos frames</p>
                </div>

                <!-- Item 2 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/cc86ee29-60ed-4b61-9fa8-1e50c566462c.jpg" alt="LED lamps">
                    </div>
                    <p class="bs-label">LED lamps</p>
                </div>

                <!-- Item 3 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/de6b249b-c23c-4d54-9453-deec9d51dc3c.jpg" alt="Table Top">
                    </div>
                    <p class="bs-label">Table Top</p>
                </div>

                <!-- Item 4 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/8fefd2a8-ed1d-4704-9d07-4171786def1f.jpg" alt="Clock">
                    </div>
                    <p class="bs-label">Clock</p>
                </div>

                <!-- Item 5 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/188537a2-a9d3-40a6-846b-18df3760e7af.jpg" alt="Home decores">
                    </div>
                    <p class="bs-label">Home decores</p>
                </div>

                <!-- Item 6 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/86f53c26-d54f-4d94-a36f-17f53a9bb47f.jpg" alt="Resin">
                    </div>
                    <p class="bs-label">Resin</p>
                </div>
                 <!-- Item 7 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/86f53c26-d54f-4d94-a36f-17f53a9bb47f.jpg" alt="Fridge magnet">
                    </div>
                    <p class="bs-label">Fridge magnet</p>
                </div>
                <!-- Item 8 -->
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/86f53c26-d54f-4d94-a36f-17f53a9bb47f.jpg" alt="Key chain">
                    </div>
                    <p class="bs-label">Key chain</p>
                </div>
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/86f53c26-d54f-4d94-a36f-17f53a9bb47f.jpg" alt="Customise T-Shirt">
                    </div>
                    <p class="bs-label">Customise T-Shirt</p>
                </div>
                <div class="bs-card">
                    <div class="bs-img-box">
                        <img src="assets/images/86f53c26-d54f-4d94-a36f-17f53a9bb47f.jpg" alt="Kids Game & Education">
                    </div>
                    <p class="bs-label">Game & Education</p>
                </div>
            </div>
        </div>
    </section>

    <section class="st-reels-section">
        <div class="st-container">
            <div class="st-row" id="stScrollRow">
                <div class="st-item" onclick="openStoryPlayer(0)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/12268326_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Trophies</span> -->
                </div>

                <div class="st-item" onclick="openStoryPlayer(1)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/7311982-uhd_4096_2160_25fps.mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Bottle Gifts</span> -->
                </div>

                <div class="st-item" onclick="openStoryPlayer(2)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/7817160-hd_1080_1920_25fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(3)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/7763522-hd_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(4)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/8342150-hd_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(5)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/8861607-uhd_4096_2160_25fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(6)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/12268326_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(7)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/6929596-hd_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(8)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/8342431-hd_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(9)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/istockphoto-2195951313-640_adpp_is.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(10)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/5446639-hd_1080_1920_30fps.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
                <div class="st-item" onclick="openStoryPlayer(11)">
                    <div class="st-circle-border">
                        <div class="st-img-inner">
                            <video muted loop autoplay playsinline>
                                <source src="assets/videos/226609.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- <span>Money Box</span> -->
                </div>
            </div>
        </div>
    </section>

    <div id="stPlayerModal" class="st-modal">
        <span class="st-close-btn" onclick="closeStoryPlayer()">&times;</span>

        <button class="st-nav-btn st-prev-btn" onclick="changeReel(-1)"><i class="bi bi-chevron-left"></i></button>

        <div class="st-reel-content">
            <video id="stMainVideo" loop playsinline></video>

            <div class="st-product-overlay">
                <div class="st-prod-details">
                    <h4 id="stProdName">Product Title</h4>
                    <p id="stProdPrice">₹000 <span class="st-old-price">₹000</span></p>
                    <button class="st-add-cart-btn">ADD TO CART</button>
                </div>
            </div>
        </div>

        <button class="st-nav-btn st-next-btn" onclick="changeReel(1)"><i class="bi bi-chevron-right"></i></button>
    </div>
    <!-- TRENDING GIFTS - MODERN MINIMAL UI -->
    <section class="tr-products-section">
        <div class="tr-container">
            <div class="tr-top-header">
                <div class="tr-title-box">
                    <h2 class="tr-section-title">Trending Gifts</h2>
                    <p class="tr-section-subtitle">Handpicked collection of most loved gifts</p>
                </div>
                <a href="all-products.php" class="tr-view-all">View All →</a>
            </div>

            <div class="tr-carousel-container">
                <button class="tr-slider-btn prev" id="tr-btn-left"><i class="bi bi-chevron-left"></i></button>

                <div class="tr-slider-track" id="tr-trending-slider">
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/image5.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus mollitia ullam quibusdam illum assumenda qui.</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/couple-coffee-mug (1).jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/d1-pro__001-1672730208440.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/il_1080xN.4689130530_9mk1.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/DSC09787-1.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/laser-cut-wooden-rose-easy-Mothers-day-gift-idea-9-1536x2048.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/krstboommetlicht.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                    <div class="tr-product-card">
                        <div class="tr-product-image">
                            <img src="assets/images/a90054ccfc707a1f7727dd7a9112789d.jpg" alt="Product">
                            <button class="tr-wishlist-btn"><i class="bi bi-heart"></i></button>
                        </div>
                        <div class="tr-product-info">
                            <h3 class="tr-product-name">Personalized Photo Lamp</h3>
                            <div class="tr-rating">
                                <span class="stars">★★★★★</span>
                                <span class="count">(126)</span>
                            </div>
                            <div class="tr-price-row">
                                <span class="tr-old-price">₹1,499</span>
                                <span class="tr-new-price">₹999</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="tr-slider-btn next" id="tr-btn-right"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </section>
<!-- --- 5 All Products New Section --- -->
<section class="tr-ap-products-section">
    <div class="tr-ap-container">
        <div class="tr-ap-top-header">
            <div class="tr-ap-title-box">
                <h2 class="tr-ap-section-title">All Products</h2>
                <p class="tr-ap-section-subtitle">Explore our complete collection of loved gifts</p>
            </div>
        </div>

        <div class="tr-ap-grid-container" id="tr-all-products-grid">
            
            <!-- Card 1 -->
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/image5.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>

            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <div class="tr-ap-product-card">
                <div class="tr-ap-product-image">
                    <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Product">
                    <button class="tr-ap-wishlist-btn"><i class="bi bi-heart"></i></button>
                </div>
                <div class="tr-ap-product-info">
                    <h3 class="tr-ap-product-name">Personalized Photo Lamp Lorem ipsum dolor sit amet.</h3>
                    <div class="tr-ap-rating">
                        <span class="stars">★★★★★</span>
                        <span class="count">(126)</span>
                    </div>
                    <div class="tr-ap-price-row">
                        <span class="tr-ap-old-price">₹1,499</span>
                        <span class="tr-ap-new-price">₹999</span>
                    </div>
                </div>
            </div>
            <!-- यहाँ पर आप अपने बाकी के सारे कार्ड्स (12, 24, 50 जितने भी हैं) पेस्ट कर दें -->

        </div>

        <!-- Load More Button -->
        <div class="tr-ap-load-more-box">
            <button id="tr-ap-load-more-btn" class="tr-ap-load-btn">Load More Products ↓</button>
        </div>
    </div>
</section>
    <section class="wcu-section">
        <div class="wcu-container">
            <h2 class="wcu-main-title">Why Choose Us?</h2>

            <div class="wcu-grid">
                <div class="wcu-item">
                    <div class="wcu-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <div class="wcu-text">
                        <h4>Premium Quality</h4>
                        <p>Carefully selected products</p>
                    </div>
                </div>

                <div class="wcu-item">
                    <div class="wcu-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="wcu-text">
                        <h4>Secure Payment</h4>
                        <p>100% safe & secure</p>
                    </div>
                </div>

                <div class="wcu-item">
                    <div class="wcu-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <div class="wcu-text">
                        <h4>Custom Designs</h4>
                        <p>Personalized just for you</p>
                    </div>
                </div>

                <div class="wcu-item">
                    <div class="wcu-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="wcu-text">
                        <h4>Fast Shipping</h4>
                        <p>On-time gift delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gt-about-section">
        <div class="gt-container">
            <div class="gt-about-flex">

                <div class="gt-about-image">
                    <div class="gt-comparison-slider" id="gtSlider">
                        <div class="gt-img gt-after-img">
                            <img src="assets/images/Gemini_Generated_Image_ck5ildck5ildck5i.png" alt="After Engraving">
                        </div>
                        <div class="gt-img gt-before-img" id="beforeImg">
                            <img src="assets/images/Gemini_Generated_Image_zed9h2zed9h2zed9 (1).png" alt="Before Engraving">
                        </div>
                        <div class="gt-slider-handle" id="sliderHandle">
                            <div class="gt-handle-arrows"></div>
                        </div>
                    </div>
                </div>

                <div class="gt-about-content">
                    <span class="gt-subtitle">Hamari Kahani</span>
                    <h2 class="gt-title">Sirf Tohfe Nahi, Yaadein Banate Hain</h2>

                    <p class="gt-description">
                        <strong>Giftoriaa</strong> par hamara manna hai ki har tohfa ek kahani kehta hai. Hum sirf products nahi bechte, balki aapke anmol palon ko hamesha ke liye yaadgaar banane ka kaam karte hain.
                    </p>

                    <p class="gt-highlight">
                        "Hamari <strong>CO2 Laser Technology</strong> se hum har gift ko aapke jazbaaton ke hisab se personalize karte hain, taaki wo sirf ek vastu nahi balki ek ehsas ban jaye."
                    </p>

                    <div class="gt-stats">
                        <div class="gt-stat-item">
                            <strong>100%</strong>
                            <span>Personalized</span>
                        </div>
                        <div class="gt-stat-item">
                            <strong>Laser</strong>
                            <span>Precision</span>
                        </div>
                        <div class="gt-stat-item">
                            <strong>Premium</strong>
                            <span>Finish</span>
                        </div>
                    </div>

                    <!-- <a href="about.php" class="gt-about-btn">Hamare Bare Mein Aur Jane</a> -->
                </div>

            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    ?>
</body>
<script>
    // Reels ka Data (Path check kar lena!)
    const reelsData = [{
            video: 'assets/videos/12268326_1080_1920_30fps.mp4',
            name: 'Wooden Handshake Momentos',
            price: '₹1,326',
            old: '₹2,195'
        },
        {
            video: 'assets/videos/7311982-uhd_4096_2160_25fps.mp4',
            name: 'Customized Glass Bottle',
            price: '₹699',
            old: '₹899'
        },
        {
            video: 'assets/videos/7817160-hd_1080_1920_25fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/7763522-hd_1080_1920_30fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/8342150-hd_1080_1920_30fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/8861607-uhd_4096_2160_25fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/12268326_1080_1920_30fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/6929596-hd_1080_1920_30fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/8342431-hd_1080_1920_30fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/istockphoto-2195951313-640_adpp_is.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/5446639-hd_1080_1920_30fps.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        },
        {
            video: 'assets/videos/226609.mp4',
            name: 'Wooden Money Box',
            price: '₹1,500',
            old: '₹2,500'
        }


    ];

    let currentIndex = 0;

    // Modal open karne ka function
    window.openStoryPlayer = function(index) {
        currentIndex = index;
        const modal = document.getElementById('stPlayerModal');
        const video = document.getElementById('stMainVideo');

        // UI update
        updateModalUI();

        modal.style.display = 'flex';
        video.play().catch(e => console.log("Auto-play blocked, waiting for user."));
    }

    // Modal close karne ka function
    window.closeStoryPlayer = function() {
        const modal = document.getElementById('stPlayerModal');
        const video = document.getElementById('stMainVideo');
        modal.style.display = 'none';
        video.pause();
        video.src = ""; // Stop buffering
    }

    // Next/Prev button logic
    window.changeReel = function(step) {
        currentIndex += step;
        if (currentIndex >= reelsData.length) currentIndex = 0;
        if (currentIndex < 0) currentIndex = reelsData.length - 1;
        updateModalUI();
    }

    function updateModalUI() {
        const data = reelsData[currentIndex];
        const video = document.getElementById('stMainVideo');
        const name = document.getElementById('stProdName');
        const price = document.getElementById('stProdPrice');

        if (data) {
            video.src = data.video;
            name.innerText = data.name;
            price.innerHTML = `${data.price} <span class="st-old-price">${data.old}</span>`;
            video.load(); // Load new video
            video.play().catch(e => console.log("Video change failed."));
        }
    }

    // Outside click se modal close karne ke liye
    window.onclick = function(event) {
        const modal = document.getElementById('stPlayerModal');
        if (event.target == modal) {
            closeStoryPlayer();
        }
    }

    // ==================
    // horizontal scroll for desktop
    const slider = document.querySelector('.st-row');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        // Mouse ki initial position aur current scroll position save karna
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
        slider.style.scrollBehavior = 'auto'; // Drag ke waqt smooth scroll band karein for better feel
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.style.scrollBehavior = 'smooth'; // Wapas smooth scroll on
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return; // Agar click nahi kiya toh kuch mat karo
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // Scroll ki speed (2 se multiply kiya hai)
        slider.scrollLeft = scrollLeft - walk;
    });
</script>
<script>
    // 🔥 Hero Slider JavaScript - Complete Working Code
    document.addEventListener('DOMContentLoaded', function() {

        // Get all slider elements
        const slider = document.getElementById('slider');
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pagination = document.getElementById('pagination');

        let currentSlide = 0;
        let autoPlayInterval;
        const totalSlides = slides.length;

        // 🔥 Create Pagination Dots
        function createPagination() {
            pagination.innerHTML = '';
            slides.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.classList.add('dot');
                if (index === 0) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(index));
                pagination.appendChild(dot);
            });
        }

        // 🔥 Update Active Slide & Dots
        function updateSlider(index) {
            // Remove active classes
            slides.forEach(slide => slide.classList.remove('active', 'prev', 'next'));
            document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));

            // Set current slide as active
            slides[index].classList.add('active');
            document.querySelectorAll('.dot')[index].classList.add('active');

            // Set prev/next slides for smooth transition
            const prevIndex = (index - 1 + totalSlides) % totalSlides;
            const nextIndex = (index + 1) % totalSlides;

            slides[prevIndex].classList.add('prev');
            slides[nextIndex].classList.add('next');

            currentSlide = index;
        }

        // 🔥 Go to Specific Slide
        function goToSlide(index) {
            clearInterval(autoPlayInterval);
            updateSlider(index);
            startAutoPlay();
        }

        // 🔥 Next Slide
        function nextSlide() {
            const nextIndex = (currentSlide + 1) % totalSlides;
            goToSlide(nextIndex);
        }

        // 🔥 Previous Slide
        function prevSlide() {
            const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            goToSlide(prevIndex);
        }

        // 🔥 Auto Play Function
        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 5000); // 5 seconds
        }

        // 🔥 Pause Auto Play on Hover
        function pauseAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        // 🔥 Event Listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextSlide();
            if (e.key === 'ArrowLeft') prevSlide();
        });

        // Mouse/Touch Events
        slider.addEventListener('mouseenter', pauseAutoPlay);
        slider.addEventListener('mouseleave', startAutoPlay);

        // Touch Swipe Support (Mobile)
        let startX = 0;
        let endX = 0;

        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        slider.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - Next slide
                    nextSlide();
                } else {
                    // Swipe right - Previous slide
                    prevSlide();
                }
            }
        }

        // 🔥 Initialize Slider
        function initSlider() {
            createPagination();
            updateSlider(0);
            startAutoPlay();
        }

        // 🔥 Start Everything
        initSlider();

        // 🔥 Responsive Resize Handler
        window.addEventListener('resize', () => {
            clearInterval(autoPlayInterval);
            setTimeout(startAutoPlay, 200);
        });

        console.log('🎁 Giftoriaa Hero Slider Initialized! 🚀');
    });

    // 🔥 Special People Slider JS (Separate from Hero Slider)

    document.addEventListener("DOMContentLoaded", function() {

        const specialSlider = document.getElementById("Special_slider");
        const specialPrevBtn = document.getElementById("Special_prevBtn");
        const specialNextBtn = document.getElementById("Special_nextBtn");

        // Scroll amount (1 card width + gap)
        const scrollAmount = 280;

        // Next Button Click
        specialNextBtn.addEventListener("click", function() {
            specialSlider.scrollBy({
                left: scrollAmount,
                behavior: "smooth"
            });
        });

        // Previous Button Click
        specialPrevBtn.addEventListener("click", function() {
            specialSlider.scrollBy({
                left: -scrollAmount,
                behavior: "smooth"
            });
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.getElementById('tr-trending-slider');
        const btnLeft = document.getElementById('tr-btn-left');
        const btnRight = document.getElementById('tr-btn-right');

        btnRight.addEventListener('click', () => {
            // Ek baar mein 3 cards scroll honge
            track.scrollBy({
                left: track.offsetWidth / 2,
                behavior: 'smooth'
            });
        });

        btnLeft.addEventListener('click', () => {
            track.scrollBy({
                left: -track.offsetWidth / 2,
                behavior: 'smooth'
            });
        });
    });
</script>
<script>
    const c = imageslider = document.getElementById('gtSlider');
    const beforeImg = document.getElementById('beforeImg');
    const handle = document.getElementById('sliderHandle');

    // Mouse Move Event
    imageslider.addEventListener('mousemove', (e) => {
        // Slider ki position calculate karna
        let rect = imageslider.getBoundingClientRect();
        let x = e.clientX - rect.left;

        // Limits set karna (taaki handle bahar na jaye)
        if (x < 0) x = 0;
        if (x > rect.width) x = rect.width;

        // Percentage nikalna
        let position = (x / rect.width) * 100;

        // UI Update karna
        beforeImg.style.width = position + "%";
        handle.style.left = position + "%";
    });

    // Mobile Touch Support
    imageslider.addEventListener('touchmove', (e) => {
        let rect = imageslider.getBoundingClientRect();
        let x = e.touches[0].clientX - rect.left;

        if (x < 0) x = 0;
        if (x > rect.width) x = rect.width;

        let position = (x / rect.width) * 100;
        beforeImg.style.width = position + "%";
        handle.style.left = position + "%";
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const cardsPerPage = 12; // एक बार में 12 कार्ड्स (6-6 की दो लाइनें)
    const grid = document.getElementById("tr-all-products-grid");
    const cards = Array.from(grid.getElementsByClassName("tr-ap-product-card"));
    const loadMoreBtn = document.getElementById("tr-ap-load-more-btn");
    
    let currentVisibleCount = 0;

    function showNextCards() {
        // अगले 12 कार्ड्स का सेट निकालना
        const nextSet = cards.slice(currentVisibleCount, currentVisibleCount + cardsPerPage);
        
        // उन्हें क्लास देकर डिस्प्ले फ्लेक्स (शो) करना
        nextSet.forEach(card => {
            card.classList.add("tr-ap-show");
        });

        currentVisibleCount += nextSet.length;

        // अगर सारे कार्ड्स लोड हो चुके हैं या टोटल कार्ड्स 12 से कम थे, तो बटन छुपा दें
        if (currentVisibleCount >= cards.length) {
            loadMoreBtn.style.display = "none";
        }
    }

    // पेज लोड होते ही पहले 12 कार्ड्स दिखाने के लिए रन करें
    showNextCards();

    // बटन क्लिक करने पर अगले 12 कार्ड्स लोड करने का इवेंट
    loadMoreBtn.addEventListener("click", function () {
        showNextCards();
    });
});
</script>

<!-- <script>
    document.querySelectorAll(".wishlist-icon").forEach(function(icon) {
        icon.addEventListener("click", function() {
            this.classList.toggle("active");
        });
    });
</script> -->

</html>