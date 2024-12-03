<?php
include('dbconfig.php'); 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the ID from the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // SQL query to delete the record
        $sql = "DELETE FROM user_profile WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            // Redirect back to view_profile.php after successful deletion
            header("Location: view_profile.php");
            exit; // Ensure to call exit after header redirection
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
