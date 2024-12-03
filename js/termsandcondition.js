document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('toggleButton');
    const moreInfo = document.getElementById('more-info');

    button.addEventListener('click', function() {
        // Check if the hidden content is currently displayed or not
        if (moreInfo.style.display === 'none') {
            moreInfo.style.display = 'block'; // Show hidden content
            button.textContent = 'Show Less'; // Change button text
        } else {
            moreInfo.style.display = 'none'; // Hide content
            button.textContent = 'Show More'; // Change button text back
        }
    });
});
