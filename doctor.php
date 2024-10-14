<!DOCTYPE html>
<html lang="en">
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

  <title>Mico</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <?php
              $contacts = [
                ['icon' => 'fa-phone', 'label' => 'Call', 'value' => '+01 123455678990'],
                ['icon' => 'fa-envelope', 'label' => 'Email', 'value' => 'demo@gmail.com'],
                ['icon' => 'fa-map-marker', 'label' => 'Location', 'value' => '']
              ];

              foreach ($contacts as $contact) {
                echo '<a href="#">
                        <i class="fa ' . $contact['icon'] . '" aria-hidden="true"></i>
                        <span>' . $contact['label'] . ' : ' . $contact['value'] . '</span>
                      </a>';
              }
            ?>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <?php
                  $nav_items = [
                    'index.php' => 'Home',
                    'about.php' => 'About',
                    'treatment.php' => 'Treatment',
                    'doctor.php' => 'Doctors',
                    'testimonial.php' => 'Testimonial',
                    'contact.php' => 'Contact Us'
                  ];

                  foreach ($nav_items as $link => $name) {
                    $active = ($name == 'Doctors') ? 'active' : '';
                    echo "<li class='nav-item $active'>
                            <a class='nav-link' href='$link'>$name</a>
                          </li>";
                  }
                ?>
              </ul>
              <div class="quote_btn-container">
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Login</span></a>
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Sign Up</span></a>
                <form class="form-inline">
                  <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Our <span>Doctors</span></h2>
      </div>
      <div class="carousel-wrap">
        <div class="owl-carousel team_carousel">
          <?php
            $doctors = [
              ['name' => 'Hennry', 'qualification' => 'MBBS', 'image' => 'images/team1.jpg'],
              ['name' => 'Jenni', 'qualification' => 'MBBS', 'image' => 'images/team2.jpg'],
              ['name' => 'Morco', 'qualification' => 'MBBS', 'image' => 'images/team3.jpg']
            ];

            foreach ($doctors as $doctor) {
              echo '<div class="item">
                      <div class="box">
                        <div class="img-box">
                          <img src="' . $doctor['image'] . '" alt="">
                        </div>
                        <div class="detail-box">
                          <h5>' . $doctor['name'] . '</h5>
                          <h6>' . $doctor['qualification'] . '</h6>
                          <div class="social_box">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>';
            }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> All Rights Reserved By <a href="https://html.design/">Free Html Templates</a></p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>


