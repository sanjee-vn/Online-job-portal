<?php 
$conn = mysqli_connect("localhost", "root", "", "jobnexus");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables to hold feedback data
$name = '';
$email = '';
$comments = '';
$id = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare the SQL select query to fetch the feedback
    $sql = "SELECT * FROM feedbacks WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        
        // Execute the statement
        if ($stmt->execute()) {
            $res = $stmt->get_result();
            if ($res->num_rows > 0) {
                // Fetch the row data
                $row = $res->fetch_assoc();
                $name = $row['name'];
                $email = $row['email'];
                $comments = $row['Comments'];
              
            } else {
                echo "No feedback found with that ID.";
            }
        } else {
            echo "Error executing query: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Feedback</title>
    <link rel="stylesheet" href="FeedbackProject.css">
    <script src="FeedbackProject.js"></script>
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h2>Edit Your Feedback</h2>
        <form method="POST" action="updateFeedback.php"> <!-- Action should point to the update handling page -->
            <div class="form-group space">
                <label>Name</label><br>
                <input type="text" placeholder="name" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label><br>
                <input type="email" placeholder="Email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="form-group">
                <label>Write your comment</label><br>
                <textarea placeholder="Comments" id="Comments" name="Comments" required><?php echo htmlspecialchars($comments); ?></textarea>
            </div>
            <div class="form-group">
                <input type="file" id="attachment" class="file-input" name="attachment">
                <label for="attachment" class="file-label">
                    <span class="file-text">Attachment</span>
                    <span class="file-button">Browse</span>
                </label>
            </div>
            
            <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Store ID for update -->
            <button type="submit" id="submit">Update Feedback</button>
        </form>
    </div>
</body>
</html>
