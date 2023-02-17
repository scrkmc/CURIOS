<?php 

  session_start();

  require 'connection.php';
  require 'functions.php';


  if(isset($_POST['reg_user'])) {

    $uname = clean($_POST['username']); 
    $pword = clean($_POST['password']); 
    $fname = clean($_POST['firstname']); 
    $lname = clean($_POST['lastname']);
    $email = clean($_POST['email']);
    $phone = clean($_POST['phone']);
  

    $query = "SELECT username FROM users WHERE username = '$uname'";
    $result = mysqli_query($db,$query);
    

      if(mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO users ( firstname, lastname, username, email, phone, password)
        VALUES ('$fname', '$lname', '$uname', '$email', '$phone', '$pword')";

        if(mysqli_query($db, $query)) {

            
          $_SESSION['prompt'] = "Account registered. You can now log in.";
          header("location:index.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $_SESSION['errprompt'] = "That student number already exists.";

      }

    } else {

      $_SESSION['errprompt'] = "Username already exists.";

    }

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
<title>Registration</title>
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
        <form method="post" action = "register.php">
            
           
            <h2 class = "form__login">Registration Form</h2>
           

            <div class="form__message form__message--error"></div>

            <div class="form__input--group">
                <input type="text" class = "form__input" autofocus placeholder = "First Name" name = "firstname" required>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input--group">
                <input type="text" class = "form__input" autofocus placeholder = "Last Name" name = "lastname" required>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input--group">
                <input type="text" class = "form__input" autofocus placeholder = "Username" name="username" required>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input--group">
                <input type="text" class = "form__input" autofocus placeholder = "Email" name="email" required>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input--group">
                <input type="text" class = "form__input" autofocus placeholder = "Phone Number" name="phone" required>
                <div class="form__input-error-message"></div>
            </div>
        

            <div class="form__input--group">
                <input type="password" class = "form__input form__input--error" autofocus placeholder = "Enter Password" name = "password">
                <div class="form__input-error-message"></div>

               

                <div class = "buttons"></div>
                <button id="Login" class="form__button" name = "reg_user"  type = "submit">Signup</button>
                <p class="form__text">
                    <a href = "index.php" class="form__link" id = "linkCreateAccount">Already Have an Account? Login</a>
                </p>
            </div>

            <script src="js/nav.js"></script>
</body>
</html>




<?php 

  unset($_SESSION['errprompt']);
  mysqli_close($db);

?>