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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* 🔥 1. HERO SLIDER SECTION */
        .hero-section {
            position: relative;
            width: 100%;
            height: 60vh;
            min-height: 400px;
            overflow: hidden;
        }

        .slider-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
        }

        .slide.prev {
            transform: translateX(-100%);
        }

        .slide.next {
            transform: translateX(100%);
        }

        /* Slider Content Overlay */
        .slide-content {
            position: absolute;
            bottom: 20%;
            left: 8%;
            color: white;
            max-width: 500px;
            z-index: 3;
        }

        .slide-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0,0,0,0.5);
            line-height: 1.2;
        }

        .slide-subtitle {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            margin-bottom: 2rem;
            opacity: 0.95;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 10px 30px rgba(240,147,251,0.4);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(240,147,251,0.6);
        }

        /* Navigation Arrows */
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(52, 51, 63, 0.2);
            backdrop-filter: blur(10px);
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 5;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-arrow:hover {
            background: rgba(255,255,255,0.4);
            transform: translateY(-50%) scale(1.1);
        }

        .prev-arrow {
            left: 3%;
        }

        .next-arrow {
            right: 3%;
        }

        /* Pagination Dots */
        .pagination {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 5;
        }

        .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.3);
            box-shadow: 0 0 10px rgba(255,255,255,0.8);
        }

        /* 🔥 2. CIRCULAR CATEGORIES SECTION */
        .categories-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            text-align: center;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 1rem;
            position: relative;
        }

        .section-subtitle {
            font-size: 1.3rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto 4rem;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .category-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            padding: 2rem 1rem;
        }

        .category-image {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: white;
            margin-bottom: 1.5rem;
            box-shadow: 0 20px 40px rgba(102,126,234,0.3);
            transition: all 0.4s ease;
            border: 5px solid rgba(255,255,255,0.8);
        }

        .category-card:hover .category-image {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 30px 60px rgba(102,126,234,0.5);
            border-color: rgba(255,255,255,1);
        }

        .category-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2d3748;
            margin-top: 0.5rem;
        }

        /* 🔥 3. PRODUCT GRID SECTION */
        .products-section {
            padding: 5rem 2rem;
            background: white;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            border: 1px solid rgba(255,255,255,0.5);
        }

        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 80px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }

        .product-card:hover .product-image::before {
            left: 100%;
        }

        .product-content {
            padding: 1.8rem;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 0.8rem;
            line-height: 1.4;
        }

        .product-description {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .product-price {
            font-size: 1.6rem;
            font-weight: 700;
            color: #f59e0b;
            margin-bottom: 1.5rem;
        }

        .product-button {
            width: 100%;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .product-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(16,185,129,0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                height: 50vh;
                min-height: 350px;
            }

            .categories-section,
            .products-section {
                padding: 3rem 1.5rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 480px) {
            .main-header {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- 🔥 1. MAIN HERO SLIDER -->
    <section class="hero-section">
        <div class="slider-container" id="slider">
            <!-- Slide 1 -->
            <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1400&h=800&fit=crop');">
                <div class="slide-content">
                    <h1 class="slide-title">Perfect Gifts</h1>
                    <p class="slide-subtitle">For every special moment in life</p>
                    <a href="#" class="cta-button">Shop Now</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1608043152268-8fc2d8d6f576?w=1400&h=800&fit=crop');">
                <div class="slide-content">
                    <h1 class="slide-title">Personalized Gifts</h1>
                    <p class="slide-subtitle">Make it special with your touch</p>
                    <a href="#" class="cta-button">Explore</a>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=1400&h=800&fit=crop');">
                <div class="slide-content">
                    <h1 class="slide-title">Birthday Special</h1>
                    <p class="slide-subtitle">Surprise your loved ones</p>
                    <a href="#" class="cta-button">View Gifts</a>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1517457373958-b7bdd4587206?w=1400&h=800&fit=crop');">
                <div class="slide-content">
                    <h1 class="slide-title">Wedding Gifts</h1>
                    <p class="slide-subtitle">Celebrate love & togetherness</p>
                    <a href="#" class="cta-button">Discover</a>
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=1400&h=800&fit=crop');">
                <div class="slide-content">
                    <h1 class="slide-title">Corporate Gifts</h1>
                    <p class="slide-subtitle">Perfect for your team</p>
                    <a href="#" class="cta-button">Shop Corporate</a>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="nav-arrow prev-arrow" id="prevBtn">‹</button>
        <button class="nav-arrow next-arrow" id="nextBtn">›</button>

        <!-- Pagination Dots -->
        <div class="pagination" id="pagination"></div>
    </section>

    <!-- 🔥 2. CIRCULAR CATEGORIES -->
    <section class="categories-section">
        <h2 class="section-title">Gifts for Special People</h2>
        <p class="section-subtitle">Find the perfect gift for your loved ones</p>
        
        <div class="categories-grid">
            <div class="category-card">
                <div class="category-image">👨</div>
                <h3 class="category-title">For Brother</h3>
            </div>
            <div class="category-card">
                <div class="category-image">👩</div>
                <h3 class="category-title">For Mom</h3>
            </div>
            <div class="category-card">
                <div class="category-image">👨‍🦳</div>
                <h3 class="category-title">For Dad</h3>
            </div>
            <div class="category-card">
                <div class="category-image">👧</div>
                <h3 class="category-title">For Sister</h3>
            </div>
            <div class="category-card">
                <div class="category-image">💑</div>
                <h3 class="category-title">For Couples</h3>
            </div>
        </div>
    </section>

    <!-- 🔥 3. TRENDING PRODUCTS GRID -->
    <section class="products-section">
        <h2 class="section-title" style="text-align: center; margin-bottom: 1rem;">Trending Gifts</h2>
        <p class="section-subtitle" style="text-align: center; max-width: 600px; margin: 0 auto 4rem;">Handpicked collection of most loved gifts</p>
        
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-content">
                    <h3 class="product-title">Customized Photo Frame</h3>
                    <p class="product-description">Personalized wooden frame with LED lights and engraving</p>
                    <div class="product-price">₹499</div>
                    <button class="product-button">Add to Cart</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                <div class="product-content">
                    <h3 class="product-title">Personalized Mug</h3>
                    <p class="product-description">11oz ceramic mug with sublimation print - dishwasher safe</p>
                    <div class="product-price">₹299</div>
                    <button class="product-button">Buy Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                <div class="product-content">
                    <h3 class="product-title">LED Rose Lamp</h3>
                    <p class="product-description">3D illusion lamp with romantic rose design - 7 colors</p>
                    <div class="product-price">₹699</div>
                    <button class="product-button">Add to Cart</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);"></div>
                <div class="product-content">
                    <h3 class="product-title">Custom Keychain</h3>
                    <p class="product-description">Acrylic keychain with photo and name engraving</p>
                    <div class="product-price">₹199</div>
                    <button class="product-button">Buy Now</button>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-image" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);"></div>
                <div class="product-content">
                    <h3 class="product-title">Chocolate Hamper</h3>
                    <p class="product-description">Premium Belgian chocolates in luxury gift box</p>
                    <div class="product-price">₹899</div>
                    <button class="product-button">Add to Cart</button>
                </div>
            </div>
        </div>
    
    </section>
    <?php
   include 'includes/footer.php';
   ?>
</body>
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
</script>
</html>
           