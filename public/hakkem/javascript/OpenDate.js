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
