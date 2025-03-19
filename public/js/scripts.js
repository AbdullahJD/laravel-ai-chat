document.addEventListener("DOMContentLoaded", function () {
    const chatInput = document.getElementById("chat-input");
    const sendBtn = document.getElementById("send-btn");
    const chatBody = document.querySelector(".chat-body");

    sendBtn.addEventListener("click", sendMessage);
    chatInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") sendMessage();
    });

    function sendMessage() {
        let userMessage = chatInput.value.trim();
        if (userMessage === "") return;

        // عرض رسالة المستخدم في الدردشة
        chatBody.innerHTML += `<div class="message sent">${userMessage}</div>`;
        chatInput.value = "";

        fetch("/chat/send", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ message: userMessage })
        })
        .then(response => response.json())
        .then(data => {
            chatBody.innerHTML += `<div class="message received">${data.reply}</div>`;
            chatBody.scrollTop = chatBody.scrollHeight;
        })
        .catch(error => console.error("Error:", error));
    }
});
