<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftoriaa Footer</title>
    <link rel="stylesheet" href="assets/css/footer.css">

</head>
<body>
    <footer class="ft-footer">
    <div class="ft-container">
        <div class="ft-grid">
            
            <div class="ft-section ft-about">
                <a href="#" class="ft-logo">Giftoriaa</a>
                <p class="ft-tagline">Celebrate. Gift. Cherish.</p>
                <p class="ft-text">
                    We help you express your feelings with thoughtful and personalized gifts for every occasion.
                </p>
                <div class="ft-socials">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-pinterest"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="ft-section">
                <h3 class="ft-title">Quick Links</h3>
                <ul class="ft-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Return & Refund</a></li>
                </ul>
            </div>

            <div class="ft-section">
                <h3 class="ft-title">Shop by Category</h3>
                <ul class="ft-links">
                    <li><a href="#">Personalized Gift</a></li>
                    <li><a href="#">LED Lamp</a></li>
                    <li><a href="#">Desk Organizers</a></li>
                    <li><a href="#">Corporate Gift</a></li>
                    <li><a href="#">Momentos</a></li>
                    <li><a href="#">Hampers</a></li>
                </ul>
            </div>

            <div class="ft-section">
                <h3 class="ft-title">Customer Service</h3>
                <ul class="ft-links">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gift Cards</a></li>
                    <li><a href="#">Bulk Orders</a></li>
                    <li><a href="#">Corporate Enquiries</a></li>
                </ul>
            </div>

            <div class="ft-section ft-contact">
                <h3 class="ft-title">Contact Us</h3>
                <div class="ft-contact-item">
                    <i class="bi bi-telephone"></i>
                    <span>+91 98765 43210</span>
                </div>
                <div class="ft-contact-item">
                    <i class="bi bi-envelope"></i>
                    <span>support@giftoriaa.com</span>
                </div>
                <div class="ft-contact-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>123, Giftoriaa Lane, New Delhi, India - 110001</span>
                </div>
                
                <div class="ft-payment-section">
                    <p>We Accept</p>
                    <div class="ft-payment-icons">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/UPI-Logo-vector.svg" alt="UPI">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/RuPay.svg" alt="RuPay">
                    </div>
                </div>
            </div>
        </div>

        <div class="ft-bottom">
            <p>© 2024 Giftoriaa. All Rights Reserved.</p>
            <div class="ft-bottom-links">
                <a href="#">Privacy Policy</a>
                <span>|</span>
                <a href="#">Terms & Conditions</a>
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

