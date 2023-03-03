<?php
require ('dbinfo.inc');
  try{
    $conn = new PDO("mysql:host=$host;dbname=$database",$user, $password);

      $email = $_POST['email'];
      $username = $_POST['username'];
      $pass = $_POST['password'];
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $address = $_POST['address'];
      $postal = $_POST['postalcode'];

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT into User (username, pword, firstname, lastname, email , street_address, postal_code)
      VALUES ('$username', '$pass', '$fname', '$lname', '$email' , '$address', '$postal')";
      $conn->exec($sql);
      header("Location: ../front_end/login.php");
    }

  catch(PDOException $e){
    print "Error!".$e->getMessage()."<br/>";
  }
  $conn = null;
?>
