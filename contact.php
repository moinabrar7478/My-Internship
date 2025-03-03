<?php include 'Header.php'; ?>

 <main id="main">

 <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">
            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location</h4>
                  <p type align="justify">14704 Vinginia Infantry Road<br>Centreville, AV 20121,<br> United State</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email</h4>
                  <p>management@dmllc.us</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call</h4>
                  <p>+571-263-9879</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
		  <form action="#" method="post" class="php-email-form">
            
			  <h2 style=" text-align:center">Send US Message </h2></br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="fname" placeholder="First Name" required>
                </div>
				 <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="lname" placeholder="Last Name" required>
                </div>
				<div class="col-md-6 form-group">
                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
				<div class="col-md-6 form-group">
                  <input type="text" name="country" class="form-control" id="country" placeholder="Enter Your country Name" required>
                </div>
				<div class="col-md-6 form-group">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Please Enter Current Date" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->
	</main><!-- End #main -->
	<?php
if(isset($_POST['submit']))
{
echo 'a';
include 'config.php';

$sql="INSERT INTO `contact1`(`First_Name`, `Last_Name`, `Mobile_No`, `Email_id`, `Country`,`Subject`,`Message`, `Date`) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['country']."','".$_POST['subject']."','".$_POST['message']."','".$_POST['date']."')";
$con->query($sql);
echo "Record Inserted";
}

include 'footer.php';?>
