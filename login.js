function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password_labTech').value;

    if (username === "" || password === "") {
        alert("Please enter both username and password.");
        return false;
    }

    return true;
}
// Display welcome message
console.log("Welcome to the Blood Donation website!");

// Display thank you message after submitting the donation form
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Display thank you message
    var name = document.getElementById('fullname').value;
    var thankYouMessage = "Thank you, " + name + ", for your contribution!";
    alert(thankYouMessage);
    
    // Reset form fields
    document.getElementById('fullname').value = "";
    document.getElementById('format').selectedIndex = 0;
    document.getElementById('femail').value = "";
    document.getElementById('tel').value = "";
});

// Display confirmation message after successful donation
function displayConfirmationMessage() {
    var confirmationMessage = "Your donation was successful! Thank you for saving lives.";
    alert(confirmationMessage);
}

// Display encouraging message during the donation process
function displayEncouragingMessage() {
    var encouragingMessage = "You're making a difference! Keep up the good work.";
    console.log(encouragingMessage);
}

// Display thank you message after completing the donation process
function displayThankYouMessage() {
    var thankYouMessage = "Thank you for your time and effort. You have helped save a life.";
    console.log(thankYouMessage);
}