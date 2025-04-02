<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Ada Gupta</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 10;
            color: white;
        }
        nav {
    background-color:rgb(135, 135, 255);
    border-radius: 30px;
    padding: 10px;
    margin-top: 9px;
    margin: 6px

}

nav ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
   
}

.brand {
    color: white;
    font-size: 18px;
}

.nav-links {
    display: flex;
    gap: 20px; /* Spacing between links */
}

.nav-links li {
    list-style: none;
}

.nav-links li a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
}

.nav-links li a:hover {
    background-color: rgb(84, 84, 252);

}
        .container {
            max-width: 1050px;
            background: rgb(135, 135, 255);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }
        h1, h2, h3, h4 {
            color: white;
        }
        img {
            border-radius: 10px;
            box-shadow: 0 0 5px gray;
            margin: 10px;
            width: 250px;
            height: auto;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        .container ul li {
    background: rgb(95, 95, 253);
    margin: 6px 0;
    padding: 10px;
    border-radius: 5px;
    font-weight: bold;
}
        button {
            background: rgb(135, 135, 255);
            color: black;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: rgb(95, 95, 253);
        }
    </style>
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
    <div class="container">
        <h1>Ada Gupta</h1>
        <img src="IMG1.jpg" alt="Ada Gupta">
        <h2>Cybersecurity Enthusiast </h2>
        <p>
            I am an aspiring cybersecurity student currently pursuing an Integrated B.Sc. + M.Sc. in Cyber Security at Karnavati University. 
            My expertise lies in digital security, ethical hacking, and data protection. Passionate about safeguarding online ecosystems, I continuously explore emerging security trends and technologies.
        </p>
        <h3>Key Interests:</h3>
        <ul>
            <li>Cyber Threat Intelligence & Data Security</li>
            <li>Cloud Computing & Google Cloud Security</li>
            <li>Critical Thinking & Ethical Hacking</li>
            <li>Cyber Risk Assessment & Vulnerability Analysis</li>
        </ul>
        
        <h4>Connect with Me:</h4>
        <p>
            <a href="https://www.linkedin.com/in/ada-gupta-06252428a/" target="_blank">LinkedIn Profile</a>
        </p>
        <h1>About this project</h1>
        <h2>Introduction</h2>
        <p>Welcome to ProFileHub, a simple yet efficient profile picture upload system built using PHP and MySQL.
             This project allows users to upload their profile pictures, store them securely on the server, and view
              uploaded images in a user-friendly interface.</P>
        <h2>Project Features</h2> 
        <ul>
            <li>Profile Picture Upload: Users can easily upload images from their devices.</li>
            <li>File Validation: Only JPG, JPEG, PNG, and GIF file formats are allowed to ensure security and compatibility.
            </li>
            <li>Database Storage: The uploaded file details are stored in a MySQL database for easy retrieval.</li>
            <li>Secure Uploads: Prevents malicious file uploads by validating file types and limiting file sizes.</li>
            <li>User-Friendly Navigation: Simple navigation bar for easy access to upload, view, and learn more about the project.</li>
        </ul>
        <h2>Technology Stack</h2>
        <ul>
        <li>Front-end: HTML, CSS</li>
            <li>Back-end: PHP (file handling, database connectivity) </li>
            <li>Database: MySQL (stores uploaded file paths)</li>
            <li>Server: Apache (via MAMP)</li>
            <h2>Purpose of the Project</h2>
    </ul>
            <p>The main goal of this project is to demonstrate secure file handling in PHP, emphasizing validation, 
                database integration, and user interaction. Future enhancements could include image cropping, user 
                authentication, and cloud storage integration for better scalability.</p>
                <ul>
                <li>Enjoy using ProFileHub and explore the world of secure file uploads!</li>
    </ul>
    </div>
</body>
</html>
