<!DOCTYPE html>
<html>
<head>
  <title>Seasons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seasons</title>
  <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link href="css/headerFooter.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>

<body>
<?php include 'header.php';?>
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
<main>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/poster1.png" class="d-block w-100" alt="poster1">
    </div>
    <div class="carousel-item">
      <img src="images/poster2.png" class="d-block w-100" alt="poster2">
    </div>
    <div class="carousel-item">
      <img src="images/poster3.png" class="d-block w-100" alt="poster3">
    </div>
    <div class="carousel-item">
      <img src="images/poster4.png" class="d-block w-100" alt="poster4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="section">
  <div class="about">
    <a href="about.php"><img class="logo" src="images/logo.jpg" alt="logo" style="width:231px; height:197px"></a>
    <div class="intro">
      <p>Seasons is a new store opened in 2022, we provide a wide range of drinks and desserts including varieties of milk teas, fruit teas, cakes and bubble waffles. Our aim is regardless of which season we are in now, we can always bring the best out of spring, summer, autumn, or winter to our customers through either a cup of tea or a plate of cake. Walk in with or without blues, and walks out with full of happiness.</p>
    </div>

</div>
<br>
<div class="grid-container">
  <div class="grid-row">
    <div class="grid-content">
      <img class="pic" src="images/boba.jpg" alt="boba">
    </div>
    <div class="grid-content">
      <img class="pic" src="images/cake.jpg" alt="cake">
    </div>
  </div>
  <div class="grid-row">
    <div class="grid-content">
      <img class="pic" src="images/bubblewaffle.jpg" alt="waffle">
    </div>
  </div>
</div>
</main>

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