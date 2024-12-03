<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set the directory where resumes will be saved
    $targetDirectory = "C:/xampp/htdocs/job-portal-project/uploads"; // Use double backslashes or forward slashes

    // Check if the uploads directory exists, if not create it
    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    // Get the job ID from the form submission
    $jobId = $_POST['job_id'];

    // Get the file details
    $fileName = basename($_FILES['resume']['name']);
    $targetFilePath = $targetDirectory . "/" . $fileName; // Ensure the file path is correct
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow only certain file formats
    $allowedTypes = array('pdf', 'doc', 'docx');

    // Check if the file type is allowed
    if (in_array($fileType, $allowedTypes)) {
        // Attempt to move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $targetFilePath)) {
            // File upload successful
            echo "<div style='color: #28a745; font-weight: bold; text-align: center; margin-top: 20px;'>The file " . htmlspecialchars($fileName) . " has been uploaded successfully.</div>";
            // Optionally, save information to the database here
        } else {
            echo "<div style='color: #dc3545; font-weight: bold; text-align: center; margin-top: 20px;'>Sorry, there was an error uploading your file.</div>";
        }
    } else {
        echo "<div style='color: #dc3545; font-weight: bold; text-align: center; margin-top: 20px;'>Sorry, only PDF, DOC, and DOCX files are allowed.</div>";
    }
} else {
    echo "<div style='color: #dc3545; font-weight: bold; text-align: center; margin-top: 20px;'>Invalid request.</div>";
}
