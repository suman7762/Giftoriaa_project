<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftoriaa Footer</title>
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .footer {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
            color: #e2e8f0;
            margin-top: 5rem;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2.5rem 2rem;
        }

        /* Footer Grid */
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 2fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        /* About Section */
        .footer-section h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #ff6b9d;
            margin-bottom: 1.5rem;
            letter-spacing: -0.5px;
        }

        .about-text {
            line-height: 1.7;
            margin-bottom: 2rem;
            opacity: 0.9;
            font-size: 1rem;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #e2e8f0;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .social-icon:hover {
            background: linear-gradient(135deg, #ff6b9d 0%, #c44569 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255,107,157,0.4);
        }

        .social-icon svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        /* Quick Links & Categories */
        .footer-links {
            list-style: none;
        }

        .footer-link {
            color: #cbd5e0;
            text-decoration: none;
            display: block;
            padding: 0.6rem 0;
            font-weight: 500;
            transition: all 0.3s ease;
            opacity: 0.9;
        }

        .footer-link:hover {
            color: #ff6b9d;
            padding-left: 1rem;
            transform: translateX(5px);
        }

        /* Newsletter */
        .newsletter-section h3 {
            margin-bottom: 1.5rem;
        }

        .newsletter-text {
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        .newsletter-form {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .newsletter-input {
            flex: 1;
            padding: 1rem 1.25rem;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            background: rgba(255,255,255,0.1);
            color: white;
            font-size: 1rem;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .newsletter-input::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .newsletter-input:focus {
            outline: none;
            border-color: #ff6b9d;
            background: rgba(255,255,255,0.15);
            box-shadow: 0 0 0 3px rgba(255,107,157,0.2);
        }

        .newsletter-btn {
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #ff6b9d 0%, #c44569 100%);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .newsletter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(255,107,157,0.4);
        }

        /* Bottom Bar */
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .copyright {
            font-size: 0.95rem;
            opacity: 0.8;
        }

        .payment-icons {
            display: flex;
            gap: 0.75rem;
        }

        .payment-icon {
            width: 42px;
            height: 28px;
            border-radius: 6px;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .payment-icon:hover {
            background: rgba(255,255,255,0.25);
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .footer-container {
                padding: 3rem 1.5rem 1.5rem;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .footer-container {
                padding: 2.5rem 1rem 1rem;
            }

            .footer-section h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <!-- 4-Column Grid -->
            <div class="footer-grid">
                <!-- About Giftoriaa -->
                <div class="footer-section">
                    <h3>Giftoriaa</h3>
                    <p class="about-text">
                        Discover premium gifts for every occasion. 
                        We curate heartfelt presents that create lasting memories.
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-icon" aria-label="Facebook">
                            <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Instagram">
                            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Twitter">
                            <svg viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="footer-link">FAQ</a></li>
                        <li><a href="#" class="footer-link">Track Order</a></li>
                        <li><a href="#" class="footer-link">Shipping Policy</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="footer-link">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="footer-section">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="footer-link">Birthday</a></li>
                        <li><a href="#" class="footer-link">Anniversary</a></li>
                        <li><a href="#" class="footer-link">Wedding</a></li>
                        <li><a href="#" class="footer-link">Custom Gifts</a></li>
                        <li><a href="#" class="footer-link">Corporate</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-section newsletter-section">
                    <h3>Stay Updated</h3>
                    <p class="newsletter-text">
                        Subscribe to get special offers, 
                        free giveaways, and once-in-a-lifetime deals.
                    </p>
                    <form class="newsletter-form" id="newsletterForm">
                        <input 
                            type="email" 
                            class="newsletter-input" 
                            placeholder="Enter your email"
                            required
                        >
                        <button type="submit" class="newsletter-btn">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <div class="copyright">
                    © 2024 Giftoriaa. All rights reserved. Made with ❤️ for special moments.
                </div>
                <div class="payment-icons">
                    <div class="payment-icon" title="Visa">Visa</div>
                    <div class="payment-icon" title="Mastercard">MC</div>
                    <div class="payment-icon" title="PayPal">PayPal</div>
                    <div class="payment-icon" title="Apple Pay">Apple Pay</div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Newsletter Form Handler
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.newsletter-input').value;
            
            // Simple validation
            if (email && /\S+@\S+\.\S+/.test(email)) {
                alert('🎉 Thank you for subscribing! Check your email for a welcome gift.');
                this.reset();
            } else {
                alert('Please enter a valid email address.');
            }
        });
    </script>
</body>
</html>

