<?php include 'partials/header.php';?>
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Contact</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section><center>
      <div class="row">
        <!-- Contact Information -->
        <div class="col-12 col-md-6">
          <div class="contact-information">
            <div class="contact-heading mb-50">
              <h2>Contact Info</h2>
              <h6>We will be happy to assist you with any question</h6>
            </div>


            <h5>Address: Sector 6-12/D, Reliance Greens , Jamnagar PIN-361142, Gujarat</h5>
            <h5>Phone: +91 6352932720</h5>
            <h5>Open Hours: Mon - Fri: 8:00 AM to 6:00 PM</h5>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-12 col-md-6">
          <div class="contact-form">
            <div class="contact-heading">
              <h2>Get In Touch</h2>
              <h5>Don't hesitate to contact us</h5>
            </div>
            <!-- Form -->
            <form action="postcontact.php" method="post">
              <div class="row">
                <div class="col-10">
                  <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name" autocomplete="off">
                </div>
                <div class="col-10">
                  <input type="email" name="message-email" class="form-control mb-30" placeholder="Your Email" autocomplete="off">
                </div>
                <div class="col-10">
                  <textarea name="message" class="form-control mb-30" placeholder="Your Message" autocomplete="off"></textarea>
                </div>
                <div class="col-10">
                  <button type="submit" class="btn poca-btn">submit</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    </center>
  </section>
  <!-- ***** Contact Area End ***** -->
  <?php include 'partials/footer.php';?>