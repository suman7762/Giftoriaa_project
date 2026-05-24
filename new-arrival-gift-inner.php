<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'includes/header.php';
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/new-arrival-gift-inner.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> <!-- <title>Document</title> -->

</head>

<body>
  <!-- =========================================
            BREADCRUMB
    ========================================= -->
  <section class="gift-breadcrumb">
    <div class="custom-container-breadcrumb">
      <div class="gift-breadcrumb-box">
        <a href="index.php">
          Home
        </a>
        <i class="bi bi-chevron-right"></i>
        <p>
          Newly Launched Products
        </p>
      </div>
    </div>
  </section>
  <section class="product-inner-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12">
  <div class="gallery-sticky-container">
    
    <div class="swiper product-thumbs-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/images/product1.jpg" alt="Thumb 1"></div>
        <div class="swiper-slide"><img src="assets/images/video-thumb.jpg" alt="Thumb 2"></div>
        <div class="swiper-slide"><img src="assets/images/image5.jpgg" alt="Thumb 3"></div>
        <div class="swiper-slide"><img src="assets/images/a90054ccfc707a1f7727dd7a9112789d.jpg" alt="Thumb 4"></div>
        <div class="swiper-slide"><img src="assets/images/DSC09787-1.jpg" alt="Thumb 5"></div>
        <div class="swiper-slide"><img src="assets/images/couple-coffee-mug (1).jpg" alt="Thumb 6"></div>
      </div>
      <div class="swiper-button-next thumb-next"></div>
      <div class="swiper-button-prev thumb-prev"></div>
    </div>

    <div class="swiper product-main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/images/4c76badddcd954267bd575615d7fcaed.jpg" alt="Gift Item">
        </div>
        <div class="swiper-slide">
          <video class="product-inner-video" controls muted autoplay loop playsinline>
            <source src="assets/videos/119849-719283263.mp4" type="video/mp4">
          </video>
        </div>
        <div class="swiper-slide">
          <img src="assets/images/Wooden-Gift-Bag-Bow-Graphics-123766854-1-580x387.jpg" alt="Gift Item 2">
        </div>
      </div>
    </div>

  </div>
</div>

        <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
          <div class="product-details-content">
            <h1 class="inner-product-title">Premium Customized Photo Frame</h1>

            <div class="inner-price-tag my-3">
              <span class="new-price-inner">₹700</span>
              <span class="old-price-inner">₹1400</span>
              <span class="discount-badge">50% OFF</span>
            </div>

            <div class="product-meta mb-4">
              <p><strong>Availability:</strong> <span class="text-success">In Stock</span></p>
              <p><strong>Category:</strong> Personalized Gifts</p>
            </div>

            <div class="description-section">
              <h4>Description</h4>
              <div class="content-text">
                <p>Yahan aapka poora detail content aayega. Desktop par ye section right side mein rahega aur agar content lamba bhi hota hai toh gallery ke sath perfectly align rahega.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, reiciendis provident fugiat nulla magnam laudantium possimus soluta repudiandae temporibus illum, molestiae natus recusandae aliquam explicabo nam cupiditate dolores sapiente ut.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo id, ipsum aspernatur quam ad quos tempore voluptatibus enim deleniti ea animi asperiores excepturi placeat explicabo illo magnam porro quidem ullam!</p>
                <ul>
                  <li>High-quality Laser Engraving</li>
                  <li>Material: Premium Acrylic</li>
                  <li>Perfect for Anniversaries & Birthdays</li>
                </ul>
              </div>
            </div>

            <div class="inner-action-btns">
              <button class="inner-buy-btn">BUY NOW</button>
              <button class="inner-whatsapp-btn">ENQUIRY ON WHATSAPP</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="acg-perfect-banner-section">
  <div class="acg-banner-fluid-container">
    <div class="acg-banner-aspect-box">
      <img src="assets/images/Gemini_Generated_Image_nimvg1nimvg1nimv.png" alt="Alight Custom Gift Products Showcase" class="acg-banner-render-img">
    </div>
  </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <?php
  include 'includes/footer.php';
  ?>
</body>
<script>
var galleryThumbs = new Swiper('.product-thumbs-slider', {
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,
  navigation: {
    nextEl: '.thumb-next',
    prevEl: '.thumb-prev',
  },
  breakpoints: {
    0: {
      direction: 'horizontal',
      spaceBetween: 10, // Mobile par image thumbnails ke beech gap
      slidesPerView: 4,
    },
    992: {
      direction: 'vertical',
      spaceBetween: 14, // 🔥 DESKTOP: Har vertical thumbnail ke beech 14px ka elegant gap
      slidesPerView: 5,
    }
  }
});

var galleryMain = new Swiper('.product-main-slider', {
  spaceBetween: 10,
  thumbs: {
    swiper: galleryThumbs
  }
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const scrollContainer = document.querySelector('.product-details-content');
    const productSection = document.querySelector('.product-inner-section');

    if (window.innerWidth > 991) {
      productSection.addEventListener('wheel', function(e) {
        const delta = e.deltaY;
        const contentScrollTop = scrollContainer.scrollTop;
        const contentHeight = scrollContainer.scrollHeight;
        const containerHeight = scrollContainer.offsetHeight;

        // 1. Check karo ki kya niche scroll karne ki jagah hai
        const canScrollDown = contentScrollTop < (contentHeight - containerHeight - 1); // -1 buffer ke liye
        // 2. Check karo ki kya upar scroll karne ki jagah hai
        const canScrollUp = contentScrollTop > 1;

        // Agar user niche scroll kar raha hai AUR content abhi baaki hai
        if (delta > 0 && canScrollDown) {
          scrollContainer.scrollTop += delta;
          e.preventDefault(); // Sirf tabhi roko jab tak content scroll ho raha hai
        }
        // Agar user upar scroll kar raha hai AUR content abhi upar baaki hai
        else if (delta < 0 && canScrollUp) {
          scrollContainer.scrollTop += delta;
          e.preventDefault();
        }

        // Agar content khatam ho gaya (Top ya Bottom), toh preventDefault nahi chalega 
        // aur browser normal scroll karke Header ya Footer dikha dega.
      }, {
        passive: false
      });
    }
  });
</script>

</html>