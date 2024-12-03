<?php
include('dbconfig.php'); // Include your database connection file

// Check if an ID was provided to edit
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    // Fetch the user's current profile data
    $sql = "SELECT * FROM user_profile WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="reeditstyle.css">
    <script src="js/myscript.js"></script>
    <title> JobNexus </title>
</head>
<body>
    <div class="container">
        <h1> Edit Profile </h1>
        <div class="form-container">
            <form action="update_profile.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden field for the ID -->
                <input type="text" name="firstname" value="<?php echo isset($user['firstname']) ? $user['firstname'] : ''; ?>" placeholder="Enter your first name" required>
                <input type="text" name="lastname" value="<?php echo isset($user['lastname']) ? $user['lastname'] : ''; ?>" placeholder="Enter your last name" required>
                <input type="text" name="place" value="<?php echo isset($user['place']) ? $user['place'] : ''; ?>" placeholder="Enter your place" required>
                <input type="number" name="age" value="<?php echo isset($user['age']) ? $user['age'] : ''; ?>" placeholder="Enter your age" required>
                <input type="number" name="phonenumber" value="<?php echo isset($user['phonenumber']) ? $user['phonenumber'] : ''; ?>" placeholder="Enter your phone number" required>

                <h3>Professional Summary</h3>
                <textarea name="professional_summary" rows="4" placeholder="Describe your professional summary" required><?php echo isset($user['professional_summary']) ? $user['professional_summary'] : ''; ?></textarea>

                <h3>Work Experience</h3>
                <textarea name="work_experience" rows="4" placeholder="Describe your work experience" required><?php echo isset($user['work_experience']) ? $user['work_experience'] : ''; ?></textarea>

                <h3>Education</h3>
                <textarea name="education" rows="4" placeholder="Enter your education details" required><?php echo isset($user['education']) ? $user['education'] : ''; ?></textarea>

                <h3>Skills</h3>
                <textarea name="skills" rows="4" placeholder="Enter your skills" required><?php echo isset($user['skills']) ? $user['skills'] : ''; ?></textarea>

                <h3>Certifications & Licenses</h3>
                <textarea name="certifications" rows="4" placeholder="Enter your certifications and licenses" required><?php echo isset($user['certifications']) ? $user['certifications'] : ''; ?></textarea>

                <h3>Portfolio</h3>
                <textarea name="portfolio" rows="4" placeholder="Enter your portfolio details" required><?php echo isset($user['portfolio']) ? $user['portfolio'] : ''; ?></textarea>

                <div class="buttons" style="text-align:center; margin-top: 20px;">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
