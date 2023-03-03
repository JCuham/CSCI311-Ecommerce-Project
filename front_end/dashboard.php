<?php
    require "check_authentication.php";
    require "./partials/head.php";
    require "../backend/dbinfo.inc";
?>

<body class="bg-dark">
  <div class="container">
    <?php require "./partials/authenticated_header.php"; ?>
  </div>
  <div class="jumbotron container text-white">
    <h1 class="text-white">Dashboard</h1>
    <p class="text-white">Welcome <?php echo "{$_SESSION['username']}"?></p>

    <h2 class="mb-3">Actions</h2>
    <div>
      <a href="update_profile.php" class="btn btn-primary" role="button">Update Profile</a>
      <a href="new_product.php" class="btn btn-primary" role="button">Create New Product</a>
    </div>

    <h2 class="mt-5">Your listings</h2>

    <?php


echo "<div class=\"card-group m-1 shadow-lg\">";
try{
  $dbh = new PDO("mysql:host=$host;dbname=$database",$user,$password);
  $product = $dbh->query("SELECT p.title, p.id, p.prod_desc, p.category, p.price, p.Stock, i.path 
  FROM Product p JOIN Images i on p.id = i.product_id WHERE p.owner = '{$_SESSION['username']}'");
  
  $count = 0;
  //print out cards
  foreach($product as $row){
    $Title = $row['title'];
    $PID = $row['id'];
    $Desc = $row['prod_desc'];
    $Category = $row['category'];
    $Price = $row['price'];
    $stock = $row['Stock'];
    $pathpix = $row['path'];
    $owner = $row['owner'];
    
    
    //only print listings for the logged in owner
    if(strcmp($owner,$_SESSION['username'])){

      echo '
              
              <div class="card m-1">
              <img class="card-img-top" src="'.$pathpix.'" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title text-dark">'.$Title.'</h5>
              <p class="card-text text-dark">'.$Desc.'</p>
              </div>
              <div class="card-footer">
              <small class="text-success">'.'Price: $'.$Price.'</small>
              <a href="update_product.php?productID='.$PID.'" class="btn btn-info ms-2" style="float:right;">Edit Posting</a>
              <a href="../backend/deletelisting.php?delID='.$PID.'" class="btn btn-danger" style="float: right;">Delete Posting</a>
              </div>
              </div>
              
      
      ';

      $count+=1;
      if($count >= 2){
        echo "</div>";
        echo "<div class=\"card-group m-1 shadow-lg\">";
        $count = 0;
      }

    }

  }
  
}catch(PDOException $e){
  print "ERROR!" . $e->getMessage()."<br/>";
}
echo "</div>";
?>

    
    <?php require "./partials/footer.php"; ?>
  
</body>

