<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Picture</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li class="brand">Welcome to ProFileHub</li>
            <div class="nav-links">
                <li><a href="index.php">Upload Profile Picture</a></li>
                <li><a href="display.php">View Uploaded Files</a></li>
                <li><a href="aboutme.php">About Me</a></li>
            </div>
        </ul>
    </nav>
</header>
<img src="logo.png" alt="Logo" width="250" height="100">
    <h1>Let's begin </h1>
    <h2>Upload Profile Picture</h2>
    <h3> Follow the below steps to upload the profile picture:</h3>
    
        <p>1. Press the choose file button and choose a file from you computer.</p>
        <p>2. Now Click on the upload button to upload the picture.</p>
        <p>3. You can view the added profiles from the "View Uploaded Files" tab in the navigation bar.</p>
        <p>4. And to know me more click on the "About Me" tab in the navigation bar.</p>
        
</ol>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="profile_pic" required>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>
