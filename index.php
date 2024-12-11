<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit'])) {
    
    $bookingnum = mt_rand(100000000, 999999999);
    $pname = $_POST['pname'];
    $rname = $_POST['rname'];
    $phone = $_POST['phone'];
    $hdate = $_POST['hdate'];
    $htime = $_POST['htime'];
    $ambulancetype = $_POST['ambulancetype'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $message = $_POST['message'];
   
    $query = mysqli_query($con, "INSERT INTO tblambulancehiring (BookingNumber, PatientName, RelativeName, RelativeConNum, HiringDate, HiringTime, AmbulanceType, Address, City, State, Message) VALUES ('$bookingnum', '$pname', '$rname', '$phone', '$hdate', '$htime', '$ambulancetype', '$address', '$city', '$state', '$message')");

    if ($query) {
        echo "<script>alert('Your request has been sent successfully. Your Booking Number is: $bookingnum');</script>";
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Emergancy Ambulance Hiring Portal || Home Page</title>
 
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">

  
</head>

<body>

 <?php include_once('includes/header.php');?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/s1.jpg)">
          <div class="container">
            <h2>Welcome to <span>Ambulance Hiring Portal</span></h2>
  
            <a href="#appointment" class="btn-get-started scrollto">Hire Ambulance</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s2.jpg)">
          <div class="container">
            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</h2>
        
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s3.jpg)">
          <div class="container">
            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</h2>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Life Support</a></h4>
         
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Medical Support</a></h4>
 
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Emergency Kit</a></h4>
         
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-baby"></i></div>
              <h4 class="title"><a href="">NICU Support
              </a></h4>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
    <div class="container " data-aos="zoom-in">

        <div class="banner">
            <img src="assets/img/ambulance.png" alt="Ambulance">
            <div class="content">
                <h1>In an emergency? Need help now?</h1>
                <p>Call anytime +1 - (246) 333-0089</p>
            <a class="cta-btn scrollto" href="#appointment">Hire an Ambulance</a>
        </div>
            </div>
        </div>
            
        
    </div>
</section>
<!-- End Cta Section -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="title">
          <p>What We’re Offering</p>
          <h1>About Our Services</h1>
        </div>
      <div class="row justify-content-around">
    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card-box" data-aos="fade-up" data-aos-delay="100">
            <h1>1</h1>
            <div class="card">
                <img src="assets/img/service-v1-1.jpg" alt="Ambulance Car">
                <div class="card-content">
                    <div class="card-title">Ambulance Car</div>
                    <div class="card-text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
                    <a href="#" class="card-link">READ MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card-box" data-aos="fade-up" data-aos-delay="200">
            <h1>2</h1>
            <div class="card">
                <img src="assets/img/service-v1-2.jpg" alt="Ambulance Car">
                <div class="card-content">
                    <div class="card-title">Ambulance Car</div>
                    <div class="card-text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
                    <a href="#" class="card-link">READ MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card-box" data-aos="fade-up" data-aos-delay="300">
            <h1>3</h1>
            <div class="card">
                <img src="assets/img/service-v1-3.jpg" alt="Ambulance Car">
                <div class="card-content">
                    <div class="card-title">Medical Escort</div>
                    <div class="card-text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
                    <a href="#" class="card-link">READ MORE</a>
                </div>
            </div>
        </div>
    </div>

    
    </div>
