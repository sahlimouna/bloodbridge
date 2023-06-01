document.addEventListener('DOMContentLoaded', function() {
    var messageForm = document.getElementById('message-form');
    var messageInput = document.getElementById('message-input');
    var messageContainer = document.getElementById('message-container');
  
    messageForm.addEventListener('submit', function(e) {
      e.preventDefault();
  
      var senderId = document.getElementById('sender-id').value;
      var receiverId = document.getElementById('receiver-id').value;
      var message = messageInput.value;
  
      if (message.trim() !== '') {
        // Create a new message element
        var newMessage = document.createElement('div');
        newMessage.className = 'message';
        newMessage.textContent = message;
        messageContainer.appendChild(newMessage);
  
        // Send the message to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'send_message.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Message sent successfully
            messageInput.value = '';
          }
        };
        xhr.send('senderId=' + senderId + '&receiverId=' + receiverId + '&message=' + encodeURIComponent(message));
      }
    });
  });