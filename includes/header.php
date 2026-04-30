<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftoriaa Header - Mobile Fixed</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<header class="header-container">
    <!-- 🔥 Auto Rotating Announcement -->
    <div class="announcement-bar">
        <span id="announcementText">🎁 Made in India 🇮🇳</span>
    </div>

    <div class="main-header">
        <!-- Logo -->
        <a href="#" class="logo" aria-label="Giftoriaa Home">Giftoriaa</a>

        <!-- Desktop Navigation -->
        <nav class="nav-desktop">
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">Shop</a>
            <a href="#" class="nav-link">Occasions</a>
            <a href="#" class="nav-link">Personalized</a>
            <a href="#" class="nav-link">Contact</a>
        </nav>

        <!-- Icons -->
        <div class="header-icons">
            <!-- Search -->
            <div class="icon-btn" aria-label="Search">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </div>

            <!-- Wishlist -->
            <div class="icon-btn" aria-label="Wishlist">
                <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>

            <!-- Cart -->
            <div class="icon-btn" aria-label="Cart">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM17 18c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zM2 2v2h1.1l.89 10.88c.07.78.48 1.41 1.13 1.72V20c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-1.38c.65-.31 1.06-.94 1.13-1.72L20.9 4H22V2H2zm10.17 12L12 10.83 9.83 12 11 13.17V17h2v-3.83z"/>
                </svg>
                <div class="cart-badge">3</div>
            </div>
        </div>

        <!-- 🔥 Hamburger Menu -->
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- 🔥 Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#" class="mobile-nav-link">🏠 Home</a>
        <a href="#" class="mobile-nav-link">🛍️ Shop</a>
        <a href="#" class="mobile-nav-link">🎉 Occasions</a>
        <a href="#" class="mobile-nav-link">✨ Personalized</a>
        <a href="#" class="mobile-nav-link">📞 Contact</a>
    </div>
</header>
<script>
    // 🔥 Mobile Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });

    // Close menu when clicking link
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
        });
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
        }
    });

    // 🔥 Auto Rotating Announcement Text
    const messages = [
        "🎁 Made in India 🇮🇳",
        "🌱 Eco-Friendly Gifts",
        "🚀 Support Local Makers",
        "💝 Perfect for Every Occasion",
        "🔥 Limited Time Offers",
        "✨ Handcrafted with Love"
    ];

    let currentMsg = 0;
    const announcementText = document.getElementById("announcementText");

    setInterval(() => {
        announcementText.style.opacity = '0';
        setTimeout(() => {
            currentMsg = (currentMsg + 1) % messages.length;
            announcementText.textContent = messages[currentMsg];
            announcementText.style.opacity = '1';
        }, 200);
    }, 4000);
</script>

</body>
</html>