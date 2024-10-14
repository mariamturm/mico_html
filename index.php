









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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- appointment section style -->
  <link href="css/appointment.css" rel="stylesheet" />


</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include('header.php'); ?>
    <!-- end header section -->

    <!-- slider section -->
    <?php include('slider_section.php'); ?>
    <!-- end slider section -->
  </div>


  <!-- book section -->

  
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------ MARIAMI DELIBASHVILI --------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->

<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">

          <form method="POST" action="" id="appointmentForm">
            <h4>BOOK <span>APPOINTMENT</span></h4>
            <div class="form-row">




              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name NEW</label><br>
                <input type="text" id="inputPatientName" name="inputPatientName" class="form-control" placeholder="I like pie"required>
              </div>


              <div class="form-group col-lg-4">            
                <label for="inputDoctorName">Doctor's Name NEW:</label>
                <select id="inputDoctorName" name="inputDoctorName" class="form-control" required>
                  <option value="Doctor A">Doctor A</option>
                  <option value="Doctor B">Doctor B</option>
                  <option value="Doctor C">Doctor C</option>
                </select>
              </div>


              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName" required>
                  <option value="Department A">Department A</option>
                  <option value="Department B">Department B</option>
                  <option value="Department C">Department C</option>
                </select>
              </div>

            </div>

            <div class="form-row">

              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number:</label><br>
                <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="XXXXXXXXXX" required>
              </div>

<!--
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" name="inputSymptoms" placeholder="">
              </div>
-->
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms:</label><br>
                <textarea id="inputSymptoms" name="inputSymptoms" class="form-control" required></textarea>
              </div>


              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date:</label><br>
                <input type="text" class="form-control" id="inputDate" name="inputDate" placeholder="mm-dd-yyyy" required>
              </div>

            </div>
            <div class="btn-box">
              <button type="submit" class="btn">Submit Now</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>




    <!-- Overlay for the popup -->
    <div id="overlay" class="overlay"></div>

    <!-- Popup window -->
    <div id="popup" class="popup">
        <p id="popupContent"></p>
        <div class="btn-box">
          <button class="btn" id="closePopup">Close</button>
        </div>
    </div>
  
    <script>
        const form = document.getElementById('appointmentForm');
        const popup = document.getElementById('popup');
        const overlay = document.getElementById('overlay');
        const popupContent = document.getElementById('popupContent');
        const closePopup = document.getElementById('closePopup');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Collect form data
            const formData = new FormData(form);

            // Use AJAX to submit the form data to the PHP script
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'appointment.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Show popup with appointment information
                    popupContent.innerHTML = xhr.responseText;
                    popup.classList.add('show');
                    overlay.classList.add('show');
                } else {
                    alert('There was an error with your submission.');
                }
            };
            xhr.send(formData);
        });

        // Close popup and overlay
        closePopup.addEventListener('click', function() {
            popup.classList.remove('show');
            overlay.classList.remove('show');
        });
    </script>



<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------- END OF MARI's SECTION ------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->




  <!-- end book section -->


  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Hospital</span>
              </h2>
            </div>
            <p>
              has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- treatment section -->
  <?php include ('treatment-section.php'); ?>
  <!-- end treatment section -->

  <!-- team section -->
  <?php include('team_section.php'); ?>
  <!-- end team section -->


  <!-- client section -->
  <?php include('client-section.php'); ?>
  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Full Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <?php include('info-section.php'); ?>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>