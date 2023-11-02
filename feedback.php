<?php
    $connection_var = new mysqli('localhost','root','','feedback');
   
    if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
    if(!empty($_POST)){
        $name = $_POST["fname"];
        $email = $_POST["customer-email"];
        $msg = $_POST["message"];
        $sql = "INSERT INTO customerfeedback (customerName,email,msg) VALUES('$name','$email','$msg')";
        $name = ' ';
        $email = ' ';
        $msg = ' ';
        if(! mysqli_query($connection_var, $sql)){
        echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($connection_var);
        }
        
    }
   mysqli_close($connection_var);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback received</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="css/headerFooter.css" rel="stylesheet">

    <style>
        /* return button */
        #closebtn {
            border-radius: 14px;
            color: black;
            background-color: grey;
            border: none;
            margin-top: 15px;
            padding: 5px;
            font-size: 12px;
        }
        #closebtn:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }
        #thankyoumsg {
            margin-top: 20px;
            width: 100%;
            margin-left: 25px;
            margin-right: 25px;
        }
        h3 {
            font-family: fantasy;
            color: white;
            font-size: 40px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'?>
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
    <!-- function to set a timer of 5 seconds to the main page -->
    <script>
        let timer = 5;
        setInterval(() => {
            timer --;
            document.querySelector('.count-down').innerText = timer;
            if(timer == 0){
                location.href = "main.php";
            };
        }, 500);
    </script>
    <div id="thankyoumsg">
    <h3>We have recieved your feedback!</h3>
    <p> (Please do not refresh the page to avoid resubmission.)<p>
    <p>Return to the main page in <span class="count-down"></span> seconds<p>
    <button type="submit" id="closebtn">Return to main now</button>
    </div>
    <script>
        // return to the main page when click the return button
        var closebtn = document.querySelector('#closebtn');
        closebtn.onclick = function (){
            location.href = "main.php";
        }
    </script>

<?php include 'footer.php'?>
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
