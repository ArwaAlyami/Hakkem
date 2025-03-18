// سكربت لاخفاء كلمة المرور
function togglePassword() {
  var passwordInput = document.getElementById("password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}

function redirectToNextPage() {
  window.location.href = "/HTML/MainPages/HOME/Home.html";
}
function validateEmail() {
  var emailInput = document.getElementById("email");
  var emailError = document.getElementById("emailError");
  var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  if (!emailPattern.test(emailInput.value) && emailInput.value !== "") {
    emailError.textContent =
      "Invalid email format. Example: example@domain.com";
    emailError.style.display = "block";
  } else {
    emailError.style.display = "none";
  }
}

// ---------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
  let qualificationSelect = document.getElementById("qualification");
  let bachelorField = document.getElementById("bachelor");
  let masterField = document.getElementById("master");
  let phdField = document.getElementById("phd");

  // تعطيل جميع الحقول عند تحميل الصفحة
  bachelorField.disabled = true;
  masterField.disabled = true;
  phdField.disabled = true;

  qualificationSelect.addEventListener("change", function () {
    let selectedValue = qualificationSelect.value;

    // تعطيل جميع الحقول أولًا
    bachelorField.disabled = true;
    masterField.disabled = true;
    phdField.disabled = true;

    if (selectedValue === "Bachelor") {
      bachelorField.disabled = false; // تفعيل البكالوريوس
    } else if (selectedValue === "Master") {
      bachelorField.disabled = false; // تفعيل البكالوريوس
      masterField.disabled = false; // تفعيل الماجستير
    } else if (selectedValue === "PhD") {
      bachelorField.disabled = false; // تفعيل البكالوريوس
      masterField.disabled = false; // تفعيل الماجستير
      phdField.disabled = false; // تفعيل الدكتوراه
    }
  });
});
