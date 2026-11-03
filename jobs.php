<?php 
 require_once 'include/data.php';
 $id = $_GET['id'];
 $sqlState = $pdo->prepare(query:'SELECT * FROM jobs WHERE id=?');
 $sqlState->execute([$id]);
$jobs = $sqlState->fetch(mode: PDO::FETCH_ASSOC);
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
  <title>myhrefti | <?php echo $jobs['nom']?> </title>

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

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center py-4 my-4">
        <h2>More <span>Information</span></h2>
      </div>
     <div class="row">
        <div class="col-md-6">
            <img class="img img-fluid w-75" src="upload/photo/<?php echo $jobs['photo'] ?>" alt="<?php echo $jobs['nom']?>">
        </div>
        <div class="col-md-6">
         <h2 class="card-title"><span class="badge text-bg-light py-2">Full Name: </span> <?php echo $jobs['nom'] ?></h2>
         <br>
         <h3 class="card-text"> <span class="badge text-bg-danger py-2">Service:</span> <?php echo $jobs['job'] ?></h3>
         <h3 class="card-text"><span class="badge text-bg-secondary py-2"> ville: </span> <?php echo $jobs['ville'] ?></h3>
         <h3 class="card-text" ><span class="badge text-bg-success py-2">Phone:</span> <?php echo $jobs['telephone'] ?></h3>
         <h3 class="card-text"> <span class="badge text-bg-warning py-2">Description:</span> <?php echo $jobs['comment'] ?></h3>
         <p>
      <small class="text-muted">
         Add: <?php echo date_format(date_create($jobs['date_creation']), format:'Y/m/d') ?>
      </small>
     </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108647.89582822601!2d-7.996329049804689!3d31.68182188147021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1752351238692!5m2!1sfr!2sma" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </div>
    
  </section>


  <!-- end service section -->

  <!-- info section -->

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