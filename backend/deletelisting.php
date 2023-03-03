<?php

require ('dbinfo.inc');
  try{
    $dbh = new PDO("mysql:host=$host;dbname=$database",$user,$password);
    

        if(isset($_GET['delID'])){
    
            $id = $_GET['delID'];

            $query = $dbh->query("DELETE from Product WHERE id='$id'");
            $queryImage = $dbh->query("DELETE from Images WHERE product_id='$id'");
        }


        header("Location: ../front_end/dashboard.php");
    }

  catch(PDOException $e){
    print "Error!".$e->getMessage()."<br/>";
  }

?>
