
<?php include "includes/top-header.php"; ?>

<body>

  <!-- Page loader Start -->
 <?php //include "includes/pageloader.php"; ?> 
  <!-- Page loader End -->

 <?php include "includes/header.php"; ?>

  <!-- Fullscreen Slider Start -->
  <?php //include "includes/slider.php"; ?>
  <!-- Fullscreen Slider End -->

 <!-- Page Breadcrumbs Start -->
  <?php include "includes/page_title.php"; ?>
  <!-- Page Breadcrumbs End -->

  <!-- Main Body Content Start -->
   <main id="body-content">

    <!-- Contact Details Start -->
    <section class="wide-tb-80 contact-full-shadow">
      <div class="container">
        <div class="contact-map-bg">
          <img src="<?php echo base_url();?>Theme/images/map-bg.png" alt="">
        </div>
        <div class="row justify-content-between">
          <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
            <div class="contact-detail-shadow">
              <h4>Germany</h4>
              <div class="d-flex align-items-start items">
                <i class="icofont-google-map"></i> <span>Envato Pty Ltd, 13/2 Elizabeth
St Melbourne VIC 3000, Australia</span>
              </div>
              <div class="d-flex align-items-start items">
                <i class="icofont-phone"></i> <span>+1 (408) 786 - 5117</span>
              </div>
              <div class="text-nowrap d-flex align-items-start items">
                <i class="icofont-email"></i> <a href="#">germany@logzee.com</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
            <div class="contact-detail-shadow">
              <h4>Spain</h4>
              <div class="d-flex align-items-start items">
                <i class="icofont-google-map"></i> <span>Envato Pty Ltd, 13/2 Elizabeth
St Melbourne VIC 3000, Australia</span>
              </div>
              <div class="d-flex align-items-start items">
                <i class="icofont-phone"></i> <span>+1 (408) 786 - 5117</span>
              </div>
              <div class="text-nowrap d-flex align-items-start items">
                <i class="icofont-email"></i> <a href="#">spain@logzee.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </section>
    <!-- Contact Details End -->

    <!-- Contact Us From -->
    <section class="wide-tb-100 bg-light-gray pt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-8 offset-lg-2 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
            <div class="free-quote-form contact-page">
                <!-- Heading Main -->
                <h1 class="heading-main mb-4">
                  Get in touch
                </h1>
                <!-- Heading Main -->
                
                <form action="#" method="post" novalidate="novalidate" class="col rounded-field">
                    <div class="form-row mb-4">
                      <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-row mb-4">
                      <div class="col">
                        <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                            <option value="">Transport Type</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                            <option value="Type 4">Type 4</option>
                        </select>
                      </div>
                      <div class="col">
                        <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                            <option value="">Type of freight</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                            <option value="Type 4">Type 4</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row mb-4">
                      <div class="col">
                        <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-row text-center">

                        <button type="submit" class="form-btn mx-auto btn-theme bg-orange">Submit Now <i class="icofont-rounded-right"></i></button>
                    </div>
                </form>                
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us From -->

    <!-- Google Map Start -->
    <section class="map-bg">
      <div id="map-holder" class="pos-rel">
          <div id="map_extended">
              <p>This will be replaced with the Google Map.</p>
          </div>
      </div>      
    </section>     
    <!-- Google Map Start -->

    <!-- Email Subscribe Start -->
   <?php include "includes/newsletter.php"; ?>
    <!-- Email Subscribe End -->
  </main>  
     

  <!-- Main Footer Start -->
  <?php include "includes/footer.php"; ?>
  <!-- Main Footer End -->

  <!-- Search Popup Start -->
  <?php include "includes/search.php"; ?>
  <!-- Search Popup End -->

  <!-- Back To Top Start -->
  <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
  <!-- Back To Top End -->

  <!-- Request Modal -->
  <?php include "includes/req_modal.php"; ?> 
  <!-- Request Modal -->

  <!-- Main JavaScript -->

<?php include "includes/footer-bottom.php"; ?> 

  </body>
</html>