<?php   
session_destroy(); //destroy the session
header("location:admin.php"); //to redirect back to "index.php" after logging out
exit();
