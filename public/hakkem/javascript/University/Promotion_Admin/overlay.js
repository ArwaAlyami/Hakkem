// Open overlay
document.getElementById("openOverlayBtn").addEventListener("click", () => {
    document.getElementById("feedbackOverlay").style.display = "block";
});

// Close overlay
document.getElementById("closeOverlayBtn").addEventListener("click", () => {
    document.getElementById("feedbackOverlay").style.display = "none";
});

// Optional: Close if user clicks outside the overlay content
window.addEventListener("click", (e) => {
    const overlay = document.getElementById("feedbackOverlay");
    if (e.target === overlay) {
        overlay.style.display = "none";
    }
});
