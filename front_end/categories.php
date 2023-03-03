<?php
    require "check_authentication.php";
    require "./partials/head.php";
?>

<body class="bg-dark">
  <div class="container">
    <?php require "./partials/authenticated_header.php"; ?>
  </div>

  <?php
echo '
  <div class="container">
    <div class="card-group">
      <div class="row">
        <div class="card col-md-4 bg-transparent border-0">
          <img class="card-img-top" src="media/automotive.jpg" alt="image" width="rel" height="200px">
          <a href="category.php?ctg=Automotive" class="stretched-link"></a>
          <div class="card-body">
            <p class="card-text text-center text-white">Automotive</p>
          </div>
        </div>
        <div class="card col-md-4 bg-transparent border-0">
          <img class="card-img-top" src="media/gaming.png" alt="image" width="rel" height="200px">
          <a href="category.php?ctg=Electronics" class="stretched-link"></a>
          <div class="card-body">
            <p class="card-text text-center text-white">Gaming</p>
          </div>
        </div>
        <div class="card col-md-4 bg-transparent border-0">
          <img class="card-img-top" src="media/textbook.jpg" alt="image" width="rel" height="200px">
          <a href="category.php?ctg=Textbooks" class="stretched-link"></a>
          <div class="card-body">
            <p class="card-text text-center text-white">Textbooks</p>
          </div>
        </div>
      </div>
    </div>
    ';
    ?>
    <?php require "./partials/footer.php"; ?>
  </div>


</body>
</html>
