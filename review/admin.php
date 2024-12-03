<?php
$conn = mysqli_connect("localhost", "root", "", "jobnexus");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM feedbacks";
$res = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Review Display</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Review Management</h1>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>Reviewer Name</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if there are any rows returned
                    if ($res->num_rows > 0) {
                        // Fetch each row and display it
                        while($row = $res->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['Comments']}</td>
                                <td>{$row['time']}</td>
                                <td>
                                    <form method='post' action='edit.php'>
                                        <input type='hidden' name='id' value='{$row['id']}'>
                                        <button type='submit' class='btn' style='color: white; background-color:green; padding:5px 10px; border:none;'>Edit</button>
                                    </form>
                                </td>
                                <td>
                                   <form method='post' action='delete.php'>
                                       <input type='hidden' name='id' value='{$row['id']}'>
                                       <button type='submit' class='btn' style='color: white; background-color:red; padding:5px 10px; border:none;'>Delete</button>
                                   </form>
                                </td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No reviews found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
