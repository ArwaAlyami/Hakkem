document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".sidebar ul li");

    sidebarLinks.forEach(link => {
        link.addEventListener("click", function () {
            // إزالة النمط النشط عن جميع العناصر
            sidebarLinks.forEach(li => {
                li.classList.remove("active");
                li.style.borderLeft = "none";
                li.style.outline = "none";
                li.querySelector("img").style.filter = "none";
                li.querySelector("a").style.color = "#333";
            });

            // تفعيل العنصر النشط الجديد
            this.classList.add("active");
            this.style.borderLeft = "5px solid rgb(10, 96, 60)";
            this.style.outline = "1px solid rgb(10, 96, 60)";;
            this.querySelector("img").style.filter = "grayscale(100%) brightness(50%)";
            this.querySelector("a").style.color = "#555";
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // الحصول على جميع عناصر القائمة في السايد بار
    const sidebarLinks = document.querySelectorAll(".sidebar ul li a");

    // الحصول على رابط الصفحة الحالية
    const currentPage = window.location.href;

    // التحقق من كل رابط في السايد بار
    sidebarLinks.forEach(link => {
        if (currentPage.includes(link.getAttribute("href"))) {
            // إزالة active من جميع العناصر
            document.querySelectorAll(".sidebar ul li").forEach(li => {
                li.classList.remove("active");
            });

            // إضافة active إلى العنصر المطابق للصفحة
            link.parentElement.classList.add("active");
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // جلب جميع عناصر القائمة الجانبية
    const sidebarItems = document.querySelectorAll(".sidebar-item");
    const dynamicContent = document.getElementById("dynamic-content");

    // تحديد المحتوى لكل صفحة
    const pages = {
        "My Profile": `
            <button class="Edit-button" id="editBtn">
                <img src="../../../../public/images/University/Edit icon.png" alt="Edit"> Edit
            </button>
            <div class="input-row">
                <div>
                    <label>First Name:</label>
                    <input type="text" id="firstName" placeholder="Enter your first name" disabled>
                </div>
                <div>
                    <label>Last Name:</label>
                    <input type="text" id="lastName" placeholder="Enter your last name" disabled>
                </div>
            </div>
            <div class="input-row">
                <div>
                    <label>Email:</label>
                    <input type="email" id="email" placeholder="example@email.com" disabled>
                </div>
                <div>
                    <label>University:</label>
                    <input type="text" id="university" placeholder="Enter your university name" disabled>
                </div>
            </div>
            <div class="buttons">
                <button id="saveBtn" disabled>Save changes</button>
                <button id="cancelBtn" disabled>Cancel</button>
            </div>
        `,
        "Manage Users": `
            <h2>Manage Users</h2>
            <div class="users-container">
                <div class="user-box">
                    <p>User 1</p>
                    <button class="user-btn">Edit</button>
                </div>
                <div class="user-box">
                    <p>User 2</p>
                    <button class="user-btn">Edit</button>
                </div>
            </div>
        `
    };

    // تعيين الحدث لكل عنصر في السايد بار
    sidebarItems.forEach(item => {
        item.addEventListener("click", function () {
            // إزالة اللون الرمادي من جميع الأزرار
            sidebarItems.forEach(i => i.classList.remove("active"));

            // إضافة اللون الرمادي للزر الحالي
            this.classList.add("active");

            // الحصول على اسم الزر (النص الداخلي)
            const pageName = this.innerText.trim();

            // تحديث المحتوى بناءً على الزر المختار
            if (pages[pageName]) {
                dynamicContent.innerHTML = pages[pageName];
            }
        });
    });

    // عرض "My Profile" عند فتح الصفحة أول مرة
    document.querySelector(".sidebar-item.active")?.click();
});
document.addEventListener("DOMContentLoaded", function () {
    // جلب جميع عناصر السايد بار
    const sidebarItems = document.querySelectorAll(".sidebar-item");
    const dynamicContent = document.getElementById("dynamic-content");

    // تعريف محتوى كل صفحة
    const pages = {
        "My Profile": `
            <button class="Edit-button" id="editBtn">
                <img src="../../../../public/images/University/Edit icon.png" alt="Edit"> Edit
            </button>
            <div class="input-row">
                <div>
                    <label>First Name:</label>
                    <input type="text" id="firstName" placeholder="Enter your first name" disabled>
                </div>
                <div>
                    <label>Last Name:</label>
                    <input type="text" id="lastName" placeholder="Enter your last name" disabled>
                </div>
            </div>
            <div class="input-row">
                <div>
                    <label>Email:</label>
                    <input type="email" id="email" placeholder="example@email.com" disabled>
                </div>
                <div>
                    <label>University:</label>
                    <input type="text" id="university" placeholder="Enter your university name" disabled>
                </div>
            </div>
            <div class="buttons">
                <button id="saveBtn" disabled>Save changes</button>
                <button id="cancelBtn" disabled>Cancel</button>
            </div>
        `,
        "Manage Users": `

            <div class="users-container">
                <div class="user-box">
                    <h3>Create User</h3>
                    <p>Create accounts for employees in your University</p>
                    <button class="user-btn">Create</button>
                </div>
                <div class="user-box">
                    <h3>Alter User Info</h3>
                    <p>Change the Academic Rank of Faculty Members</p>
                    <button class="user-btn">Change</button>
                </div>
                <div class="user-box">
                    <h3>Grant Permission</h3>
                    <p>Grant permissions to employees in your University</p>
                    <button class="user-btn">Give</button>
                </div>
                <div class="user-box">
                    <h3>View Department</h3>
                    <p>View departments of your University</p>
                    <button class="user-btn">View</button>
                </div>
                <div class="user-box">
                    <h3>Delete Accounts</h3>
                    <p>Delete accounts belonging to your University</p>
                    <button class="user-btn">Delete</button>
                </div>
            </div>
        `,
        "ChangePassword": `
        <div class="change-password-container">

            <div class="input-row">
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword">
            </div>

            <div class="input-row">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword">
            </div>

            <div class="input-row">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword">
            </div>

            <p id="password-error" class="error-message" style="color: red; display: none;">Passwords do not match!</p>

            <div class="buttons">
                <button class="user-btn" onclick="validatePassword()">Save</button>
                <button class="user-btn cancel-btn" onclick="cancelChange()">Cancel</button>
            </div>
        </div>
    `
        ,
        "Delete Account": "<h2>Delete Account</h2><p>Proceed with caution when deleting your account.</p>",
        "Sign Out": "<h2>Sign Out</h2><p>You have successfully signed out.</p>"
    };

    // تعيين الحدث لكل زر في السايد بار
    sidebarItems.forEach(item => {
        item.addEventListener("click", function () {
            // إزالة الـ active من كل الأزرار
            sidebarItems.forEach(i => i.classList.remove("active"));

            // تفعيل الـ active على الزر الحالي
            this.classList.add("active");

            // استخراج اسم الصفحة من نص الزر
            const pageName = this.innerText.trim();

            // تحديث المحتوى بناءً على الزر المختار
            if (pages[pageName]) {
                dynamicContent.innerHTML = pages[pageName];
            }
        });
    });

    // تعيين الصفحة الافتراضية عند تحميل الموقع
    document.querySelector(".sidebar-item.active")?.click();
});
// دالة تفتح البوب أب وتغير لون الزر إلى رمادي
function openPopup() {
    document.getElementById("deleteAccountPopup").style.display = "flex";
    document.getElementById("deleteAccountBtn").style.background = "gray";
    document.getElementById("deleteAccountBtn").disabled = true;
}

// دالة تقفل البوب أب وترجع لون الزر زي ما كان
function closePopup() {
    document.getElementById("deleteAccountPopup").style.display = "none";
    document.getElementById("deleteAccountBtn").style.background = "#0b3322";
    document.getElementById("deleteAccountBtn").disabled = false;
}

// دالة تتحقق من الإدخال وتسمح بس بالأرقام
function validateInput() {
    let inputField = document.getElementById("userIdInput");
    let errorMessage = document.getElementById("error-message");

    if (!/^\d*$/.test(inputField.value)) {
        errorMessage.style.display = "block";
        inputField.value = inputField.value.replace(/\D/g, "");
    } else {
        errorMessage.style.display = "none";
    }
}

// دالة لحذف الحساب وإظهار رسالة نجاح
function deleteAccount() {
    let userId = document.getElementById("userIdInput").value;
    let successMessage = document.getElementById("success-message");
    let errorMessage = document.getElementById("error-message");

    if (userId.trim() === "") {
        alert("Please enter a user ID before deleting!");
        return;
    }

    // هنا كود محاكاة حذف الحساب، بدلًا من الاتصال بالسيرفر
    setTimeout(() => {
        successMessage.style.display = "block"; // إظهار رسالة النجاح
        errorMessage.style.display = "none"; // إخفاء أي رسالة خطأ لو كانت ظاهرة
        document.getElementById("userIdInput").value = ""; // مسح حقل الإدخال بعد الحذف

        // إغلاق البوب أب بعد 3 ثواني من ظهور الرسالة
        setTimeout(() => {
            closePopup();
            successMessage.style.display = "none"; // إخفاء الرسالة بعد إغلاق البوب أب
        }, 3000);
    }, 1000);
}
//  دالة تفتح البوب أب لانشاء حساب مستخدم
function openCreateUserPopup() {
    document.getElementById("createUserPopup").style.display = "flex";
}

// دالة تقفل البوب أب
function closeCreateUserPopup() {
    document.getElementById("createUserPopup").style.display = "none";
}

// التحقق من إن الاسم فيه حروف بس
function validateName() {
    let nameField = document.getElementById("fullName");
    let nameError = document.getElementById("name-error");

    if (!/^[a-zA-Z\s]*$/.test(nameField.value)) {
        nameError.style.display = "block";
        nameField.value = nameField.value.replace(/[^a-zA-Z\s]/g, "");
    } else {
        nameError.style.display = "none";
    }
}

// التحقق من تطابق الباسورد وتأكيده
function checkPasswordMatch() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let passwordError = document.getElementById("password-error");

    if (password !== confirmPassword) {
        passwordError.style.display = "block";
    } else {
        passwordError.style.display = "none";
    }
}

// حفظ بيانات المستخدم
function saveUser() {
    let name = document.getElementById("fullName").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let department = document.getElementById("department").value;
    let academicRank = document.getElementById("academicRank").value;
    let permissions = [];

    document.querySelectorAll("input[type='checkbox']:checked").forEach((checkbox) => {
        permissions.push(checkbox.value);
    });

    if (name.trim() === "" || email.trim() === "" || password.trim() === "" || department === "") {
        alert("All fields are required!");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    // محاكاة حفظ البيانات
    setTimeout(() => {
        document.getElementById("success-message").style.display = "block";

        setTimeout(() => {
            closeCreateUserPopup();
            document.getElementById("success-message").style.display = "none";
        }, 2000);
    }, 500);
}
