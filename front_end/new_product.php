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
        <li class="nav-item"><a href="index.php class="nav-link">Home</a></li>
        <li class="nav-item"><a href="categories.html" class="nav-link">Catagories</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
        <li class="nav-item"><a href="login.html" class="nav-link active" aria-current="page">Login</a></li>
      </ul>
    </header>
  </div>

  <!--Login Form-->
  <div class="container bg-primary mt-lg-5">
    <div class="offset-md-3 col-md-6 mt-t pl-3 bg-primary rounded shadow-1g">
      <h1 class="mt-2 pt-5 text-center font-italic text-white">Create New Product</h1>
      <form id="login-form" method="post" action="../backend/add_product.php" role="form" enctype="multipart/form-data">

        <label class="text-white form-check-label mt-5" for="product-name">Product Name:</label>
        <div class="input-group mt-2 mb-2 shadow-sm">
          <span class="input-group-text fa-solid fa-pen"></span>
          <input id="product-name" type="text" name="product_name"class="form-control" placeholder="Product Name" required="">
        </div>
        <label class="text-white form-check-label" for="description">Product Description:</label>
        <div class="input-group mt-2 mb-2 shadow-sm">
          <span class="input-group-text fa-solid fa-pen"></span>
          <input id="description" type="text" name="description" class="form-control" placeholder="Product Description" required="">
        </div>
        <label class="text-white form-check-label" for="description">Product Image:</label>
        <div class="input-group mt-2 mb-2 shadow-sm">
          <input id="image" type="file" name="product_image" class="form-control" value="" placeholder="" required="">
        </div>
        <label class="text-white form-check-label" for="category">Category:</label>
        <div class="input-group mt-2 mb-2 shadow-sm">
          <span class="input-group-text fa-solid fa-folder"></span>
          <select id="category" type="text" name="category" class="form-control" required="">
              <option value="Automotive">Automotive</option>
              <option value="Games">Games</option>
              <option value="Textbooks">Text-Books</option>
          </select>
        </div>
        <label class="text-white form-check-label" for="price">Price:</label>
        <div class="input-group mt-2 mb-2 shadow-sm">
          <span class="input-group-text fa-solid fa-money-bill"></span>
          <input id="price" type="number" name="price" class="form-control" placeholder="Price" required="" min="0" max="1000000">
        </div>
        <label class="text-white form-check-label" for="stock">Inventory Count:</label>
        <div class="input-group mt-2 mb-2 shadow-sm">
          <span class="input-group-text fa-solid fa-money-bill"></span>
          <input id="stock" type="number" name="stock" class="form-control" placeholder="Inventory Count" required="" min="0" max="1000000">
        </div>
        <div class="text-center">
          <div class="btn-group center-text">
            <a class="btn ml-5 mt-5 mb-3 btn-danger" href="dashboard.php">Cancel</a>
            <button class="btn ml-5 mt-5 mb-3 btn-success" type="submit">Confirm</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
