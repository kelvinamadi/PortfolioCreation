<?php
session_start();
if (isset($_SESSION['userlogged'])){
    $link = "addPost.html";
}
else{
    $link = "login.html";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav id = "navigation" >
            <h1 id = "myname" >Kelvin <span id = "surname">Amadi</span></h1>
            <ul>
                <li><a href="about.html">About Me</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
            <a href="<?= $link ?>" class = "postadding">Add Post</a>
        </nav>
    </header>
    <div>
        <p id = "welcome">
            Welcome to My Portfolio
        </p>
    </div>
    <div>
        <p class = "welcomename">
            Kelvin Amadi
        </p>
    </div>
    <figure class = "homei">
        <img src="images/me.jpg" alt="Kelvin Amadi" width="30%" height="30%">
    </figure>
    <section>
        <footer>
            <nav>
                <ul>
                    <li><a href="homepage.html">Home</a></li>
                    <li><a href="https://www.linkedin.com/in/kelvinamadi">Linkedin</a></li>
                    <li><a href="https://github.com/kelvinamadi">GitHub</a></li>
                    <li><a href="https://www.qmul.ac.uk">QMUL</a></li>
                </ul>
                <h2 id = "copy" >
                    Copyright@ 2022 Kelvin Amadi
                </h2>
            </nav>
        </footer>
    </section>
</body>
</html>