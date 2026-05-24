document.addEventListener("DOMContentLoaded", function () {
    // Sabhi cart items ko select karein
    const cartItems = document.querySelectorAll(".cart-item");

    cartItems.forEach(item => {
        const plusBtn = item.querySelector(".plus-btn");
        const minusBtn = item.querySelector(".minus-btn");
        const qtyNumber = item.querySelector(".qty-number");
        const removeBtn = item.querySelector(".remove-btn");
        const price = parseInt(item.getAttribute("data-price"));
        const lineTotal = item.querySelector(".line-total");

        // ➕ Plus Button Action
        plusBtn.addEventListener("click", () => {
            let currentQty = parseInt(qtyNumber.textContent);
            currentQty++;
            qtyNumber.textContent = currentQty;
            
            // Single Item ki multi-price update karein
            lineTotal.textContent = "₹" + (price * currentQty);
            updateCartSummary(); // Poori card pricing refresh karein
        });

        // ➖ Minus Button Action
        minusBtn.addEventListener("click", () => {
            let currentQty = parseInt(qtyNumber.textContent);
            if (currentQty > 1) {
                currentQty--;
                qtyNumber.textContent = currentQty;
                
                lineTotal.textContent = "₹" + (price * currentQty);
                updateCartSummary(); // Poori card pricing refresh karein
            }
        });

        // 🗑️ Remove/Delete Product Button Action
        removeBtn.addEventListener("click", () => {
            if (confirm("Are you sure you want to remove this gift item?")) {
                item.remove(); // DOM element se item delete karein
                updateCartSummary(); // Delete hone ke baad price re-calculate karein
            }
        });
    });

    // 🧮 Function: Sabhi product ke rates ko jodkar final price update karna
    function updateCartSummary() {
        const remainingItems = document.querySelectorAll(".cart-item");
        let subtotal = 0;
        let totalItems = 0;

        remainingItems.forEach(item => {
            const qty = parseInt(item.querySelector(".qty-number").textContent);
            const price = parseInt(item.getAttribute("data-price"));
            subtotal += (price * qty);
            totalItems += qty;
        });

        // HTML interface change points
        document.getElementById("total-items-count").textContent = totalItems;
        document.getElementById("summary-subtotal").textContent = "₹" + subtotal;
        
        // Final Total Calculation (Abhi coupon discount 0 hai isliye direct subtotal hi total hai)
        document.getElementById("summary-total").textContent = "₹" + subtotal;

        // Agar cart bilkul khali ho jaye toh safe text show karein
        if(remainingItems.length === 0) {
            const container = document.querySelector(".cart-items-wrapper");
            container.innerHTML = `<div class="p-5 text-center text-muted">
                                    <i class="fa-solid fa-cart-shopping fa-3x mb-3" style="color: #ddd;"></i>
                                    <p class="mb-0">Your cart is empty. Let's add some love!</p>
                                   </div>`;
            document.getElementById("summary-shipping").textContent = "₹0";
            document.getElementById("summary-total").textContent = "₹0";
            document.getElementById("summary-subtotal").textContent = "₹0";
        }
    }
});