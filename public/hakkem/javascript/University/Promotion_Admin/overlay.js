// زر لفتح Overlay الأول (التقييم)
document.querySelectorAll("#openOverlayBtn").forEach((btn) => {
    btn.addEventListener("click", () => {
        document.getElementById("feedbackOverlay").style.display = "flex";
    });
});

// زر إغلاق Overlay الأول
document.getElementById("closeOverlayBtn").addEventListener("click", () => {
    document.getElementById("feedbackOverlay").style.display = "none";
});

// زر فتح Overlay الثاني (النجوم) من داخل الأول
document.querySelectorAll("#openPopupBtn").forEach((btn) => {
    btn.addEventListener("click", () => {
        // إغلاق الأول
        document.getElementById("feedbackOverlay").style.display = "none";

        // فتح الثاني
        document.getElementById("evaluationOverlay").style.display = "flex";
    });
});

// زر إغلاق Overlay الثاني
document.getElementById("closePopupBtn").addEventListener("click", () => {
    document.getElementById("evaluationOverlay").style.display = "none";
});

// Apply functionality to all .stars elements
document.querySelectorAll(".stars").forEach((starContainer) => {
    const stars = starContainer.querySelectorAll(".star");

    stars.forEach((star, index) => {
        // Hover effect
        star.addEventListener("mouseenter", () => {
            highlightStars(stars, index);
        });

        // Remove highlight when mouse leaves
        starContainer.addEventListener("mouseleave", () => {
            resetStars(stars, starContainer.dataset.rating);
        });

        // Click to set rating
        star.addEventListener("click", () => {
            starContainer.dataset.rating = index + 1;
            highlightStars(stars, index);
        });
    });
});

// Highlight stars up to index
function highlightStars(stars, index) {
    stars.forEach((star, i) => {
        if (i <= index) {
            star.classList.add("filled");
        } else {
            star.classList.remove("filled");
        }
    });
}

// Reset stars based on saved rating
function resetStars(stars, rating) {
    stars.forEach((star, i) => {
        if (i < rating) {
            star.classList.add("filled");
        } else {
            star.classList.remove("filled");
        }
    });
}
