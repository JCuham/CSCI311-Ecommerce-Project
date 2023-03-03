<?php
    require "check_authentication.php";
    require('../backend/dbinfo.inc');
    require "./partials/head.php";
?>

<body class="bg-dark">
  <div class="container">
    <?php require "./partials/authenticated_header.php"; ?>
  </div>
 
  
  <?php

  echo "<div class=\"card-group m-1 shadow-lg\">";
    try{

      if(isset($_GET['ctg'])){
      $ctg = $_GET['ctg'];
      $dbh = new PDO("mysql:host=$host;dbname=$database",$user,$password);
      $product = $dbh->query("SELECT p.title, p.prod_desc, p.category, p.price, p.Stock, p.owner,
       i.path, u.email, u.username FROM Product p JOIN Images i on p.id = i.product_id JOIN User u on p.owner = u.username
       WHERE p.category='$ctg'");
      $index = 0;
      foreach($product as $row){
        $Title = $row['title'];
        $Desc = $row['prod_desc'];
        $Category = $row['category'];
        $Price = $row['price'];
        $stock = $row['Stock'];
        $pathpix = $row['path'];
        $contactemail = $row['email'];
        
        
        print_r("<div class=\"card m-1\">".
          "<img class=\"card-img-top\" src=\"$pathpix\" alt=\"Card image cap\">".
          "<div class=\"card-body\">".
            "<h5 class=\"card-title\">".$Title."</h5>".
            "<p class=\"card-text\">".$Desc."</p>".
          "</div>".
          "<div class=\"card-footer\">".
            "<small class=\"text-success\">"."Price: $".$Price."</small>"."<br>".
            "<small class=\"text-dark\">"."Stock: ".$stock."</small>".
            "<a href=\"mailto:".$contactemail."\" class=\"btn btn-primary\" style=\"float: right;\">"."Contact Seller"."</a>".
          "</div>".
        "</div>");

      $index+=1;
      if($index >= 4){
        echo "</div><br>";
        echo "<div class=\"card-group m-1 shadow-lg\">";
        $index = 0;
      }

      }
      echo "</div>";
    }
    
    }catch(PDOException $e){
      print "ERROR!" . $e->getMessage()."<br/>";
    }

  ?>



    <?php require "./partials/footer.php"; ?>
</body>
</html>
