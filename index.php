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
        <div class="categories-wrapper">
            <button class="slider-btn prev" id="Special_prevBtn">&#10094;</button>
            <div class="categories-slider" id="Special_slider">
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?1"></div>
                    <h3 class="category-title">Brother</h3>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?2"></div>
                    <h3 class="category-title">Mom</h3>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?3"></div>
                    <h3 class="category-title">Dad</h3>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?4"></div>
                    <h3 class="category-title">Sister</h3>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?5"></div>
                    <h3 class="category-title">Couples</h3>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?6"></div>
                    <h3 class="category-title">Friends</h3>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://picsum.photos/200?7"></div>
                    <h3 class="category-title">Kids</h3>
                </div>
            </div>
            <button class="slider-btn next" id="Special_nextBtn">&#10095;</button>
        </div>
    </section>

    <!-- 🔥 3. TRENDING PRODUCTS GRID -->


    <!-- Bootstrap Icons CDN -->

    <section class="products-section">
        <h2 class="section-title">Trending Gifts</h2>
        <p class="section-subtitle">Handpicked collection of most loved gifts</p>

        <div class="products-grid">

            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="product-image">
                    <button class="wishlist-icon">
                        <i class="bi bi-heart"></i>
                    </button>
                </div>

                <div class="product-content">
                    <h3 class="product-title">
                        Customized Photo Frame with Engraving and LED Lights
                    </h3>
                    <div class="product-price">
                        <span class="old-price">₹1499</span>
                        <span class="new-price">₹700</span>
                    </div>
                    <button class="product-button">Buy Now</button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image product-bg-2">
                    <button class="wishlist-icon">
                        <i class="bi bi-heart"></i>
                    </button>
                </div>

                <div class="product-content">
                    <h3 class="product-title">
                        Personalized Ceramic Mug for Coffee Lovers
                    </h3>
                    <div class="product-price">
                        <span class="old-price">₹599</span>
                        <span class="new-price">₹299</span>
                    </div>
                    <button class="product-button">Buy Now</button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image product-bg-3">
                    <button class="wishlist-icon">
                        <i class="bi bi-heart"></i>
                    </button>
                </div>

                <div class="product-content">
                    <h3 class="product-title">
                        Enchanting LED Rose Lamp with 3D Illusion
                    </h3>
                    <div class="product-price">
                        <span class="old-price">₹1299</span>
                        <span class="new-price">₹699</span>
                    </div>
                    <button class="product-button">Buy Now</button>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="product-image product-bg-4">
                    <button class="wishlist-icon">
                        <i class="bi bi-heart"></i>
                    </button>
                </div>

                <div class="product-content">
                    <h3 class="product-title">
                        Custom Acrylic Keychain with Photo Engraving
                    </h3>
                    <div class="product-price">
                        <span class="old-price">₹399</span>
                        <span class="new-price">₹199</span>
                    </div>

                    <button class="product-button">Buy Now</button>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card">
                <div class="product-image product-bg-5">
                    <button class="wishlist-icon">
                        <i class="bi bi-heart"></i>
                    </button>
                </div>

                <div class="product-content">
                    <h3 class="product-title">
                        Luxury Chocolate Hamper with Premium Belgian Chocolates
                    </h3>
                    <div class="product-price">
                        <span class="old-price">₹1499</span>
                        <span class="new-price">₹899</span>
                    </div>

                    <button class="product-button">Buy Now</button>
                </div>
            </div>

        </div>
    </section>

    <!-- Full Width Banner Section -->
    <section class="giftoriaa-banner-section">
        <div class="giftoriaa-banner-wrapper">
            <img src="assets/images/banner-image.png" alt="Giftoriaa Banner" class="giftoriaa-banner-image">
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
    document.querySelectorAll(".wishlist-icon").forEach(function(icon) {
        icon.addEventListener("click", function() {
            this.classList.toggle("active");
        });
    });
</script>

</html>