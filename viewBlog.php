<?php


session_start();
if (isset($_SESSION['userlogged'])){
    $link = "out";
}
else{
    $link = "in";
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "entries";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "SELECT * FROM BLOGS";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $names[] = $row;
}

for ($x = 0; $x <= sizeof($names)-2; $x++) {

    for($y = 0; $y<=sizeof($names)-2; $y++){

        if ($names[$y][0]<$names[$y +1][0]){
        
            $temp = $names[$y];
            $names[$y] = $names[$y +1];
            $names[$y +1] = $temp;
        }
    }


  } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blog</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav id = "navigation" >
            <h1 id = "myname" >Kelvin <span id = "surname">Amadi</span></h1>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
            <?php
            if ($link=="out"){
                echo '<form method = "POST" action = "logout.php">' . '<input type="submit" value="Log Out">' . '</form>';
            }
            else{
                echo '<a href="login.html" class = "postadding">Add Post</a>';
            }
            ?>
        </nav>
    </header>

    <?php
    
    echo '<p class = "des">'."BLOG ENTRIES".'</p>';
    
    if (isset($_SESSION['userlogged'])){
        echo '<p class = "register">'.'user: '.$_SESSION['userlogged'].'</p>';
    }

    foreach ($names as $value) {
        $time = $value[1];
        $title = $value[2];
        $entry = $value[3];
        echo '<div>'. '<p class = "timec">'.$time.'</p>'. '<p class = "titlec">'.$title.'</p>'. '<p class = "entryc">'.$entry.'</p>' .'</div>';
        echo '<hr>';
    }
    ?>

    <section>
        <footer id = "necessary">
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
