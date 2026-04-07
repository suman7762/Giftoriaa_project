<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftoriaa Header - Mobile Fixed</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .header-container {
            background: #ffffff;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        /* 🔥 Announcement Bar - Mobile Optimized */
        .announcement-bar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 0.7rem 1rem;
            font-size: clamp(0.8rem, 2.5vw, 0.9rem);
            font-weight: 500;
            line-height: 1.4;
            overflow: hidden;
        }

        /* 🔥 Main Header - Perfect Mobile Layout */
        .main-header {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 1.2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
            gap: 1rem;
        }

        /* Logo - Responsive */
        .logo {
            font-size: clamp(1.4rem, 5vw, 1.9rem);
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            letter-spacing: -1px;
            flex-shrink: 0;
        }

        /* Desktop Nav - Hidden on Mobile */
        .nav-desktop {
            display: flex;
            align-items: center;
            gap: clamp(1.5rem, 3vw, 2.5rem);
            flex: 1;
            justify-content: center;
        }

        .nav-link {
            color: #4a5568;
            text-decoration: none;
            font-weight: 600;
            font-size: clamp(0.9rem, 2vw, 1rem);
            padding: 0.5rem 0;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2.5px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #667eea;
        }

        /* 🔥 Icons - Perfect Mobile Size */
        .header-icons {
            display: flex;
            align-items: center;
            gap: clamp(0.8rem, 2vw, 1.2rem);
            flex-shrink: 0;
        }

        .icon-btn {
            width: clamp(42px, 12vw, 48px);
            height: clamp(42px, 12vw, 48px);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: #f8fafc;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            border: 2px solid transparent;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .icon-btn:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102,126,234,0.3);
        }

        .icon-btn:hover .icon {
            filter: brightness(0) invert(1);
        }

        .icon {
            width: clamp(20px, 5vw, 24px);
            height: clamp(20px, 5vw, 24px);
            transition: all 0.3s ease;
        }

        /* 🔥 Cart Badge - Perfect Positioning */
        .cart-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            font-size: clamp(10px, 2.5vw, 12px);
            font-weight: 700;
            width: clamp(20px, 6vw, 24px);
            height: clamp(20px, 6vw, 24px);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(239,68,68,0.4);
        }

        /* 🔥 Hamburger - Perfect Mobile */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
            padding: 0.5rem;
            flex-shrink: 0;
        }

        .hamburger span {
            width: 26px;
            height: 3px;
            background: #4a5568;
            border-radius: 2px;
            transition: all 0.3s ease;
            transform-origin: center;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* 🔥 Mobile Menu - Fullscreen Overlay */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(255,255,255,0.98);
            backdrop-filter: blur(20px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2.5rem;
            transform: translateX(-100%);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 999;
            padding: 2rem;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        .mobile-nav-link {
            font-size: clamp(1.4rem, 6vw, 2rem);
            font-weight: 700;
            color: #4a5568;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .mobile-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .mobile-nav-link:hover::after {
            width: 80%;
        }

        .mobile-nav-link:hover {
            color: #667eea;
            transform: scale(1.05);
        }

        /* 🔥 Perfect Mobile Responsive */
        @media (max-width: 1024px) {
            .main-header {
                padding: 1rem 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .main-header {
                padding: 0.9rem 1.2rem;
                height: 65px;
            }

            .nav-desktop {
                display: none !important;
            }

            .hamburger {
                display: flex;
            }

            .header-icons {
                gap: 0.7rem;
            }
        }

        @media (max-width: 480px) {
            .main-header {
                padding: 0.8rem 1rem;
                height: 60px;
            }

            .announcement-bar {
                padding: 0.6rem 1rem;
                font-size: 0.8rem;
            }

            .mobile-menu {
                padding: 1.5rem;
                gap: 2rem;
            }
        }

        /* 🔥 Landscape Mobile Fix */
        @media (max-height: 500px) and (orientation: landscape) {
            .mobile-menu {
                justify-content: flex-start;
                padding-top: 4rem;
                gap: 1.5rem;
            }
        }
    </style>
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