
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
    <section class="pos-rel bg-light-gray">
      <div class="container-fluid p-0">

        <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md" style="box-shadow: 0px 18px 76px 0px rgba(0, 0, 0, 0.06);">
          <div class="col-md-12 col-lg-5 bg-fixed bg-img-7 request_pag_img">
              &nbsp;
          </div>


          <div class="col-md-12 col-lg-7 col-sm-12">
            
            <div class="wide-tb-90">
              <div class="col-sm-10 offset-md-1 col-md-10 col-lg-8">
                <h2 class="h2-xl mb-4 fw-6">Request A Quote</h2>                       
                <form action="#" method="post" novalidate="novalidate" class="rounded-field">
                    
                    <div class="form-row mb-4">
                      <div class="col">
                        <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                            <option value="">Freight Type</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                            <option value="Type 4">Type 4</option>
                        </select>
                      </div>
                      <div class="col">
                        <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                            <option value="">Incoterms</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                            <option value="Type 4">Type 4</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row mb-4">
                      <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="City of departure">
                      </div>
                      <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="Delivery city">
                      </div>
                    </div>
                    <div class="form-row mb-4">
                      <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Total gross weight (KG)">
                      </div>
                      <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="Dimension">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col">
                        <div class="center-head"><span class="bg-light-gray txt-orange">Your Personal Details</span></div>
                      </div>
                    </div>
                    <div class="form-row mb-4">
                      <div class="col">
                        <input type="text" name="name" class="form-control mb-3" placeholder="Your Name">
                        <input type="text" name="name" class="form-control mb-3" placeholder="Email">
                        <input type="text" name="name" class="form-control" placeholder="Phone Number">
                      </div>
                      <div class="col">
                        <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col pt-3">
                        <button type="submit" class="form-btn btn-theme bg-orange">Send Message <i class="icofont-rounded-right"></i></button>
                      </div>
                    </div>
                </form>        
              </div>        
              
            </div>
          </div>
        </div>
      </div>        
    </section>
    <!-- Contact Details End -->

    <!-- How It Works Start -->
    <section class="bg-light-gray">
      <div class="container-fluid p-0">
        <div class="row align-items-center no-gutters">       
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center"> 
              <div class="px-5 wide-tb-100">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                    <i class="icofont-glass"></i>
                </div>
                <h4 class="h4-md">SAFE & SECURE</h4>
                Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
              </div>
            </div>
            <!-- Icon Boxes -->
            
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center bg-fixed clients-bg pos-rel"> 
              <div class="bg-overlay white opacity-40"></div>
              <div class="px-5 wide-tb-100" style="position: relative; z-index: 999;">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                    <i class="icofont-delivery-time"></i>
                </div>
                <h4 class="h4-md">FAST DELIVERY</h4>
                Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
              </div>
            </div>
            <!-- Icon Boxes -->

            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center"> 
              <div class="px-5 wide-tb-100">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                    <i class="icofont-live-support"></i>
                </div>
                <h4 class="h4-md">24/7 Support</h4>
                Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
              </div>
            </div>
            <!-- Icon Boxes -->
        </div>
      </div>        
    </section>
    <!-- How It Works End -->

    <!-- Callout Start -->
    <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
      <div class="bg-overlay blue opacity-60"></div>
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0">
              <h4 class="h4-xl">Interested in working with Logzee?</h4>
            </div>
            <div class="col">
              <div class="center-text">
                We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach
              </div>
            </div>
            <div class="col-sm-auto">
              <a href="#" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
      </div>
    </section>
    <!-- Callout End -->    

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
  <!-- REVOLUTION JS FILES -->
  
  </body>
</html>