 <header>
    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent header-fullpage wow fadeInDown">
      <div class="container d-flex align-items-start">
        <div class="col col-lg-2 col-md-3">
          <a class="navbar-brand rounded-bottom light-bg" href="<?php echo base_url();?>">
            <img src="<?php echo base_url();?>Theme/images/logo_footer.png" alt="">
          </a>
        </div>
        <!-- Toggle Button Start -->
        <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Toggle Button End -->
        <div class="col-lg-auto">
          <div class="text-right top-bar-right">
              <!-- Topbar Language Dropdown Start -->
<!--              <div class="dropdown d-inline-flex lang-toggle">
                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                  <img src="images/us.svg" alt="" class="dropdown-item-icon"> 
                  <span class="d-inline-block d-lg-none">US</span>
                  <span class="d-none d-lg-inline-block">United States</span> <i class="icofont-rounded-down"></i>
                </a>
                <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                  <a class="dropdown-item active" href="#">English</a>
                  <a class="dropdown-item" href="#">Deutsch</a>
                  <a class="dropdown-item" href="#">Espa�ol&lrm;</a>
                </div>
              </div>-->
                <!-- Topbar Language Dropdown End -->    

              <!-- Topbar Social Icons Start -->
              <div class="top-bar-btn d-inline-flex social-icons">
                <a href="#"><i class="icofont-facebook"></i></a> 
                <a href="#"><i class="icofont-twitter"></i></a> 
                <a href="#"><i class="icofont-whatsapp"></i></a> 
                <a href="#"><i class="icofont-google-plus"></i></a> 
              </div>
              <!-- Topbar Social Icons End -->

              <!-- Topbar Request Quote Start -->
              <div class="top-bar-btn d-inline-flex request-btn"> 
                <a class="btn-theme icon-left bg-sky-blue light" href="#" role="button" data-toggle="modal" data-target="#request_popup"><i class="icofont-page"></i> Request Quote</a> 
              </div>
              <!-- Topbar Request Quote End -->
          </div>
          <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
            <div class="ml-auto pt-2">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="<?php echo base_url();?>" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icofont-rounded-down"></i></a>                
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                      <li><a class="dropdown-item" href="i<?php echo base_url();?>">Home Layout 1</a></li>
                      <li><a class="dropdown-item" href="index-2.html">Home Layout 2</a></li>
                      <li><a class="dropdown-item" href="index-3.html">Home Layout 3</a></li>
                      <li class="dropdown">
                          <a class="dropdown-toggle-mob dropdown-item" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Third Level Menu <i class="icofont-rounded-right float-right"></i></a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Action</a></li>
                            <li><a href="#" class="dropdown-item">Another action</a></li>
                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about-us.html">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">                  
                      <li><a class="dropdown-item" href="shortcodes-element.html">Shortcode Elements</a></li>
                      <li><a class="dropdown-item" href="typography.html">Typography</a></li>                  
                      <li><a class="dropdown-item" href="request-page.html">Request Quote</a></li>
                      <li><a class="dropdown-item" href="pricing-plan.html">Our Pricing</a></li>
                      <li><a class="dropdown-item" href="404-page.html">404 Page</a></li>                  
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="project-grid.html">Projects Grid</a></li>
                      <li><a class="dropdown-item" href="project-masonary.html">Projects Masonary</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" id="blog-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-rounded-down"></i></a>
                    
                    <ul class="dropdown-menu" aria-labelledby="blog-menu">
                      <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                      <li><a class="dropdown-item" href="blog-standard.html">Blog Standard</a></li>
                      <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                      <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                      <li><a class="dropdown-item" href="contact-us-option.html">Contact Us Option</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="search_home"><i class="icofont-search"></i></a>
                  </li>
              </ul>
              <!-- Main Navigation End -->
            </div>
          </div>        
        </div>
      </div>
    </nav>
    <!-- Main Navigation End -->
  </header>