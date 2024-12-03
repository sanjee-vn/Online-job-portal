<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbconfig.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $place = $_POST['place'];
    $age = $_POST['age'];
    $phonenumber = $_POST['phonenumber'];
    $professional_summary = $_POST['professional_summary'];
    $work_experience = $_POST['work_experience'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    $certifications = $_POST['certifications'];
    $portfolio = $_POST['portfolio'];

    // Check if an ID was sent for updating
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];

        // SQL query to update data
        $sql = "UPDATE user_profile SET 
                firstname = '$firstname', 
                lastname = '$lastname', 
                place = '$place', 
                age = '$age', 
                phonenumber = '$phonenumber', 
                professional_summary = '$professional_summary', 
                work_experience = '$work_experience', 
                education = '$education', 
                skills = '$skills', 
                certifications = '$certifications', 
                portfolio = '$portfolio' 
                WHERE id = $id";
    } else {
        // SQL query to insert data
        $sql = "INSERT INTO user_profile (firstname, lastname, place, age, phonenumber, professional_summary, work_experience, education, skills, certifications, portfolio) 
                VALUES ('$firstname', '$lastname', '$place', '$age', '$phonenumber', '$professional_summary', '$work_experience', '$education', '$skills', '$certifications', '$portfolio')";
    }

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
        // Redirect to view_profile.php after successful insertion or update
        header("Location: view_profile.php");
        exit; // Ensure to call exit after header redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
