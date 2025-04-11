// Ensure the DOM is loaded before running the script
window.addEventListener("DOMContentLoaded", () => {
    // Show feedback overlay
    document.querySelectorAll("#openOverlayBtn").forEach((btn) => {
        btn.addEventListener("click", () => {
            document.getElementById("feedbackOverlay").style.display = "flex";
        });
    });

    // Close feedback overlay
    document.getElementById("closeOverlayBtn").addEventListener("click", () => {
        document.getElementById("feedbackOverlay").style.display = "none";
    });

    // Open evaluation popup from feedback overlay
    document.querySelectorAll("#openPopupBtn").forEach((btn) => {
        btn.addEventListener("click", () => {
            document.getElementById("feedbackOverlay").style.display = "none";
            document.getElementById("evaluationOverlay").style.display = "flex";
        });
    });

    // Close evaluation overlay
    document.getElementById("closePopupBtn").addEventListener("click", () => {
        document.getElementById("evaluationOverlay").style.display = "none";
    });

    // Close overlays on background click
    window.addEventListener("click", (e) => {
        const feedbackOverlay = document.getElementById("feedbackOverlay");
        const evaluationOverlay = document.getElementById("evaluationOverlay");

        if (e.target === feedbackOverlay) {
            feedbackOverlay.style.display = "none";
        } else if (e.target === evaluationOverlay) {
            evaluationOverlay.style.display = "none";
        }
    });

    // Star rating logic
    document.querySelectorAll(".stars").forEach((starContainer) => {
        const stars = starContainer.querySelectorAll(".star");

        stars.forEach((star, index) => {
            star.addEventListener("mouseenter", () =>
                highlightStars(stars, index)
            );
            star.addEventListener("click", () => {
                starContainer.dataset.rating = index + 1;
                highlightStars(stars, index);
            });
        });

        starContainer.addEventListener("mouseleave", () => {
            resetStars(stars, starContainer.dataset.rating);
        });
    });
});

function highlightStars(stars, index) {
    stars.forEach((star, i) => {
        if (i <= index) {
            star.classList.add("filled");
        } else {
            star.classList.remove("filled");
        }
    });
}

function resetStars(stars, rating) {
    stars.forEach((star, i) => {
        if (i < rating) {
            star.classList.add("filled");
        } else {
            star.classList.remove("filled");
        }
    });
}

// Open overlay
document.getElementById("openOverlay").addEventListener("click", () => {
    document.getElementById("feedbackOverlay").style.display = "block";
});

// Close overlay
document.getElementById("closeOverlay").addEventListener("click", () => {
    document.getElementById("feedbackOverlay").style.display = "none";
});

// Optional: Close if user clicks outside the overlay content
window.addEventListener("click", (e) => {
    const overlay = document.getElementById("feedbackOverlay");
    if (e.target === overlay) {
        overlay.style.display = "none";
    }
});

document.getElementById("Open-overlay").addEventListener("click", () => {
    document.getElementById("calcoverlay").style.display = "block";
});

document.getElementById("close-Overlay").addEventListener("click", () => {
    document.getElementById("calcoverlay").style.display = "none";
});

document.querySelector(".calculate-btn").addEventListener("click", () => {
    const table = document.querySelector(".evaluation-table");
    let sum = 0;
    let count = 0;

    // نحصل على كل خلايا التذييل (tfoot) ونحسب القيم
    table.querySelectorAll("tfoot td").forEach((cell) => {
        const value = parseFloat(cell.textContent);
        if (!isNaN(value)) {
            sum += value;
            count++;
        }
    });

    const average = count > 0 ? (sum / count).toFixed(2) : "0.0";

    // نعرض النتيجة في الحقل المطلوب
    document.querySelector(".average-input").value = average;
});

document.getElementById("openDate").addEventListener("click", () => {
    document.getElementById("datePicker").showPicker(); // يدعم فقط بعض المتصفحات مثل Chrome
});

const button = document.getElementById("openDate");
const dateInput = document.getElementById("datePicker");

// لما يضغط الزر نفتح التقويم
button.addEventListener("click", () => {
    dateInput.showPicker();
});

// لما المستخدم يختار تاريخ، نغير نص الزر
dateInput.addEventListener("change", () => {
    // نعرض التاريخ بصيغة YYYY-MM-DD أو نحوله حسب الرغبة
    const selectedDate = dateInput.value;
    if (selectedDate) {
        // لو تبين شكل أجمل للتاريخ، نقدر نحوله هنا
        button.textContent = formatDate(selectedDate);
    }
});

// دالة لتنسيق التاريخ مثل: 11 أبريل 2025
function formatDate(dateStr) {
    const date = new Date(dateStr);
    const options = { day: "numeric", month: "long", year: "numeric" };
    return date.toLocaleDateString("en-GB", options); // اللغة الإنجليزية البريطانية
}
