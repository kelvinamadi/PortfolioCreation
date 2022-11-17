
<?php
//runs when a user logs out to end session and remove variables
session_start();
session_unset(); 
session_destroy();
header('Location: homepage.php');
?>
