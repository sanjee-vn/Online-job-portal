/* 
 * scripts.js 
 * Contains JavaScript code for form validation, job filtering, and UI interactions for the job portal project.
 */

// Form validation for Job Creation/Update
function validateJobForm() {
    const title = document.querySelector('input[name="title"]');
    const company = document.querySelector('input[name="company"]');
    const location = document.querySelector('input[name="location"]');
    const description = document.querySelector('textarea[name="description"]');
    const category = document.querySelector('input[name="category"]');
    const salary = document.querySelector('input[name="salary"]');

    if (title.value === '' || company.value === '' || location.value === '' ||
        description.value === '' || category.value === '' || salary.value === '') {
        alert('All fields are required!');
        return false;
    }
    return true;
}

// Attach validation function to the form submit event
const jobForm = document.querySelector('#job-form form');
if (jobForm) {
    jobForm.addEventListener('submit', function(event) {
        if (!validateJobForm()) {
            event.preventDefault();  // Prevent form submission if validation fails
        }
    });
}

// Dynamic Job Filtering on job-listing.php
const jobCards = document.querySelectorAll('.job-card');
const keywordInput = document.querySelector('input[name="keyword"]');
const locationInput = document.querySelector('input[name="location"]');
const categoryInput = document.querySelector('input[name="category"]');
const filterButton = document.querySelector('button[type="submit"]');

if (filterButton) {
    filterButton.addEventListener('click', function(event) {
        event.preventDefault();  // Prevent page reload
        const keyword = keywordInput.value.toLowerCase();
        const location = locationInput.value.toLowerCase();
        const category = categoryInput.value.toLowerCase();

        jobCards.forEach(function(card) {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const companyLocation = card.querySelector('p:nth-child(3)').textContent.toLowerCase();
            const jobCategory = card.querySelector('p:nth-child(4)').textContent.toLowerCase();

            if (title.includes(keyword) && companyLocation.includes(location) && jobCategory.includes(category)) {
                card.style.display = '';  // Show the card if it matches the filter
            } else {
                card.style.display = 'none';  // Hide the card if it doesn't match
            }
        });
    });
}

// Toggle Job Form Visibility
function toggleJobForm() {
    const formSection = document.querySelector('#job-form');
    const toggleButton = document.querySelector('#toggle-form-button');

    if (formSection.style.display === 'none' || formSection.style.display === '') {
        formSection.style.display = 'block';  // Show the form
        toggleButton.textContent = 'Hide Form';
    } else {
        formSection.style.display = 'none';  // Hide the form
        toggleButton.textContent = 'Show Form';
    }
}

// Attach event listener to the button that toggles the form
const toggleButton = document.querySelector('#toggle-form-button');
if (toggleButton) {
    toggleButton.addEventListener('click', toggleJobForm);
}
