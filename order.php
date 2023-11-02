<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="css/headerFooter.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/order.css" rel="stylesheet">
    <script src="js/order.js"></script>
</head>

<body>
<?php 
include 'header.php';
?>
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
<div class="wrap">
<table>
    <thead>
    <tr>
        <th colspan='5'>Total item: <span id="totalCount">0</span></th>
    </tr>
    <tr class="theader">
        <td class="cell">Product name</td>
        <td class="cell">Amount</td>
        <td class="cell">Unit price</td>
        <td class="cell">Total price</td>
        <td class="cell">Remove</td>
    </tr>
    </thead>
    <tbody class="cart-content">
    </tbody>
    <tr class="tfooter">
       <td colspan='4'>Total price: <span id="sum">0</span></td>
       <td><input type="button" id="pay" value="Pay Now" /></td>
    </tr>
</table>
</div>

<div id="info">
    <div>
        <img src="images/openicon.png" class="opening-icon" alt="opening-icon"/>
    </div>
    <div class="opening-time">
        <span>TUESDAY: CLOSED</span>
        <span>WEDNESDAY - MONDAY : 11AM</span>
    </div>
    <div>
        <img src="images/closeicon.png" class="closing-icon" alt="closing-icon"/>
    </div>
    <div class="closing-time">
        <span>TUESDAY: CLSOED</span>
        <span>WEDNESDAY - MONDAY : 7PM</span>
    </div>
</div>

<div class="product-outer-container">
    <div class="left-container">
        <div class="product-category">
        <ul>
            <li class="categories"><a id="bubble" href="javascript: bubbleTea()">Bubble tea</a></li>
            <li class="categories"><a id="fruit" href="javascript: fruitTea()">Fruit tea</a></li>
            <li class="categories"><a id="waffle" href="javascript: waffle()">Bubble waffle</a></li>
            <li class="categories"><a id="cake" href="javascript:cake()">Cake</a></li>
         </ul>
        </div>
    </div>
    <div class="right-container">
        <div class="title">
        </div>
        <div class="product-container">
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
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