<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer List</title>
    <link rel="stylesheet" href="styles/employer.css"> 
    <link rel="stylesheet" href="headerfooter/Style.css">
</head>
<body>
<?php include 'headerfooter/header.php'; ?>
    <div class="container">
        <h1>Employers</h1>
        <div class="employer-list">
            
            <!-- Employer 1 -->
            <div class="employer-card">
                <h2>Company ABC</h2>
                <p><strong>Location:</strong> Sydney, Australia</p>
                <p><strong>Industry:</strong> Information Technology</p>
                <p><strong>Open Positions:</strong> 5</p>
                <a href="job-portal-project/php/job-listing.php" class="view-jobs-btn">View Jobs</a>
            </div>

            <!-- Employer 2 -->
            <div class="employer-card">
                <h2>Global Tech</h2>
                <p><strong>Location:</strong> New York, USA</p>
                <p><strong>Industry:</strong> Software Development</p>
                <p><strong>Open Positions:</strong> 8</p>
                <a href="job-portal-project/php/job-listing.php" class="view-jobs-btn">View Jobs</a>
            </div>

            <!-- Employer 3 -->
            <div class="employer-card">
                <h2>Creative Minds</h2>
                <p><strong>Location:</strong> London, UK</p>
                <p><strong>Industry:</strong> Marketing and Advertising</p>
                <p><strong>Open Positions:</strong> 3</p>
                <a href="job-portal-project/php/job-listing.php" class="view-jobs-btn">View Jobs</a>
            </div>

            <!-- Employer 4 -->
            <div class="employer-card">
                <h2>NextGen Solutions</h2>
                <p><strong>Location:</strong> Berlin, Germany</p>
                <p><strong>Industry:</strong> AI & Robotics</p>
                <p><strong>Open Positions:</strong> 12</p>
                <a href="job-portal-project/php/job-listing.php" class="view-jobs-btn">View Jobs</a>
            </div>

            <!-- Employer 5 -->
            <div class="employer-card">
                <h2>EcoTech Innovations</h2>
                <p><strong>Location:</strong> Tokyo, Japan</p>
                <p><strong>Industry:</strong> Environmental Technology</p>
                <p><strong>Open Positions:</strong> 4</p>
                <a href="job-portal-project/php/job-listing.php" class="view-jobs-btn">View Jobs</a>
            </div>

        </div>
    </div>
    <?php include 'headerfooter/footer.php'; ?>
</body>
</html>
