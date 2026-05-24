
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftoriaa Header</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", sans-serif;
            background: #f7f7f7;
            overflow-x: hidden;
            padding-top: 145px;
        }

        a {
         text-decoration:none !important;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* =========================
           HEADER
        ========================= */

        .header-container {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: #fff;
            z-index: 99999;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* =========================
           TOP BAR
        ========================= */

        .top-bar {
            background: #99612d;
            color: #fff;
            padding: 8px 30px;
            font-size: 14px;
        }

        .top-bar-content {
            max-width: 1450px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top-center {
            font-weight: 600;
        }

        /* =========================
           MAIN HEADER
        ========================= */

        .main-header {
            max-width: 1450px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
            gap: 20px;
            position: relative;
        }

        /* =========================
           LOGO
        ========================= */

        .logo-box {
            min-width: 250px;
        }

        .logo {
            font-size: 40px;
            font-weight: 700;
            color: #a66b33;
            line-height: 1;
        }

        .logo-text {
            font-size: 14px;
            color: #666;
            margin-top: 1px;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-wrapper {
            width: 48%;
            position: absolute;
            left: 47%;
            transform: translateX(-50%);
        }

        .search-box {
            width: 100%;
            height: 45px;
            border: 1px solid #dcc8b3;
            border-radius: 18px;
            background: #faf7f4;
            padding: 0 75px 0 24px;
            font-size: 17px;
            color: #555;
        }

        .search-box:focus {
            outline: none;
            background: #fff;
        }

        .search-btn {
            position: absolute;
            right: 0px;
            top: 1px;
            width: 44px;
            height: 44px;
            border: none;
            border-radius: 12px;
            background: #b1783f;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }

        /* =========================
           RIGHT ICONS
        ========================= */

        .header-icons {
            display: flex;
            align-items: center;
            gap: 35px;
            margin-left: auto;
        }

        .header-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            color: #333;
            font-size: 14px;
            cursor: pointer;
        }

        .header-item i {
            font-size: 24px;
            color: #b1783f;
        }

        /* =========================
           NAVBAR
        ========================= */

        .bottom-navbar {
            border-top: 1px solid #ececec;
            border-bottom: 1px solid #ececec;
            background: #fff;
        }

        .bottom-navbar-inner {
            max-width: 1450px;
            margin: auto;
            padding: 0 30px;
        }

        .menu {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 65px;
        }

        .menu li {
            position: relative;
        }

        .menu li a {
            display: block;
            padding: 6px 0;
            color: #444;
            font-size: 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        .menu li a:hover {
            color: #a66b33;
        }

        /* =========================
           DROPDOWN
        ========================= */

        .dropdown>a {
            display: flex !important;
            align-items: center;
            gap: 7px;
        }

        .dropdown-icon {
            font-size: 12px;
            transition: 0.3s ease;
        }

        .dropdown:hover .dropdown-icon {
            transform: rotate(180deg);
        }

        .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 210px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            padding: 10px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: 0.3s ease;
            z-index: 999;
        }

        .dropdown:hover .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .submenu li a {
            padding: 14px 20px;
            font-size: 15px;
        }

        /* =========================
           HAMBURGER
        ========================= */

        .hamburger {
            display: none;
            font-size: 28px;
            color: #a66b33;
            cursor: pointer;
        }

        /* =========================
           MOBILE MENU
        ========================= */

        .mobile-menu {
            position: fixed;
            top: 0;
            left: -100%;
            width: 280px;
            height: 100vh;
            background: #fff;
            z-index: 999999;
            transition: 0.4s;
            padding: 25px;
            overflow-y: auto;
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-close {
            font-size: 28px;
            margin-bottom: 20px;
            color: #a66b33;
            cursor: pointer;
        }

        .mobile-menu ul li a {
            display: block;
            padding: 14px 0;
            border-bottom: 1px solid #eee;
            color: #333;
            font-weight: 600;
        }

        /* =========================
           OVERLAY
        ========================= */

        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 99999;
            opacity: 0;
            visibility: hidden;
            transition: 0.3s;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:1200px) {

            .search-wrapper {
                width: 42%;
            }

            .menu {
                gap: 40px;
            }

            .header-icons {
                gap: 25px;
            }
        }

        /* =========================
           MOBILE
        ========================= */

        @media(max-width:991px) {

            body {
                padding-top: 95px;
            }

            .top-bar {
                display: none;
            }

            .bottom-navbar {
                display: none;
            }

            .main-header {
                flex-wrap: wrap;
                padding: 12px 14px;
                gap: 12px;
            }

            /* TOP ROW */

            .hamburger {
                display: block;
                order: 1;
            }

            .logo-box {
                order: 2;
                min-width: auto;
            }

            .logo {
                font-size: 28px;
            }

            .logo-text {
                display: none;
            }

            /* MOBILE ICONS SHOW */

            .header-icons {
                display: flex;
                order: 3;
                margin-left: auto;
                gap: 14px;
            }

            .header-item {
                gap: 2px;
                font-size: 10px;
            }

            .header-item i {
                font-size: 18px;
            }

            /* SEARCH FULL WIDTH */

            .search-wrapper {
                position: relative;
                width: 100%;
                left: auto;
                transform: none;
                order: 4;
            }

            .search-box {
                height: 42px;
                font-size: 14px;
                padding: 0 55px 0 14px;
                border-radius: 12px;
            }

            .search-btn {
                width: 36px;
                height: 36px;
                top: 3px;
                right: 3px;
                border-radius: 10px;
                font-size: 15px;
            }
        }

        @media(max-width:600px) {

            .main-header {
                padding: 10px 12px;
            }

            .logo {
                font-size: 24px;
            }

            .hamburger {
                font-size: 24px;
            }

            .header-icons {
                gap: 12px;
            }

            .header-item span {
                display: none;
            }

            .header-item i {
                font-size: 20px;
            }

            .search-box {
                height: 40px;
                font-size: 13px;
            }

            .search-btn {
                width: 34px;
                height: 34px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- OVERLAY -->

    <div class="overlay" id="overlay"></div>

    <!-- MOBILE MENU -->

    <div class="mobile-menu" id="mobileMenu">

        <div class="mobile-close" id="closeMenu">
            <i class="bi bi-x-lg"></i>
        </div>

        <ul>
            <li><a href="#">Personalized Gift</a></li>
            <li><a href="#">LED Lamp</a></li>
            <li><a href="#">Desk Organizers</a></li>
            <li><a href="#">Corporate Gift</a></li>
            <li><a href="#">Occasion</a></li>
            <li><a href="#">Momentos</a></li>
            <li><a href="#">Hampers</a></li>
            <li><a href="#">More</a></li>
        </ul>

    </div>

    <!-- HEADER -->

    <header class="header-container">

        <!-- TOP BAR -->

        <div class="top-bar">

            <div class="top-bar-content">

                <div>
                    🚚 FREE Delivery On Orders Above ₹999
                </div>

                <div class="top-center">
                    🎁 Handpicked With Love, Just For You
                </div>

                <div>
                    <i class="bi bi-telephone"></i>
                    +91 98765 43210
                </div>

            </div>

        </div>

        <!-- MAIN HEADER -->

        <div class="main-header">

            <!-- MOBILE BUTTON -->

            <div class="hamburger" id="openMenu">
                <i class="bi bi-list"></i>
            </div>

            <!-- LOGO -->

            <div class="logo-box">

                <div class="logo">
                    Giftoriaa
                </div>

                <div class="logo-text">
                    Celebrate. Gift. Cherish.
                </div>

            </div>

            <!-- MOBILE / DESKTOP ICONS -->

            <div class="header-icons">

                <div class="header-item">
                    <i class="bi bi-telephone"></i>
                    <span>Call</span>
                </div>

                <div class="header-item">
                    <i class="bi bi-heart"></i>
                    <span>Wishlist</span>
                </div>

                <div class="header-item">
                    <i class="bi bi-cart3"></i>
                    <span>Cart</span>
                </div>

            </div>

            <!-- SEARCH -->

            <div class="search-wrapper">

                <input type="text"
                    class="search-box"
                    placeholder="Search for gifts, brands & more..." />

                <button class="search-btn">
                    <i class="bi bi-search"></i>
                </button>

            </div>

        </div>

        <!-- NAVBAR -->

        <div class="bottom-navbar">

            <div class="bottom-navbar-inner">

                <ul class="menu">

                    <li>
                        <a href="#">Personalized Gift</a>
                    </li>

                    <li>
                        <a href="#">LED Lamp</a>
                    </li>

                    <li>
                        <a href="#">Desk Organizers</a>
                    </li>

                    <li class="dropdown">
                        <a href="#">
                            Corporate Gift
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                        </a>

                        <ul class="submenu">

                            <li><a href="#">Employee Gifts</a></li>
                            <li><a href="#">Client Gifts</a></li>
                            <li><a href="#">Festival Gifts</a></li>
                            <li><a href="#">Bulk Orders</a></li>

                        </ul>

                    </li>

                    <li class="dropdown">

                        <a href="#">
                            Occasion
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                        </a>

                        <ul class="submenu">

                            <li><a href="#">Diwali</a></li>
                            <li><a href="#">Holi Gifts</a></li>
                            <li><a href="#">New Year</a></li>

                        </ul>

                    </li>

                    <li>
                        <a href="#">Momentos</a>
                    </li>

                    <li>
                        <a href="#">Hampers</a>
                    </li>

                    <li class="dropdown">

                        <a href="#">
                            More
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                        </a>

                        <ul class="submenu">

                            <li><a href="#">Birthday Gifts</a></li>
                            <li><a href="#">Anniversary</a></li>
                            <li><a href="#">Wedding Gifts</a></li>
                            <li><a href="#">Custom Gifts</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </header>

    <!-- JS -->

    <script>

        const openMenu = document.getElementById("openMenu");
        const closeMenu = document.getElementById("closeMenu");
        const mobileMenu = document.getElementById("mobileMenu");
        const overlay = document.getElementById("overlay");

        openMenu.addEventListener("click", () => {
            mobileMenu.classList.add("active");
            overlay.classList.add("active");
        });

        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.remove("active");
            overlay.classList.remove("active");
        });

        overlay.addEventListener("click", () => {
            mobileMenu.classList.remove("active");
            overlay.classList.remove("active");
        });

    </script>

</body>

</html>

