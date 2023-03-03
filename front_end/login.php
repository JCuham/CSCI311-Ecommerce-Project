<?php
    session_start();
    if(isset($_SESSION["email"])) {
        header("Location: dashboard.php");
    }

    require "./partials/head.php";

    $errorState = "";
    if ($_GET["valid"] == "false") {
        $errorState = "is-invalid";
    }
?>

<body class="bg-dark">
  <div class="container">
    <?php require "./partials/global_header.php"; ?>
  </div>
  <div class="container bg-primary mt-lg-5">
    <div class="offset-md-3 col-md-6 mt-t pl-3 bg-primary rounded shadow-1g">
      <h1 class="mt-2 pt-5 text-center font-italic text-white">Login Form</h1>
      <form id="login-form" method="post" action="../backend/login.php">

        <div class="input-group mt-5 mb-5 shadow-sm">
          <span class="input-group-text fa-solid fa-user"></span>
          <input id="username" value="<?php echo $_SESSION["username"]; ?>" type="text" class="form-control" placeholder="username" required="" name="username">
        </div>
        <div class="input-group mt-5 mb-4 shadow-sm">
          <span class="input-group-text fa-solid fa-key"></span>
          <input id="password" type="password" class="form-control <?php echo $errorState; ?>" placeholder="Password" required="" name="password">
        </div>
          <button class="btn btn-info mt-5 bg-light mb-3 w-100" type="submit">Login</button>
      </form>

      <div class="text-center mb-3 pb-4">
        <a href="signup.php" style="color: white;">Don't have an account? Click here to sign up.</a>
      </div>
    </div>
  </div>
  <?php require "./partials/footer.php"; ?>
</body>
</html>
