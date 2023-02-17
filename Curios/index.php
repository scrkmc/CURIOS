<?php 

  session_start();

  require 'connection.php';
  require 'functions.php';

  if(isset($_POST['login_user'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);
    
    
    

    $query = "SELECT * FROM users WHERE username = '$uname'  AND password = '$pword'";

    $result = mysqli_query($db, $query);



    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header("location:index.php");
      exit;

    } else {

      $_SESSION['errprompt'] = "Wrong username or password.";

    }

  }

  if(!isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
       <html lang="en">
       <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<title>Login</title>
<body>

<body>
    <nav>
      <div class="logo">
        <h4>CURIOS</h4>
      </div>
      <ul class="nav_links">
        <li><a href="carsuit.php" class = "menu">HOME</a></li>
        <li><a href="about.php" class = "menu">ABOUT</a></li>
        <li><a href="Newsfeed.php" class = "menu">CONTACT</a></li>
        <li><a href="index.php" id="sign_in" class = ".login__button" type = "submit">Login</a></li>
      </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    </nav>
    <script src="../js/nav.js"></script>
  </body>


  <div class = "center_photo">
    <img src="images/register_background.png" alt="image" class = "center_logo">
<div class = "container">
        <form method="post" action = "dashboard.php">
            
           
            <h2 class = "form__login2">Login Form</h2>
            <?php 
        if(isset($_SESSION['errprompt'])) {
          showError();
        }
    ?>


            <div class="form__message form__message--error"></div>


            <div class="form__input--group">
                <input type="text" class = "form__input" autofocus placeholder = "Username" name="username" required>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input--group">
                <input type="password" class = "form__input form__input--error" autofocus placeholder = "Enter Password" name = "password">
                <div class="form__input-error-message"></div>

               

                <div class = "buttons"></div>
                <button id="Login" class="form__button" name = "reg_user"  type = "submit"> Signin</button>
                <p class="form__text">
                    <a href = "register.php" class="form__link" id = "linkCreateAccount">Dont have and account? Sign Up</a>
                </p>
            </div>

            <script src="js/nav.js"></script>
</body>
</html>

<?php

  } else {
    header("location:newsfeed.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);

  mysqli_close($db);

?>