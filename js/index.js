// Add event listeners to redirect to respective pages when options are clicked
document.getElementById('job-listing').addEventListener('click', function() {
    window.location.href = 'job-portal-project/php/job-listing.php';
});

document.getElementById('employer-listing').addEventListener('click', function() {
    window.location.href = 'employerlist.php';
});

document.getElementById('career-resources').addEventListener('click', function() {
    window.location.href = 'Package.php';
});
