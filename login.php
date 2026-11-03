<?php

if(session_status() === PHP_SESSION_NONE);
$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html>

<head>
 
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" type="icon" href="images/logo2.svg">
  <title>myhrefti</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sub_page">
    
      <!-- header section strats -->
      <?php include 'include/nav.php' ?>
    
 <!--login section-->
  <section class="login_section"> 
    <div class="containers">
      <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
       <form action="login_register.php" method="post" >
          <h2 class="login-titre">Login</h2>
          <?= showError($errors['login']); ?>
          <input class="login-in" type="email" name="email" placeholder="Email" required>
          <input class="login-in" type="password" name="password" placeholder="Password" required>
          <p class="login-p"><a class="login-a" href="#">Forgot password</a></p>
          <button class="login-butt" type="submit" name="login">Login</button>
          <p class="login-p">Or Login with social platforms</p>
           <div class="social-icons">
            <a href="#"><i class="bx bxl-google"></i></a>
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
           </div>
          <p class="login-p">Don't have an account? <a class="login-a" href="#" onclick="showForm('register-form')">Registre</a></p>
       </form>  
      </div>  

      <div class="form-box <?= isActiveForm('register', $activeForm); ?> " id="register-form">
       <form action="login_register.php" method="post">
          <h2 class="login-titre">Register</h2>
         <?= isActiveForm('register', $activeForm); ?>
          <input class="login-in" type="text" name="name" placeholder="Name" required>
          <input class="login-in" type="email" name="email" placeholder="Email" required>
          <input class="login-in" type="password" name="password" placeholder="Password" required>
          <select class="login-in" name="role" required>
           <option class="login-op" value="">--Select Role--</option>
           <option class="login-op" value="user">User</option>
           <option class="login-op" value="admin">Admin</option>
          </select>
          <button class="login-butt" type="submit" name="register">Register</button>
          <p class="login-p">Or Register with social platforms</p>
           <div class="social-icons">
            <a href="#"><i class="bx bxl-google"></i></a>
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-github"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
           </div>
          <p class="login-p">Already have an account? <a class="login-a" href="#" onclick="showForm('login-form')">Login</a></p>
       </form>  
      </div>  
   </div>
  </section>
 <!--end of login section-->

      
   <?php include 'include/section.php' ?>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">myhrefti</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
<!-- jQery -->
<script src="js/script.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!--  OwlCarousel 2 - Filter -->
<script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
<!-- custom js --> 
<script src="js/custom.js"></script>
  
  
</body>

</html>
