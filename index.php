<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoEats</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header class="header">
      <a href="" class="logo"><i class="fas fa-shopping-basket"></i> EcoEats</a>

      <nav class="navbar">
        <a href="#">home</a>
        <a href="features.php">Features</a>
        <a href="products.php">Products</a>
        <a href="categories.php">Categories</a>
        <a href="review.php">Review</a>
        <a href="blogs.php">Blogs</a>
      </nav>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
      </div>
      
    <form class="search-form">
        <input type="search" id="search-box" placeholder="Search Here...">
        <label for="search-box" class="fas fa-search"></label>
  </form>

      <form action="#" class="login-form">
        <h3>Login Now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p> Forgot Your Password <a href="#"> Click Here</a></p>
        <p> Don't Have An Account <a href="#"> Creat Now</a></p>
        <input type="submit" value="Login Now" class="btn">
    </form>

    <form action="#" class="shopping-cart">
        <h3>Cart Menu</h3>
</form>
    </header>


  
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>