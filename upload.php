<?php
include 'db.php';  // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Uploader</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li class="brand">Welcome to ProFileHub</li>
            <div class="nav-links">
                <li><a href="index.php">Upload Profile Picture</a></li>
                <li><a href="upload.php">View Uploaded Files</a></li>
                <li><a href="aboutme.php">About Me</a></li>
            </div>
        </ul>
    </nav>
</header>

<?php
if (isset($_POST["submit"])) {
    $uploadDir = "uploads/";

    // Ensure uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = basename($_FILES["profile_pic"]["name"]);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allowed file types
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFilePath)) {
            // Insert file name into database
            $stmt = $conn->prepare("INSERT INTO users (name, profile_pic) VALUES (?, ?)");
            $stmt->bind_param("ss", $fileName, $targetFilePath);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
            echo "<div class='message'>File uploaded successfully! <a href='display.php'>View uploaded files</a></div>";
        } else {
            echo "<div class='message error-message'>Error uploading file.</div>";
        }
    } else {
        echo "<div class='message error-message'>Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.</div>";
    }
    
}
?>

</body>
</html>
