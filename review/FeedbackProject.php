<?php
$conn = mysqli_connect("localhost", "root", "", "jobnexus");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else{
//     echo("connected");
// }

if(isset($_GET['name'], $_GET['email'], $_GET['Comments'],$_GET['attachment'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $Comments = $_GET['Comments'];
    $attachment = $_GET['attachment'];
    
    

    $sql = "INSERT INTO feedbacks (name,email,Comments,attachment)
            VALUES ('$name', '$email', '$Comments', '$attachment')";

    if (mysqli_query($conn, $sql)) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Form fields are not set.";
}

mysqli_close($conn);


header("Location: admin.php");
exit();
?>
