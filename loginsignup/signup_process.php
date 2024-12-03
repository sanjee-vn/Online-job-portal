<?php
    require "AAconfig.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    
	$sql = "INSERT INTO job_seeker(SeekerId, FirstName, LastName, email, password, ContactNo) VALUES ('', '$firstname', '$lastname', '$email','$password','$phonenumber')";

        if($con->query($sql))
        {
            echo "Inserted successfully";
            header("Location: login.html");
        }
        else
        {
            echo "Error:". $con->error;
            header("Location: signup.html");
        }
        $con->close();   

?>

