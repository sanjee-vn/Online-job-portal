<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="styles/aboutus.css">
    <link rel="stylesheet" href="headerfooter/style.css">

</head>
<body>

<?php include 'headerfooter/header.php'; ?>

    <div class="heading">
        <h1>About Us</h1>
        <p>Trusted online job portal where dreams meet opportunity</p>
        <p>We provide a wide array of job listings, resources, and tools to help you land your dream job..</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <div class="carousel">
                    <img id="carouselImage" src="images/aboutus.jpg" alt="Slideshow Image">
                </div>
            </div>
            <div class="about-content">
                <h2>Job Nexus</h2>
                <p>At JobNexus, we believe that everyone deserves the opportunity to find a career that inspires and motivates them. We are committed to helping job seekers and employers create meaningful connections that lead to successful careers and business growth.
                    

                </p>
                <div id="more-info" style="display: none;">
                    <p>Start your journey with us today!.</p>
                </div>
    
                <!-- Button to toggle more  -->
                <button id="toggleButton">Show More</button>
            </div>
            </div>
            </section>
            </div>
<br>
<br>
<!--what we offer part -->
<div class="container">
    <h1>What we offer</h1>
    <br>
    <div class="offerings">
      <div class="for-employers">
        <h2>For Employers</h2>
        <p>Qualified candidates associated to advanced matching algorithms and applicant tracking system ensure that...</p>
      </div>
      <div class="for-job-seekers">
        <h2>For job seekers</h2>
        <p>We offer a vast database of job listings across various industries and tools on our platform are designed to support your career journey, with...</p>
      </div>
    </div>
    <div class="mission-vision">
      <div class="mission">
        <h2>Our Mission</h2>
        <p>Our mission is to streamline the job search and hiring process by providing a user-friendly...</p>
      </div>
      <div class="vision">
        <h2>Our Vision</h2>
        <p>Our vision is to innovate the job search and hiring process by providing a user-friendly platform...</p>
      </div>
    </div>
  </div>
<br>
<br>



<script src="js/aboutus.js"></script>
<?php include 'headerfooter/footer.php'; ?>

</body>
</html>
