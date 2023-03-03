<?php

session_start();

require "./dbinfo.inc";
try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $formUsername = $_POST["username"];
    $_SESSION["username"] = $formUsername;

    $msg = "Not authenticated";

    // https://www.php.net/manual/en/pdo.prepared-statements.php
    $stmt = $dbh->prepare("SELECT * from User WHERE username='$formUsername'");

    $validation = "false";

    if($stmt->execute()) {
        if($stmt->rowCount() == 1) {
            $data = $stmt->fetch();

            $db_password = $data["pword"];

            if(strcmp($db_password, $_POST["password"]) == 0) {
                // User is authenticated

                $_SESSION["username"] = $data["username"];
                $_SESSION["email"] = $data["email"];
                $validation = "true";
            }
        }
    }

    header("Location: ../front_end/login.php?valid=$validation");

} catch(PDOException $e) {
    print "Error!" . $e->getMessage() . "<br/>";
}
?>
