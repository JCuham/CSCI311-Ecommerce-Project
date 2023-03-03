
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSCI 311 | e-commerce project</title>

  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Include FontAwesome Icons-->
  <script src="https://kit.fontawesome.com/c1e68b0439.js" crossorigin="anonymous"></script>

</head>
<body class="bg-dark">
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-white">Shopflix</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="categories.php" class="nav-link">Catagories</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link active" aria-current="page">Login</a></li>
      </ul>
    </header>
  </div>

<!--Sign Up Form-->
<div class="container bg-primary mt-lg-5">
    <div class="offset-md-3 col-md-6 mt-t pl-3 bg-primary rounded shadow-1g">
        <h1 class="mt-2 pt-5 text-center text-white">Sign Up</h1>
        <p class="text-center text-white">Create an account. It's free ;)</p>
        <form id="login-form" method="POST" action="../signup.php" role="form">

            <div class="input-group mt-5 mb-5 shadow-sm">
                <span class="input-group-text fa-solid fa-envelope"></span>
                <input id="email" type="email" class="form-control" name = "email" placeholder="Email Address" required="">
            </div>

            <div class="input-group mt-5 mb-5 shadow-sm">
                <span class="input-group-text fa-solid fa-user"></span>
                <input id="username" type="text" class="form-control" name = "username" placeholder="Username" required="">
            </div>
          
            <div class="input-group mt-5 mb-4 shadow-sm">
                <span class="input-group-text fa-solid fa-key"></span>
                <input id="password" type="password" class="form-control" name = "password" placeholder="Password" required="">
            </div>

            <h1 class="text-center text-white">Shipping Info</h1>
            <div class="input-group mt-5 mb-4 shadow-sm">
                <span class="input-group-text fa-solid fa-address-card"></span>
                <input id="firstname" type="text" class="form-control" name = "firstname" placeholder="First Name" required="">
                <input id="lastname" type="text" class="form-control" name = "lastname" placeholder="Last Name" required="">

            </div>
           
            <div class="input-group mt-5 mb-4 shadow-sm">
                <span class="input-group-text fa-solid fa-location-dot"></span>
                <input id="address" type="text" class="form-control" name = "address" placeholder="Address" required="">
            </div>
            <div class="input-group mt-5 mb-4 shadow-sm">
                <span class="input-group-text fa-solid fa-envelopes-bulk"></span>
                <input id="postcode" type="text" class="form-control" name = "postalcode" placeholder="Postal Code" required="">
            </div>
            <button class="btn btn-info mt-5 bg-light mb-3 w-100" type="submit" name = "submit">Sign Up</button>

        </form>
    </div>
</div>
</body>
</html>
