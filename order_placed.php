<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment successful</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/headerFooter.css" rel="stylesheet">
    <style>
        /* return button */
        #btn {
            border-radius: 14px;
            color: black;
            background-color: grey;
            border: none;
            margin-top: 15px;
            padding: 5px;
            font-size: 12px;
        }
        #btn:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .container {
            margin-top: 20px;
            width: 100%;
            margin-left: 25px;
            margin-right: 25px;
        }
    </style>
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
</nav>'

<div class="container">
    <h2> Order placed!</h2>
    <p> Thank you for your order, you will be able to collect from store within the next 30 mins. Pay when you collect by cash or card.</p>
    After <span id="count-down">10</span> back to the main page
    <p><button id="btn">Back to main now</button></p>
</div>
<script>
    // set a timer to return to the main page after 10 seconds
    window.onload = function (){
        let timer = 10;
        setInterval(() => {
            timer --;
            document.querySelector('#count-down').innerText = timer;
            if(timer == 0){
                location.href = "main.php";
            };
        }, 1000);
        var btn = document.querySelector('#btn');
        // allow user to return to the main page immediately with click the return button
        btn.onclick = function (){
            location.href = "main.php";
        }
    }
</script>
</body>
</html>