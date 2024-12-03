<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbconfig.php'); // database connection file


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="view_profile.css"> 
</head>
<body>

<div class="container">
    <h1>User Profile</h1>
    <table>
    <?php
    $sql = "SELECT * FROM user_profile";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><h2>" . $row['firstname'] . " " . $row['lastname'] . "</h2></td>";
            echo "<td><p>Place: " . $row['place'] . "</p></td>";
            echo "<td><p>Age: " . $row['age'] . "</p></td>";
            echo "<td><p>Phone Number: " . $row['phonenumber'] . "</p></td>";
            echo "<td><p>Professional Summary: " . $row['professional_summary'] . "</p></td>";
            echo "<td><p>Work Experience: " . $row['work_experience'] . "</p></td>";
            echo "<td><p>Education: " . $row['education'] . "</p></td>";
            echo "<td><p>Skills: " . $row['skills'] . "</p></td>";
            echo "<td><p>Certifications: " . $row['certifications'] . "</p></td>";
            echo "<td><p>Portfolio: " . $row['portfolio'] . "</p></td>";
            echo '<td><a class="update-button" href="reedit.php?id=' . $row['id'] . '">Update</a></td>';

            echo '<td><a class="delete-button" href="delete_profile.php?id=' . $row['id'] . '">Delete</a></td>';
            echo "</tr>"; 
        }
    } else {
        echo "<tr><td colspan='10'>No records found</td></tr>"; // Handle no records
    }

    mysqli_close($conn);
    ?>
    </table>
</div>
<div style="text-align: center;margin-top: 20px; margin-bottom: 20px;">
        <a href="../profile.php" class="btn">Return to Profile</a>
    </div>
</body>
</html>
