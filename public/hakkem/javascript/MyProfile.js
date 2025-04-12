document.addEventListener("DOMContentLoaded", function () {
    // تحديد العناصر
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const email = document.getElementById("email");
    const university = document.getElementById("university");

    const editBtn = document.querySelector(".Edit-button");
    const saveBtn = document.getElementById("saveBtn");
    const cancelBtn = document.getElementById("cancelBtn");

    // إنشاء رسائل التحذير
    const createWarning = (input, message) => {
        let warning = document.createElement("p");
        warning.className = "warning-text";
        warning.style.color = "red";
        warning.style.fontSize = "12px";
        warning.style.marginTop = "5px";
        warning.innerText = message;

        // إذا لم يكن هناك تحذير مضاف مسبقًا، أضفه
        if (!input.nextElementSibling || !input.nextElementSibling.classList.contains("warning-text")) {
            input.parentNode.appendChild(warning);
        }
    };

    // إزالة التحذير عند تصحيح المدخلات
    const removeWarning = (input) => {
        if (input.nextElementSibling && input.nextElementSibling.classList.contains("warning-text")) {
            input.nextElementSibling.remove();
        }
    };

    // منع إدخال الأرقام والرموز في حقل الأسماء والجامعة + إظهار تحذير
    function validateText(input, message) {
        let previousValue = input.value;
        input.value = input.value.replace(/[^a-zA-Z\s]/g, ''); // السماح فقط بالأحرف والمسافات

        if (previousValue !== input.value) {
            createWarning(input, message);
        } else {
            removeWarning(input);
        }
    }

    // التحقق من صحة البريد الإلكتروني + إظهار تحذير
    function validateEmail(input) {
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(input.value) && input.value !== "") {
            createWarning(input, "Please enter a valid email address.");
            input.style.border = "2px solid red";
        } else {
            removeWarning(input);
            input.style.border = "";
        }
    }

    // التحقق مما إذا كانت هناك بيانات مخزنة مسبقًا
    let storedData = JSON.parse(localStorage.getItem("userProfile")) || {};

    // تعيين القيم المخزنة مسبقًا أو إبقاء الحقول فارغة
    firstName.value = storedData.firstName || "";
    lastName.value = storedData.lastName || "";
    email.value = storedData.email || "";
    university.value = storedData.university || "";

    // نسخ القيم الأصلية عند تحميل الصفحة لأول مرة
    let originalValues = {
        firstName: firstName.value,
        lastName: lastName.value,
        email: email.value,
        university: university.value
    };

    // تفعيل التعديل عند الضغط على "Edit"
    editBtn.addEventListener("click", function () {
        enableEditing();
    });

    // حفظ البيانات عند الضغط على "Save changes"
    saveBtn.addEventListener("click", function () {
        let valid = true;

        // التحقق من صحة المدخلات
        if (!validateEmail(email)) {
            valid = false;
        }

        if (!valid) {
            alert("Please fix the errors before saving.");
            return;
        }

        // حفظ البيانات في localStorage
        let userProfile = {
            firstName: firstName.value,
            lastName: lastName.value,
            email: email.value,
            university: university.value
        };

        localStorage.setItem("userProfile", JSON.stringify(userProfile));

        // تحديث القيم الأصلية بعد الحفظ
        originalValues = { ...userProfile };

        disableEditing();
        alert("Changes saved successfully!");
    });

    // إلغاء التعديلات وإعادة القيم الأصلية عند الضغط على "Cancel"
    cancelBtn.addEventListener("click", function () {
        firstName.value = originalValues.firstName;
        lastName.value = originalValues.lastName;
        email.value = originalValues.email;
        university.value = originalValues.university;

        disableEditing();
    });

    // تمكين التعديل
    function enableEditing() {
        firstName.removeAttribute("disabled");
        lastName.removeAttribute("disabled");
        email.removeAttribute("disabled");
        university.removeAttribute("disabled");

        saveBtn.disabled = false;
        cancelBtn.disabled = false;
    }

    // تعطيل التعديل بعد الحفظ أو الإلغاء
    function disableEditing() {
        firstName.setAttribute("disabled", "true");
        lastName.setAttribute("disabled", "true");
        email.setAttribute("disabled", "true");
        university.setAttribute("disabled", "true");

        saveBtn.disabled = true;
        cancelBtn.disabled = true;
    }

    // ربط الوظائف بالحقول
    firstName.addEventListener("input", function () { validateText(firstName, "Only letters are allowed!"); });
    lastName.addEventListener("input", function () { validateText(lastName, "Only letters are allowed!"); });
    university.addEventListener("input", function () { validateText(university, "University name should contain only letters!"); });
    email.addEventListener("input", function () { validateEmail(email); });
});
document.addEventListener("DOMContentLoaded", function () {
    // تحديد العناصر بالـ ID
    const profileTab = document.getElementById("profileTab");
    const manageUsersTab = document.getElementById("manageUsersTab");

    // تحديد الحاويات
    const fieldsContainer = document.querySelector(".fields-container");
    const usersContainer = document.querySelector(".users-container");

    // تأكد أن العناصر موجودة قبل إضافة الأحداث
    if (manageUsersTab) {
        manageUsersTab.addEventListener("click", function (event) {
            event.preventDefault(); // منع إعادة تحميل الصفحة
            console.log("Manage Users Clicked!"); // اختبار التشغيل
            fieldsContainer.style.display = "none"; // إخفاء الحقول
            usersContainer.style.display = "flex"; // عرض حاوية المستخدمين
        });
    }

    if (profileTab) {
        profileTab.addEventListener("click", function (event) {
            event.preventDefault();
            console.log("Profile Clicked!"); // اختبار التشغيل
            usersContainer.style.display = "none"; // إخفاء المربعات
            fieldsContainer.style.display = "block"; // عرض الحقول
        });
    }
});

