<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Images</title>
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
    <h2>Uploaded Profile Pictures</h2>
    <?php
    include 'db.php';

    $query = "SELECT * FROM users ORDER BY uploaded_at DESC";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<img src='{$row['profile_pic']}' width='150' style='margin:10px;'>";
        }
    } else {
        echo "No images uploaded yet.";
    }

    $conn->close();
    ?>
    <br><a href="index.php">Upload Another</a>
</body>
</html>
