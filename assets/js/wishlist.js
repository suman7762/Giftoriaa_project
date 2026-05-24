document.addEventListener("DOMContentLoaded", function () {
    
    // Function: Dynamic counting indicator text refresh karne ke liye
    function updateWishlistCount() {
        const remainingItems = document.querySelectorAll(".wishlist-item-card");
        const countBadge = document.getElementById("wishlist-count");
        
        if (countBadge) {
            countBadge.textContent = remainingItems.length;
        }

        // Agar saare items delete ho jayein toh clean empty graphic feedback trigger hoga
        if (remainingItems.length === 0) {
            const gridContainer = document.getElementById("wishlist-grid");
            if (gridContainer) {
                gridContainer.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <div class="empty-wishlist-box">
                            <i class="fa-regular fa-heart fa-3x mb-3 text-muted" style="opacity: 0.4;"></i>
                            <h4 class="text-dark fw-semibold">Your Wishlist is Empty!</h4>
                            <p class="text-muted small">Explore our handcrafted custom gifts and save your favorites here.</p>
                            <a href="index.php" class="btn mt-3 px-4 py-2" style="background:#b1783f; color:#fff; font-weight:600; border-radius:0px;">CONTINUE SHOPPING</a>
                        </div>
                    </div>`;
            }
        }
    }

    // Sabhi delete buttons par click event loop attach karein
    const deleteButtons = document.querySelectorAll(".wish-delete-btn");
    
    deleteButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Button ke parent card element block (.wishlist-item-card) ko locate karein
            const productCard = this.closest(".wishlist-item-card");
            
            if (productCard) {
                if (confirm("Remove this personalized masterpiece from your wishlist?")) {
                    productCard.style.opacity = "0";
                    productCard.style.transform = "scale(0.9)";
                    
                    // Smooth transition feedback animation khatam hone par DOM element remove karein
                    setTimeout(() => {
                        productCard.remove();
                        updateWishlistCount(); // Dynamic number count function link update re-run
                    }, 300);
                }
            }
        });
    });

    // Add To Cart Triggers console confirmation (Kal ko backend connectivity integration easy karne ke liye)
    const cartButtons = document.querySelectorAll(".btn-wish-to-cart");
    cartButtons.forEach(btn => {
        btn.addEventListener("click", function() {
            const name = this.closest(".acg-wish-card").querySelector(".wish-product-name").textContent;
            alert(`"${name}" has been successfully added to your shopping cart!`);
        });
    });

});