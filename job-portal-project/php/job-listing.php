<?php
/*
 * job-listing.php
 * Fetches and displays job listings dynamically in a card format from the MySQL database.
 */
include('connect.php');

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/scripts.js"></script>
</head>

<body>
    <!-- Header Section -->
    <!-- header.php -->
    <header>
        <div class="logo">
            <h1>Job Nexus</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="http://localhost/online%20job%20portal/index.php">Home</a></li>
                <li><a href="http://localhost/online%20job%20portal/job-portal-project/php/job-listing.php">Job lists</a></li>
                <li><a href="http://localhost/online%20job%20portal/aboutus.php">About Us</a></li>
                <li><a href="http://localhost/online%20job%20portal/contactus.php">contact us</a></li>
            </ul>
        </nav>
        <div class="auth-links">
            <div class="dropdown">
                <button class="dropbtn">Login / Signup</button>
                <div class="dropdown-content">
                    <a href="http://localhost/online%20job%20portal/loginsignup/login.html">Login</a>
                    <a href="http://localhost/online%20job%20portal/loginsignup/signup.html">Signup</a>
                    <a href="http://localhost/online%20job%20portal/profile.php">user profile</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <form id="search-form">
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="text" name="location" placeholder="Location">
            <input type="text" name="category" placeholder="Category">
            <button type="submit">Filter</button>
        </form>

<center>

<?php  
include "addjobs.html";
?>

</center>
        <div class="job-cards">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($job = $result->fetch_assoc()): ?>
                    <div class="job-card">
                        <h3><?php echo $job['title']; ?></h3>
                        <p>Company: <?php echo $job['company']; ?></p>
                        <p>Location: <?php echo $job['location']; ?></p>
                        <p>Category: <?php echo $job['category']; ?></p>
                        <p>Salary: <?php echo $job['salary']; ?></p>
                        <br>
                        <a href="job-details.php?id=<?php echo $job['id']; ?>">View Details</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No jobs found.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- footer Section -->
    <footer>
        <div class="footer-container">
            <ul class="footer-links">
                <li><a href="http://localhost/online%20job%20portal/FAQ/faq.html">FAQs</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="termsandcondition.php">Terms and condition</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
            <div class="footer-bottom">
                <p>&copy; 2024 Job Nexus. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>