// js/signin.js

document.getElementById('registerForm').addEventListener('submit', function(event) {
    // Get the values of the input fields
    const firstname = document.querySelector('input[name="firstname"]').value;
    const lastname = document.querySelector('input[name="lastname"]').value;
    const email = document.querySelector('input[name="email"]').value;
    const phonenumber = document.querySelector('input[name="phonenumber"]').value;
    const password = document.querySelector('input[name="password"]').value;
    const termsAccepted = document.getElementById('terms').checked;

    let errors = [];

    // Validate first name
    if (firstname.trim() === '') {
        errors.push("First name is required.");
    }

    // Validate last name
    if (lastname.trim() === '') {
        errors.push("Last name is required.");
    }

    // Validate email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        errors.push("Please enter a valid email address.");
    }

    // Validate phone number
    const phonePattern = /^[0-9]{10}$/; // Adjust the pattern as needed
    if (!phonenumber.match(phonePattern)) {
        errors.push("Please enter a valid phone number (10 digits).");
    }

    // Validate password
    if (password.length < 6) {
        errors.push("Password must be at least 6 characters long.");
    }

    // Check if the terms are accepted
    if (!termsAccepted) {
        errors.push("You must accept the terms and conditions.");
    }

    // If there are errors, prevent form submission and alert the user
    if (errors.length > 0) {
        event.preventDefault();
        alert(errors.join("\n"));
    }
});
