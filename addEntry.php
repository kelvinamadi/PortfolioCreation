<?php
//add entry to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "entries";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
if ($_SERVER['REQUEST_METHOD']=='POST'){
    date_default_timezone_set('Europe/London');
    $datetime=time();
    $datetime = (date("Y-m-d H:i:s", $datetime));
    $thetitle= $_POST['Title'];
    $extract = $_POST['infogiven'];
    //echo $extract;
    $sql = "INSERT INTO BLOGS (givendateTime, title, givenentry) VALUES ('$datetime', '$thetitle', '$extract')";
    if ($conn->query($sql) === TRUE) {
        header('Location: viewBlog.php');
    }
}

?>