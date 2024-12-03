<?php
/*
 * job-details.php
 * Displays detailed information about a job and includes CRUD operations for updating and deleting jobs.
 */
include('connect.php');
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $sql = "SELECT * FROM jobs WHERE id = $id";
    $result = $conn->query($sql);
    $job = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle add job
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $company = $_POST['company'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO jobs (title, company, location, description, category, salary) 
                VALUES ('$title', '$company', '$location', '$description', '$category', '$salary')";
        $conn->query($sql);
        header('Location: job-listing.php');
        exit();
    }

    // Handle update job
    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $company = $_POST['company'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $salary = $_POST['salary'];

        $sql = "UPDATE jobs SET title='$title', company='$company', location='$location', 
                description='$description', category='$category', salary='$salary' WHERE id=$id";
        $conn->query($sql);
        header('Location: job-listing.php');
        exit();
    }

    // Handle delete job

    if (isset($_POST['delete'])) {
        // Delete job using the job id
        $sql = "DELETE FROM jobs WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            // Redirect to job listing after deletion
            header('Location: job-listing.php');
            exit();
        } else {
            echo "Error deleting job: " . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- header.php -->
    <header>
        <div class="logo">
            <h1>Job Nexus</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="http://localhost/online%20job%20portal/index.php">Home</a></li>
                <li><a href="http://localhost/online%20job%20portal/job-portal-project/php/job-listing.php">Job Lists</a></li>
                <li><a href="http://localhost/online%20job%20portal/aboutus.php">About Us</a></li>
                <li><a href="http://localhost/online%20job%20portal/contactus.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="auth-links">
            <div class="dropdown">
                <button class="dropbtn">Login / Signup</button>
                <div class="dropdown-content">
                    <a href="http://localhost/online%20job%20portal/loginsignup/login.html">Login</a>
                    <a href="http://localhost/online%20job%20portal/loginsignup/signup.html">Signup</a>
                    <a href="http://localhost/online%20job%20portal/profile.php">User Profile</a>
                </div>
            </div>
        </div>
    </header>

    <section id="job-details">
        <?php if ($job): ?>
            <h2><?php echo htmlspecialchars($job['company']); ?></h2>
            <p>Location: <?php echo htmlspecialchars($job['location']); ?></p>
            <p><?php echo htmlspecialchars($job['description']); ?></p>
            <p>Category: <?php echo htmlspecialchars($job['category']); ?></p>
            <p>Salary: <?php echo htmlspecialchars($job['salary']); ?></p>

            <!-- Application Form -->
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="resume">Upload your resume:</label>
                <input type="file" name="resume" id="resume" required>
                <input type="hidden" name="job_id" value="<?php echo htmlspecialchars($job['id']); ?>">
                <button type="submit">Apply Now</button>
            </form>
        <?php else: ?>
            <p>Job not found.</p>
        <?php endif; ?>
    </section>

    <!-- Section for updating or deleting the job -->
    <?php if ($job): ?>
        <section id="job-form">
            <h2>Update/Delete Job</h2>
            <form action="job-details.php?id=<?php echo htmlspecialchars($job['id']); ?>" method="POST">
                <label for="title">Job Title:</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($job['title']); ?>" required>

                <label for="company">Company Name:</label>
                <input type="text" name="company" value="<?php echo htmlspecialchars($job['company']); ?>" required>

                <label for="location">Location:</label>
                <input type="text" name="location" value="<?php echo htmlspecialchars($job['location']); ?>" required>

                <label for="description">Description:</label>
                <textarea name="description" required><?php echo htmlspecialchars($job['description']); ?></textarea>

                <label for="category">Category:</label>
                <input type="text" name="category" value="<?php echo htmlspecialchars($job['category']); ?>" required>

                <label for="salary">Salary:</label>
                <input type="text" name="salary" value="<?php echo htmlspecialchars($job['salary']); ?>" required>

                <button type="submit" name="update">Update Job</button>
                <button type="submit" name="delete" onclick="return confirmDelete();">Delete Job</button>
            </form>
        </section>
    <?php endif; ?>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this job?");
        }
    </script>


    <button id="toggle-form-button">Show Form</button>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <ul class="footer-links">
                <li><a href="http://localhost/online%20job%20portal/FAQ/faq.html">FAQs</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="termsandcondition.php">Terms and Conditions</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
            <div class="footer-bottom">
                <p>&copy; 2024 Job Nexus. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>