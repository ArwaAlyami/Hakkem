const sendBtn = document.getElementById("sendBtn");
const msgInput = document.getElementById("msgInput");
const messagesBox = document.querySelector(".chat-messages");
const fileInput = document.getElementById("fileUpload");
const tabButtons = document.querySelectorAll(".tab-btn");
const groupList = document.getElementById("groups-list");
const userList = document.getElementById("users-list");

let pendingFiles = [];
let previewContainer = null;

// ✅ اختيار الملفات - عرض معاينة بدون فتح
fileInput.addEventListener("change", function () {
    pendingFiles = Array.from(this.files);

    if (previewContainer) {
        previewContainer.remove();
    }

    previewContainer = document.createElement("div");
    previewContainer.className = "message preview";

    pendingFiles.forEach((file) => {
        const fileLabel = document.createElement("div");
        fileLabel.textContent = `📎 ${file.name}`;
        fileLabel.style.marginBottom = "5px";
        previewContainer.appendChild(fileLabel);

        if (file.type.startsWith("image/")) {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.onload = function () {
                URL.revokeObjectURL(this.src); // ✅ يمنع التحميل التلقائي
            };
            img.setAttribute("draggable", "false");
            img.style.pointerEvents = "none";
            img.style.userSelect = "none";
            img.style.maxWidth = "150px";
            img.style.borderRadius = "10px";
            img.style.marginTop = "5px";
            previewContainer.appendChild(img);
        }
    });

    messagesBox.appendChild(previewContainer);
    scrollToBottom();
});

// ✅ الإرسال عند الضغط على Send فقط
sendBtn.addEventListener("click", sendMessage);
msgInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter") sendMessage();
});

function sendMessage() {
    const text = msgInput.value.trim();

    if (text !== "") {
        const msg = document.createElement("div");
        msg.className = "message sent";
        msg.textContent = text;
        messagesBox.appendChild(msg);
        msgInput.value = "";
    }

    if (pendingFiles.length > 0) {
        pendingFiles.forEach((file) => {
            const msg = document.createElement("div");
            msg.className = "message sent";

            const fileLabel = document.createElement("div");
            fileLabel.textContent = `📎 ${file.name}`;
            fileLabel.style.marginBottom = "5px";
            msg.appendChild(fileLabel);

            if (file.type.startsWith("image/")) {
                const img = document.createElement("img");
                img.src = URL.createObjectURL(file);
                img.onload = function () {
                    URL.revokeObjectURL(this.src);
                };
                img.setAttribute("draggable", "false");
                img.style.pointerEvents = "none";
                img.style.userSelect = "none";
                img.style.maxWidth = "150px";
                img.style.borderRadius = "10px";
                img.style.marginTop = "5px";
                msg.appendChild(img);
            }

            messagesBox.appendChild(msg);
        });

        pendingFiles = [];
        fileInput.value = "";
        if (previewContainer) {
            previewContainer.remove();
            previewContainer = null;
        }
    }

    scrollToBottom();
}

// ✅ تمرير لأسفل
function scrollToBottom() {
    messagesBox.scrollTop = messagesBox.scrollHeight;
}

// ✅ التبويبات
tabButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
        tabButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        const tab = btn.getAttribute("data-tab");
        if (tab === "groups") {
            groupList.classList.remove("hidden");
            userList.classList.add("hidden");
        } else {
            userList.classList.remove("hidden");
            groupList.classList.add("hidden");
        }
    });
});

// ✅ تغيير جهة الاتصال
document.querySelectorAll(".contact").forEach((contact) => {
    contact.addEventListener("click", () => {
        document
            .querySelectorAll(".contact")
            .forEach((c) => c.classList.remove("active"));
        contact.classList.add("active");

        const name = contact.dataset.name;
        document.querySelector(".chat-name").textContent = name;

        document.querySelector(".chat-messages").innerHTML = `
      <div class="message received">Hi, this is ${name}</div>
      <div class="message sent">Hello!</div>
    `;

        scrollToBottom();
    });
});
