function sendMessage() {
    const inputField = document.getElementById('user-input');
    const userMessage = inputField.value.trim();
    if (userMessage) {
        appendMessage(userMessage, 'user');
        inputField.value = '';  // Clear input field
        getBotResponse(userMessage);  // Send message to backend
    }
}

function appendMessage(message, sender) {
    const chatBox = document.getElementById('chat-box');
    const div = document.createElement('div');
    div.classList.add(sender === 'user' ? 'user-msg' : 'bot-msg');
    div.textContent = message;
    chatBox.appendChild(div);
    chatBox.scrollTop = chatBox.scrollHeight;  // Auto-scroll to latest message
}

function getBotResponse(userMessage) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "api.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            appendMessage(xhr.responseText, 'bot');
        }
    };
    xhr.send("message=" + encodeURIComponent(userMessage));
}
