<!-- This file redirects the user to the login page if they do not have an active session -->

<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
    }
?>
