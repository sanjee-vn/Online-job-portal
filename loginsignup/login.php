<?php 

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    require 'AAconfig.php';

    $sql = "SELECT email, password FROM job_seeker WHERE email = '$email' AND password = '$password'";
    $result = $con->query($sql);

    session_start();
    
    if($email==="admin" && $password==="123")
    {
        $_SESSION["userName"] = $email;
        header("Location:home.html");
    }
    elseif($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
                            
        $_SESSION["userName"] = $row['email'];
        header("Location:home.html");

    }
    else 
    {
        header("Location:login.html");

    }

    $con->close();

?> 




