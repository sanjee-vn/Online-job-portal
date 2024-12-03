<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="userprofile/style.css">
    <link rel="stylesheet" href="headerfooter/style.css">
    <title> JobNexus </title>
</head>
<body>
<?php include 'headerfooter/header.php'; ?>

<div class="profile">
    
    <h2>Sanjeevan</h2>
    <h4>@Sanjeevan</h4>
    <div class="bio">
        <p>Sri Lanka<br>Single<br>Age 25<br>Tel:0740019209</p>
    </div>
    <div class="stats">
        <div>
            <h3>40</h3>
            <p>Posts</p>
        </div>
        <div>
            <h3>2.5K</h3>
            <p>Followers</p>
        </div>
        <div>
            <h3>60</h3>
            <p>Likes</p>
        </div>
    </div>
    <div class="buttons">
        <button>Message</button>
       <button onclick="toggleFollow(this)">Follow</button>
    </div>
</div>

<div class="info-grid">
    <div class="info-box">
        <h3>Work Experience</h3>
        <p>Designed and implemented scalable backend services using Node.js and MongoDB, improving API performance by 20%.
            Developed cross-platform mobile applications using React Native, leading to a 15% increase in user engagement.
            Spearheaded the migration of legacy applications to microservices architecture, improving system flexibility and reducing maintenance costs.
            Collaborated with product managers and UX/UI designers to translate business requirements into technical specifications.
            Mentored junior developers on best coding practices and system architecture principles.</p> 
    </div>
    <div class="info-box">
        <h3>Professional summary</h3>
        <p>Software Engineer<br>
		JobNexus – Srilanka<br>
		2015 – 2024<br>
		Highly skilled and detail-oriented software engineer with over 5 years of experience designing, developing, and implementing web and mobile applications. Proficient in a wide range of programming languages and technologies, including Java, Python, JavaScript, and PHP. Passionate about solving complex technical challenges, optimizing systems for scalability, and continuously improving code quality. Adept at collaborating in dynamic, fast-paced environments and delivering high-quality software solutions.
		</p>
    </div>
    <div class="info-box">
        <h3>Education</h3>
        <p>SE BSC<br>
		Bachelor of Science in Computer Science
        University of Sydney, Australia
        Graduated: 2017

        Relevant Courses: Data Structures & Algorithms, Software Development Life Cycle, Database Management Systems, Object-Oriented Programming.
		</p>
    </div>
    <div class="info-box">
        <h3>Skills</h3>
        <p>Skills<br>
		[Ski<br>
		Java<br>
        Python<br> PHP<br> JavaScript<br> TypeScript<br> SQL<br> HTML<br> CSS.
		</p>
    </div>
    <div class="info-box">
        <h3>Certifications & Licenses</h3>
        <p>AWS Certified Solutions Architect – Associate (2023)
        <br>Certified ScrumMaster (CSM) (2022)
        <br>Oracle Certified Java Programmer (OCJP) (2021)
        <br>Google Professional Cloud Developer (2020)
		</p>
    </div>
    <div class="info-box">
        <h3>Portfolio</h3>
        <p>E-Commerce Web App <br>
            Developed a fully responsive e-commerce platform using MERN stack (MongoDB, Express, React, Node.js). Features include user authentication, product listings, shopping cart functionality, and payment gateway integration.

           <br> Mobile Expense Tracker App<br>
                Built a cross-platform mobile app using React Native and Firebase for real-time data sync. The app helps users track personal expenses, create budgets, and generate spending reports..</p>
    </div>
</div>
<div class="buttons" style="text-align:center; margin-top: 20px;">
    <button onclick="editProfile()">Edit Profile</button>
</div>

<script>
    function editProfile() {
        //  edit profile button function. 
        window.location.href = "userprofile/reedit.php";
    }

    function toggleFollow(button) {
        if (button.innerText === "Follow") {
            button.innerText = "Unfollow";
        } else {
            button.innerText = "Follow";
        }
    }
</script>
<?php include 'headerfooter/footer.php'; ?>
</body>
</html>