</div>



        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section class="benefits-section py-5 bg-light text-center">
    <div class="container">
        <h2 class="text-secondary">Our Benefits List</h2>
        <h1 class="text-primary mb-4">Our Company Formula For Success</h1>
        <p class="text-secondary mb-5">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="row justify-content-around">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card benefit-card h-100">
                    <div class="card-body">
                        <div class="icon mb-3"><img src="assets/img/icon1.png" alt="Longstanding Service"></div>
                        <h3 class="card-title text-primary">Longstanding Service</h3>
                        <p class="card-text">Lorem ipsum is simply dolor sit am adipi we help.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card benefit-card h-100">
                    <div class="card-body">
                        <div class="icon mb-3"><img src="assets/img/icon2.png" alt="High Standard of Safety"></div>
                        <h3 class="card-title text-primary">High Standard of Safety</h3>
                        <p class="card-text">Lorem ipsum is simply dolor sit am adipi we help.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card benefit-card h-100">
                    <div class="card-body">
                        <div class="icon mb-3"><img src="assets/img/icon3.png" alt="Bedside to Bedside Care"></div>
                        <h3 class="card-title text-primary">Bedside to Bedside Care</h3>
                        <p class="card-text">Lorem ipsum is simply dolor sit am adipi we help.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card benefit-card h-100">
                    <div class="card-body">
                        <div class="icon mb-3"><img src="assets/img/icon4.png" alt="Affordable and Effective"></div>
                        <h3 class="card-title text-primary">Affordable and Effective</h3>
                        <p class="card-text">Lorem ipsum is simply dolor sit am adipi we help.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About Us</h2>
            <?php
            $ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {
            ?>
            <p><?php echo $row['PageDescription']; ?></p><?php } ?>
        </div>
        
        <!-- Banner Section -->
        <div class="banner">
            <img src="assets/img/dep" alt="Ambulance Service" class="img-fluid">
            <div class="banner-text">
                <h3>Trusted Ambulance Services</h3>
                <p>Providing reliable and efficient medical transport solutions for over 20 years.</p>
            </div>
        </div>
        
        <!-- Gallery Section -->
        <div class="row gallery">
            <div class="col-lg-4 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-ambulance"></i></div>
                    <h4>24/7 Emergency Services</h4>
                    <p>We are always ready to provide immediate medical assistance, no matter the time or place.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4>Experienced Staff</h4>
                    <p>Our team consists of highly trained professionals dedicated to saving lives and providing the best care.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Safety & Comfort</h4>
                    <p>We ensure the highest standards of safety and comfort during transport to provide peace of mind.</p>
                </div>
            </div>
        </div>
        
        <!-- Image Gallery -->
        <div class="row">
            <div class="col-lg-3 col-md-4 col-6">
                <img src="assets/img/departments-1.jpg" class="img-fluid gallery-img" alt="Gallery Image 1">
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <img src="assets/img/departments-2.jpg" class="img-fluid gallery-img" alt="Gallery Image 2">
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <img src="assets/img/departments-3.jpg" class="img-fluid gallery-img" alt="Gallery Image 3">
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <img src="assets/img/departments-4.jpg" class="img-fluid gallery-img" alt="Gallery Image 4">
            </div>
        </div>
    </div>
</section>


    



    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hire an Ambulance</h2>
        </div>

        <form action="" method="post" role="form" class="form-control" data-aos="fade-up" data-aos-delay="50">
          <div class="row g-3 align-items-center" style="display: flex; flex-wrap: wrap; gap: 15px; padding-top: 10px;">
            <div class="col-md-3 form-group">
              <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter Patient Name" required>
            </div>
            <div class="col-md-3 form-group">
              <input type="text" name="rname" class="form-control" id="rname" placeholder="Enter Relative Name" required>
            </div>
           
            <div class="col-md-3 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Relative Phone Number" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 form-group mt-3">
              <input type="date" name="hdate" class="form-control datepicker" id="hdate" placeholder="Hiring Date" required>
            </div>
            <div class="col-md-3 form-group mt-3">
              <input type="time" name="htime" class="form-control datepicker" id="htime" placeholder="Hiring Time" required>
            </div>
            <div class="col-md-3 form-group">
              <select name="ambulancetype" id="ambulancetype" class="form-select">
                <option value="">Select Type of Ambulance</option>
                <option value="1">Basic Life Support (BLS) Ambulances</option>
                <option value="2"> Advanced Life Support (ALS) Ambulances</option>
                <option value="3">Non-Emergency Patient Transport Ambulances</option>
                <option value="4">Boat Ambulance</option>
                
               
              </select>
            </div>
          </div>
           <div class="row" style="padding-top:20px">
            <div class="col-md-3 form-group">
              <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required>
            </div>
            <div class="col-md-3 form-group">
              <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" required>
            </div>
           
            <div class="col-md-3 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="3" placeholder="Message (Optional)"></textarea>
          </div>
         
          <div class="text-center" style="padding-top: 20px;padding-bottom: 20px;"><button type="submit"  name="submit" class="btn btn-primary">Submit</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

      </div>

  

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12">

             <div class="row">
              <?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p><?php  echo $row['PageDescription'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php  echo $row['Email'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><?php  echo $row['MobileNumber'];?></p>
                </div>
              </div><?php } ?>
            </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include_once('includes/footer.php');?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>