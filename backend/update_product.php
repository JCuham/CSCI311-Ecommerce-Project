<?php
require ('dbinfo.inc');

session_start();
  try{
    $conn = new PDO("mysql:host=$host;dbname=$database",$user, $password);
    // update product code goes in here
  
    $pid = $_GET['prodID'];
    
    $pName  = $_POST['prodName'];
    $pDesc = $_POST['prodDesc'];
    $pCategory = $_POST['prodCat'];
    $pPrice = $_POST['prodPrice'];
    $pCount = $_POST['prodCount'];

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE Product
            SET title = '$pName' 
            WHERE id = '$pid'";
    $conn->exec($sql);

    $sql = "UPDATE Product
            SET prod_desc = '$pDesc' 
            WHERE id = '$pid'";
    $conn->exec($sql);

    $sql = "UPDATE Product
            SET category = '$pCategory' 
            WHERE id = '$pid'";
    $conn->exec($sql);

    $sql = "UPDATE Product
            SET price = '$pPrice' 
            WHERE id = '$pid'";
    $conn->exec($sql);

    $sql = "UPDATE Product
            SET Stock = '$pCount' 
            WHERE id = '$pid'";
    $conn->exec($sql);
    

    header("Location: ../front_end/dashboard.php");
  }

  catch(PDOException $e){
    print "Error!".$e->getMessage()."<br/>";
  }
  $conn = null;
?>
