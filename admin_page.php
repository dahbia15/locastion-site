
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

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
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'include/nav.php' ?>
    <!-- end header section -->
  </div>
  <div class="container py-2 my-2">
    <h4>Add Services</h4>
        <?php 
           if(isset($_POST['ajouter'])){
                $nom = $_POST['nom'];
                $telephone = $_POST['telephone'];
                $ville = $_POST['ville'];
                $job = $_POST['job'];
                $comment = $_POST['comment'];

                $filename = '';
                if(isset($_FILES['photo'])){
                  $photo = $_FILES['photo']['name'];
                  $filename = uniqid() . $photo;
                  move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/photo/' .$filename);
               }
                $filename1 = '';
                if(isset($_FILES['photo_cin'])){
                  $photo_cin = $_FILES['photo_cin']['name'];
                  $filename1 = uniqid() . $photo_cin;
                  move_uploaded_file($_FILES['photo_cin']['tmp_name'], 'upload/cin/' .$filename1);
                }

                if(!empty($nom) && !empty($telephone) && !empty($ville) && !empty($job) && !empty($filename) && !empty($filename1)){
                    require_once 'include/data.php';
                    $sqlState = $pdo->prepare(query:'INSERT INTO jobs (nom,telephone,ville,job,photo,photo_cin,comment) VALUES(?,?,?,?,?,?,?)');
                    $sqlState->execute([$nom,$telephone,$ville,$job,$filename,$filename1,$comment]);
                    
                    ?>
                    <div class="alert alert-success" role="alert">
                          Félicitations, votre inscription est confirmée !
                    </div>
                    <?php

                }else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                          Nom , telephone, ville, Picrure, CIN et service sont obligatoires
                    </div>
                    <?php
                }
           }
        ?>
   <form method="post" enctype="multipart/form-data">
        
        <label  class="form-label my-2">Full Name</label>
        <input type="text"  class="form-control" name="nom" >  

        <label  class="form-label my-2">Your Picture</label>
        <input type="file"  class="form-control" name="photo" >

        <label  class="form-label my-2">CIN</label>
        <input type="file"  class="form-control" name="photo_cin" >

        <label  class="form-label my-2">Phone Number</label>
        <input type="text"  class="form-control" name="telephone" >

        <label  class="form-label my-2">Your City</label>
        <input type="text"  class="form-control" name="ville" >

        <label  class="form-label my-2">Your Service</label>
        <input type="text"  class="form-control" name="job" >

        <label  class="form-label my-2">Description</label>
        <textarea name="comment" class="form-control"></textarea>
        
        
        <input type="submit" value="Add Services" class="btn btn-primary  my-2" name="ajouter">
    </form>
    </div>
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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>