<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/headerFooter.css" rel="stylesheet">
    <style>
        .section{
            margin: 50px;
        }
        img{
            width: 100%;
            border: 1px solid transparent;
            border-radius: 12px;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            text-align: center;
            text-decoration: none;
            margin: 10px;
            border-radius: 50%;

        }
        .fa:hover {
            opacity: 0.7;
        }
        .fa-linkedin {
            background: #007bb5;
            color: white;
        }
        a {
            text-decoration: none;
        }
        .links {
            margin: 50px;
        }
        @media screen and (max-width: 640px){
            .links span {
                display: block;
            }
        }

    </style>

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
    <div class="section">
        <img src="images/hiring.png" alt="hiring_poster"/>
    </div>
    <div class="links">
    <a href="https://ie.linkedin.com/" class="fa fa-linkedin" target="_blank"></a>
    <span>Send your CV via LinkedIn or email <a href="https://mail.google.com/">seasons2022@gmail.com</a></span>
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