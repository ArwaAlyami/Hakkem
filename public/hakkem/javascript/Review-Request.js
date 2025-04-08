const steps = document.querySelectorAll(".step");
const formSteps = document.querySelectorAll(".form-step");
const nextBtns = document.querySelectorAll(".next");
const backBtns = document.querySelectorAll(".back");
const confirmBtn = document.querySelector(".confirm");

let currentStep = 0;

function updateStepProgress() {
    steps.forEach((step, index) => {
        if (index < currentStep) {
            step.classList.remove("preactive");
            step.classList.add("active");
        } else if (index === currentStep) {
            step.classList.add("preactive");
            step.classList.remove("active");
        } else {
            step.classList.remove("preactive", "active");
        }
    });
}

function showStep() {
    formSteps.forEach((step, index) => {
        step.classList.toggle("active", index === currentStep);
    });
    updateStepProgress();
}

nextBtns.forEach((button) => {
    button.addEventListener("click", () => {
        if (currentStep < formSteps.length - 1) {
            currentStep++;
            showStep();
        }
    });
});

backBtns.forEach((button) => {
    button.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            showStep();
        }
    });
});

confirmBtn.addEventListener("click", () => {
    alert("Request Completed!");
});

function displayFileName() {
    const fileInput = document.getElementById("files");
    const fileName = fileInput.files[0]
        ? fileInput.files[0].name
        : "No file selected";
    document.getElementById("file-name").textContent = fileName;
}

function profileCard() {
    var userId = document.getElementById("userId").value;
    var optionsDiv = document.getElementById("user");

    if (userId === "123") {
        // هذا مثال مبدئي، راح يختلف بعد ما ينربط بالداتابيس
        fetch("usercontainer")
            .then((response) => response.text()) // تحويله إلى نص
            .then((data) => {
                optionsDiv.innerHTML = data; // عرض المحتوى داخل div
                optionsDiv.classList.add("active");
            })
            .catch((error) => console.error("Can not upload", error));
    } else {
        optionsDiv.innerHTML = "<p>No options available for this ID</p>";
    }
}

document.getElementById("price-input").addEventListener("input", function () {
    document.getElementById("output-price").innerText = this.value;
});

function check() {
    field = document.getElementById("price-input");
    error = document.getElementById("err");
    if (!field.checkValidity()) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Price must be less than 50,000.00 SAR";
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }
    return valid;
}

showStep();
