<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/headerFooter.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <script src="js/about.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<nav class="navbar navbar-expand-md bg">
  <!-- Brand -->
  <a class="navbar-brand bg cursive" href="main.php">Seasons</a>
 
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </button>
 
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link bg" href="main.php">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg" href="joinus.php">Join us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg" href="contact.php">Support</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link bg" href="order.php">Order online</a>
      </li> 
    </ul>
  </div> 
</nav>
<div class="container">
    <h3 class="content-heading">About Seasons</h3>
    <img class="logo" src="images/logo.jpg" alt="logo" style="width:231px; height:197px">
    <div class="text-container">
    <p class="text">Seasons is a new store opened in 2022, we provide a wide range of drinks and desserts including varieties of milk teas, fruit teas, cakes and bubble waffles. Our aim is regardless of which season we are in now, we can always bring the best out of spring, summer, autumn, or winter to our customers through either a cup of tea or a plate of cake. Walk in with or without blues, and walks out with full of happiness.</p>
    </div>
</div>

<div class="gallery-grid">
    <div class="grid-item">
        <img src="images/boba1.jpg" class="gallery" id="img1" alt="boba">
    </div>
    <div class="grid-item">
        <img src="images/icecream.jpg" class="gallery" id="img2" alt="icecream">
    </div>
    <div class="grid-item">
        <img src="images/cake6.jpg" class="gallery" id="img3" alt="cake">
    </div>
    <div class="grid-item">
        <img src="images/waffle5.jpg" class="gallery" id="img4" alt="waffle">
    </div>
    <div class="grid-item">
    <img src="images/boba6.jpg" class="gallery" id="img5" alt="boba">
    </div>
</div>
<div class="modal">
    <span class="closeicon">x</span>
    <img class="modal-content" id="modalimg">
    <div class="btns">
        <span class="left" role="link">&lt;</span>
        <span class="right" role="link">&gt;</span>
    </div>
</div>

<?php include 'footer.php'; ?>
<footer>
  <div class="footerbg">
      <div>
          <div>
              <h3 class="heading">Find us</h3>
              <hr>
          </div>
          <div class="contact_details">
              <ul>
                  <li><i class="bi bi-telephone"></i><p class="number">Contact number: 01-5918899</p></li>
                  <li><i class="bi bi-house-fill" style="font-size:24px;"></i><p class="address">Address:88 Main street, Celbridge, Co.Kildare</p></li>
                  <li><i class="bi bi-messenger"></i><p class="email">Email: seasons2022@gmail.com</p></li>
              </ul>
          </div>
      </div>
  </div>
</footer>
</body>
</html>