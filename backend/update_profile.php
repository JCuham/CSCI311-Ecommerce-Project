<?php
require ('dbinfo.inc');
  try{
    $conn = new PDO("mysql:host=$host;dbname=$database",$user, $password);

      $email = $_POST['email'];
      $username = $_POST['username'];
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $address = $_POST['address'];
      $postal = $_POST['postalcode'];

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "UPDATE User
            SET username = '$username'
            WHERE username = '{$_SESSION['username']}'";
      $conn->exec($sql);

      $sql = "UPDATE User
            SET firstname = '$fname'
            WHERE username = '{$_SESSION['username']}'";
      $conn->exec($sql);

      $sql = "UPDATE User
            SET lastname = '$lname'
            WHERE username = '{$_SESSION['username']}'";
      $conn->exec($sql);

      $sql = "UPDATE User
            SET email = '$email'
            WHERE username = '{$_SESSION['username']}'";
      $conn->exec($sql);

      $sql = "UPDATE User
            SET street_address = '$address'
            WHERE username = '{$_SESSION['username']}'";
      $conn->exec($sql);

      $sql = "UPDATE User
            SET postal_code = '$postal'
            WHERE username = '{$_SESSION['username']}'";
      $conn->exec($sql);
      header("Location: ../front_end/dashboard.php");
    }

  catch(PDOException $e){
    print "Error!".$e->getMessage()."<br/>";
  }
  $conn = null;
?>
