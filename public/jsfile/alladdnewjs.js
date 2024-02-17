
// username validation (register page)

document.addEventListener("DOMContentLoaded", function() {
    var usernameInput = document.getElementById('username');

    usernameInput.addEventListener('input', function() {
        var username = this.value.trim();
        var isValid = /^\d{9}$|^\d{12}$/.test(username); // Check if the input is either 9 or 12 digits long

        if (!isValid) {
            this.setCustomValidity('Username must be 9 or 12 digits long.');
            this.classList.add('is-invalid');
        } else {
            this.setCustomValidity('');
            this.classList.remove('is-invalid');
        }
    });
});


// email validation edit and create page 

function validateEmail(input) {
    var email = input.value;
    var emailError = document.getElementById("email-error");

    // Regular expression to validate email address
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;

    if (!emailRegex.test(email)) {
        emailError.style.display = "block";
        input.setCustomValidity("Invalid email address");
    } else {
        emailError.style.display = "none";
        input.setCustomValidity(""); // Reset custom validity
    }
}


// // Contact number entering validation 
// function validateContactNumber(input) {
//     var contactNumber = input.value.trim();
//     var contactNumberError = document.getElementById("contact-number-error");

//     if (!/^\d{10}$/.test(contactNumber)) {
//         contactNumberError.style.display = "block";
//     } else {
//         contactNumberError.style.display = "none";
//     }
// }

// Birth day validation
function validateDateOfBirth(input) {
    var selectedDate = new Date(input.value);
    var currentDate = new Date();

    var dateOfBirthError = document.getElementById("date-of-birth-error");

    if (selectedDate > currentDate) {
        dateOfBirthError.textContent = "Please select a date in the past";
        dateOfBirthError.style.display = "block";
    } else {
        dateOfBirthError.style.display = "none";
    }
}


 // Contact number entering validation 
function validateContactNumber(input) {
    var contactNumber = input.value.trim();
    var contactNumberError = document.getElementById("contact-number-error");

    if (!/^\d{10}$/.test(contactNumber)) {
        contactNumberError.style.display = "block";
        input.setCustomValidity("Invalid contact number");
    } else {
        contactNumberError.style.display = "none";
        input.setCustomValidity(""); // Reset custom validity
    }
}