<?php

require('dbinfo.inc');

session_start();

$folder = "media/";
$date = new DateTime();
$timestamp = $date->getTimeStamp();

try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $stmt = $dbh->prepare("INSERT INTO Product (title, prod_desc, category, price, stock, owner) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bindParam(1, $_POST["product_name"], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST["description"], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST["category"], PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST["price"], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST["stock"], PDO::PARAM_STR);
    $stmt->bindParam(6, $_SESSION["username"], PDO::PARAM_STR);


    print_r($_FILES);
    if (!$stmt->execute()) {
        print_r($stmt->errorInfo());
    }

    $product_stmt = $dbh->prepare("SELECT id FROM Product WHERE title='{$_POST["product_name"]}'");

    if ($product_stmt->execute()) {
        $id = $product_stmt->fetch()["id"];
    }

    if(isset($id)) {
        $image_stmt = $dbh->prepare("INSERT INTO Images (product_id, path) VALUES (?, ?)");
        $image_stmt->bindParam(1, $id, PDO::PARAM_STR);

        $filename = $_FILES["product_image"]["name"];
        $tmpname = $_FILES["product_image"]["tmp_name"];
        $location = $folder.$timestamp.$filename;

        if(!move_uploaded_file($tmpname, $location)) {
            echo "move file failed";
        }

        $image_stmt->bindParam(2, $location, PDO::PARAM_STR);

        if($image_stmt->execute()) {
            header("Location: ../front_end/dashboard.php");
        } else {
            print_r($image_stmt->errorInfo());
        }
    }

} catch (PDOException $e) {
    print "Error!" . $e->getMessage() . "<br/>";
}
?>
