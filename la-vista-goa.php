<?php include("inc/head.php") ?>



<body>

  <!-- Loader -->

  <div class="loader">
    <div class="page-lines">
      <div class="container">
        <div class="col-line col-xs-4">
          <div class="line"></div>
        </div>
        <div class="col-line col-xs-4">
          <div class="line"></div>
        </div>
        <div class="col-line col-xs-4">
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="loader-brand">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
  </div>

  <!-- Header -->

  <header id="top" class="header-home">

    <!-- Navigation Desctop -->

    <nav class="navbar-desctop visible-md visible-lg" style="padding: 2.9vmin 0 0;background: #000;">
      <div class="container">
        <a href="#top" class="brand js-target-scroll">
          <img class="brand-logo-sm lv-nav-logo" src="assets/img/la-vista-logo.png" alt="La Vista Goa"/>
        </a>
        <ul class="nav navbar-desctop-menu" style="padding-top: 1rem">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#gallery">Gallery</a>
          </li>
          <li>
            <a href="#highlights">Highlights</a>
          </li>
          <li>
            <a href="#day">Day Plan</a>
          </li>
          <li>
            <a href="#amenities">Amenities</a>
          </li>
          <li>
            <a href="#location">Location</a>
          </li>
          <li>
            <a href="#contacts">Contacts</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Navigation Mobile -->

    <nav class="nav navbar-mobile bg-black" style="background: #000">
      <a href="#top" class="brand js-target-scroll">
        <img class="brand-logo-sm lv-nav-logo" src="assets/img/la-vista-logo.png" alt="La Vista Goa"/>
      </a>

      <!-- Navbar Collapse -->

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav-mobile">
          <li class="active">
            <a href="/">Home</a>
          </li>
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#gallery">Gallery</a>
          </li>
          <li>
            <a href="#highlights">Highlights</a>
          </li>
          <li>
            <a href="#day">Day Plan</a>
          </li>
          <li>
            <a href="#amenities">Amenities</a>
          </li>
          <li>
            <a href="#location">Location</a>
          </li>
          <li>
            <a href="#contacts">Contacts</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Layout -->

  <div class="layout">

    <div class="content">

      <!-- Banner / Hero Video -->

      <section id="banner" class="lv-hero-banner">
        <div class="lv-hero-video-wrapper">
          <video class="lv-hero-video" autoplay muted loop playsinline poster="assets/img/la-vista-goa/banner.jpeg">
            <source src="assets/img/la-vista-goa/la-vista-goa.mp4" type="video/mp4">
          </video>
          <div class="lv-hero-overlay">
            <div class="lv-hero-text-block">
              <div class="lv-hero-location-tag"><i class="fa-solid fa-location-dot"></i>&nbsp; Sindhudurg &middot; New Goa</div>
              <h1 class="lv-hero-main-title">La Vista Goa</h1>
              <p class="lv-hero-tagline">Farms &amp; Resorts &mdash; Your Own Private Resort</p>
              <div class="lv-hero-divider"></div>
              <div class="lv-hero-stat-row">
                <div class="lv-hero-stat-item">
                  <span class="lv-hero-stat-num">100+</span>
                  <span class="lv-hero-stat-label">Acres Gated</span>
                </div>
                <div class="lv-hero-stat-item">
                  <span class="lv-hero-stat-num">40 Min</span>
                  <span class="lv-hero-stat-label">from Goa</span>
                </div>
                <div class="lv-hero-stat-item">
                  <span class="lv-hero-stat-num">1,350+</span>
                  <span class="lv-hero-stat-label">Sq. Yds. Plots</span>
                </div>
                <div class="lv-hero-stat-item">
                  <span class="lv-hero-stat-num">Lakefront</span>
                  <span class="lv-hero-stat-label">Views</span>
                </div>
              </div>
              <div class="lv-hero-cta-wrap">
                <a href="#about" class="btn lv-hero-cta-primary js-target-scroll">Explore Project <i class="icon-next"></i></a>
                <a href="assets/pdf/LaVistaGoa.pdf" download class="btn lv-hero-cta-secondary">Download Brochure <i class="icon-next"></i></a>
              </div>
            </div>
          </div>
          <a href="#about" class="lv-hero-scroll-hint js-target-scroll">
            <span class="lv-scroll-txt">Scroll</span>
            <i class="fa-solid fa-chevron-down"></i>
          </a>
        </div>
      </section>

      <!-- About  -->

      <section id="about" class="about section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">About <span class="text-primary">La Vista Goa</span></h2>
            <strong class="fade-title-left">About</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-base col-sm-6 col-md-8">
                <h3 class="col-about-title">A Unique Lifestyle with Unmatched Waterfront Resort Living<span class="text-primary">,</span></h3>
                <div class="col-about-info">
                  <p>
                    <b>Your Own Private Resort in New Goa!</b>
                    <br>
                    <br>
                    Welcome to La Vista Goa — Farms &amp; Resorts, a prestigious project by Silver Lining Group located in the breathtaking Sindhudurg district, the gateway to New Goa. Spread across 100+ acres of lush, gated development, La Vista Goa offers resort-themed farmhouse living with lakefront views, nature trails, and a low AQI environment.
                    <br>
                    <br>
                    With plot sizes ranging from <b>1,350 to 4,840 sq. yds.</b> on fully paid-up land, this is your chance to own a piece of paradise — a hilltop retreat by the lake where every day feels like a vacation.
                    <br>
                    <br>
                    <b>INVEST, OWN &amp; EARN — #YourOwnPrivateResort</b>
                  </p>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-about-img col-sm-6 col-md-4">
                  <video class="img-responsive" autoplay loop muted poster="assets/img/la-vista-goa/logo-pool-gold.jpeg">
                      <source src="assets/img/la-vista-goa/la-vista-goa.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery -->

      <section id="gallery" class="projects section">
        <div class="container">
          <h2 class="section-title">Project<span class="text-primary"> Gallery</span></h2>
        </div>
        <div class="section-content">
          <div class="projects-carousel js-projects-carousel js-projects-gallery">
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0001.jpg" title="La Vista Goa - Farm Landscape 1">
                <figure>
                  <img alt="La Vista Goa - Premium Farm Landscape" src="assets/img/la-vista-goa/FARM LA VISTA_page-0001.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Farm Landscape <br> & Terrain
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0002.jpg" title="La Vista Goa - Farm Landscape 2">
                <figure>
                  <img alt="La Vista Goa - Expansive Farm Landscape" src="assets/img/la-vista-goa/FARM LA VISTA_page-0002.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      100+ Acres <br> Gated Development
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0001.jpg" title="La Vista Goa - Farm Views 1">
                <figure>
                  <img alt="La Vista Goa - Scenic Farm Views" src="assets/img/la-vista-goa/Farm house views FINAL_page-0001.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Scenic <br> Views & Layout
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0001.jpg" title="La Vista Goa - Farmhouse Design 1">
                <figure>
                  <img alt="La Vista Goa - Modern Farmhouse Design" src="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0001.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Modern <br> Farmhouse Design
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0002.jpg" title="La Vista Goa - Farmhouse Design 2">
                <figure>
                  <img alt="La Vista Goa - Farmhouse Architecture" src="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0002.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Farmhouse <br> Interiors
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0002.jpg" title="La Vista Goa - Farm Views 2">
                <figure>
                  <img alt="La Vista Goa - Farm Views 2" src="assets/img/la-vista-goa/Farm house views FINAL_page-0002.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Farm Views <br> &amp; Surroundings
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0003.jpg" title="La Vista Goa - Farm Views 3">
                <figure>
                  <img alt="La Vista Goa - Farm Views 3" src="assets/img/la-vista-goa/Farm house views FINAL_page-0003.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Lush Green <br> Landscapes
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0004.jpg" title="La Vista Goa - Farm Views 4">
                <figure>
                  <img alt="La Vista Goa - Farm Views 4" src="assets/img/la-vista-goa/Farm house views FINAL_page-0004.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Serene Farm <br> Environment
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0003.jpg" title="La Vista Goa - Farmhouse Design 3">
                <figure>
                  <img alt="La Vista Goa - Farmhouse Design 3" src="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0003.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Farmhouse <br> Exterior Design
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0003.jpg" title="La Vista Goa - Farm 3">
                <figure>
                  <img alt="La Vista Goa - Farm Area 3" src="assets/img/la-vista-goa/FARM LA VISTA_page-0003.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Gated Farm <br> Community
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0004.jpg" title="La Vista Goa - Farm 4">
                <figure>
                  <img alt="La Vista Goa - Farm Area 4" src="assets/img/la-vista-goa/FARM LA VISTA_page-0004.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Private Farm <br> Plot Views
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0005.jpg" title="La Vista Goa - Farm 5">
                <figure>
                  <img alt="La Vista Goa - Farm Area 5" src="assets/img/la-vista-goa/FARM LA VISTA_page-0005.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Open Green <br> Farm Spaces
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0006.jpg" title="La Vista Goa - Farm 6">
                <figure>
                  <img alt="La Vista Goa - Farm Area 6" src="assets/img/la-vista-goa/FARM LA VISTA_page-0006.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Lakefront <br> Farm Estates
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0007.jpg" title="La Vista Goa - Farm 7">
                <figure>
                  <img alt="La Vista Goa - Farm Area 7" src="assets/img/la-vista-goa/FARM LA VISTA_page-0007.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Nature-Backed <br> Farm Retreat
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Highlights -->

      <section id="highlights" class="services section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">Project</span> Highlights</h2>
            <strong class="fade-title-right">Highlights</strong>
          </header>
          <div class="section-content">
            <div class="row-services row-base row" style="margin:0;">
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp">
                <div class="service-item text-center">
                  <i class="fa-solid fa-mountain-sun la-vista-icon"></i>
                  <h4>100+ Acres Gated Development</h4>
                  <p>A sprawling, secure community set amidst lush greenery, offering privacy and exclusivity in every corner.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-water la-vista-icon"></i>
                  <h4>Lakefront Views &amp; Nature Trails</h4>
                  <p>Wake up to stunning lake vistas and explore scenic nature trails that weave through the property.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-umbrella-beach la-vista-icon"></i>
                  <h4>Resort-Themed Lifestyle</h4>
                  <p>Experience world-class resort amenities right at your doorstep — every day feels like a vacation.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-utensils la-vista-icon"></i>
                  <h4>BBQ &amp; Bar Shack Experience</h4>
                  <p>Enjoy the authentic Goan vibe with open-air BBQ and bar shacks nestled in tropical surroundings.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-people-roof la-vista-icon"></i>
                  <h4>Family Retreat Spaces</h4>
                  <p>Dedicated areas for family bonding — from children's play zones to communal gathering spots.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.9s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-wind la-vista-icon"></i>
                  <h4>Low AQI Environment</h4>
                  <p>Breathe clean, fresh air in the pristine surroundings of Sindhudurg — far from city pollution.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Proximity Strip -->

      <section class="la-vista-proximity">
        <div class="container">
          <div class="la-vista-proximity-grid">
            <div class="la-vista-proximity-item">
              <div class="distance">24 KM</div>
              <div class="place">Tarkarli Beach</div>
              <div class="place-detail">(Water Sports)</div>
            </div>
            <div class="la-vista-proximity-item">
              <div class="distance">24 KM</div>
              <div class="place">Devbag Beach</div>
              <div class="place-detail">(Snorkeling)</div>
            </div>
            <div class="la-vista-proximity-item">
              <div class="distance">40 MINS</div>
              <div class="place">Chipi Airport</div>
              <div class="place-detail">&nbsp;</div>
            </div>
            <div class="la-vista-proximity-item">
              <div class="distance">40 MINS</div>
              <div class="place">Goa</div>
              <div class="place-detail">&nbsp;</div>
            </div>
            <div class="la-vista-proximity-item">
              <div class="distance">50 MINS</div>
              <div class="place">Mopa Airport</div>
              <div class="place-detail">(International)</div>
            </div>
          </div>
        </div>
      </section>

      <!-- Brand Ambassador -->

      <section id="brand" class="projects section">
        <div class="container">
          <h2 class="section-title">Inspired By <span class="text-primary">Superstar Sanjay Dutt</span></h2>
        </div>
        <div class="section-content section-content-brand">
          <div class="row">
            <div class="col-md-4 p-3">
                <img alt="Sanjay Dutt - Brand Ambassador" class="img-responsive" src="assets/img/la-vista-goa/sanjay-club.jpeg">
            </div>
            <div class="col-md-4 p-3">
              <div class="col-brand-info">
                <p>
                  <i>A life that feels like a vacation! La Vista Goa is more than just a property — it is your own private resort 
                  in the heart of New Goa. With the D Club inspired by the iconic Sanjay Dutt himself, this project brings 
                  together luxury, entertainment, and nature in a way never seen before.</i>
                  <br>
                  <br>
                  <i>Imagine waking up to lakefront views, spending your evenings at a beach-style bar, and living in a 
                  gated community that offers resort-level services — all just 40 minutes from Goa and 50 minutes from 
                  Mopa International Airport.</i>
                  <br>
                  <br>
                  Within La Vista Goa, <b>The D Club</b> boasts a fully operational, state-of-the-art entertainment hub, 
                  inspired by none other than Mr. Sanjay Dutt himself.
                </p>
              </div>
            </div>
            <div class="col-md-4 p-3">
                <img alt="La Vista Goa Logo" class="img-responsive" src="assets/img/la-vista-goa/villa.jpeg" style="height:784px;">
            </div>
          </div>
        </div>
      </section>

      <!-- Day Plan -->

      <section id="day" class="services section la-vista-day-plan">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">Day</span> Planner</h2>
            <strong class="fade-title-right">Planner</strong>
          </header>
          <div class="section-content">
            <div class="row-services row-base row" style="display: flex;flex-wrap: wrap;justify-content: center;">
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>6:00 AM</h4>
                  <p>Start your day with a refreshing sunrise walk along the lakefront nature trails.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>7:30 AM</h4>
                  <p>Rejuvenate with an open-air yoga &amp; meditation session amidst the hilltop greenery.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>9:00 AM</h4>
                  <p>Enjoy a hearty breakfast with fresh organic produce at the multi-cuisine restaurant.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>10:30 AM</h4>
                  <p>Relax at your private deck or take a dip in the infinity pool with cabana views.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>12:00 PM</h4>
                  <p>Head out for water sports at Tarkarli Beach or snorkeling at Devbag Beach.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>2:00 PM</h4>
                  <p>Relish a delicious Goan-style lunch at the resort café with live kitchen experience.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>3:30 PM</h4>
                  <p>Explore the cycling &amp; jogging tracks or enjoy family activities at the adventure zone.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>5:00 PM</h4>
                  <p>Unwind with a soothing spa therapy or wellness treatment at the wellness center.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>6:30 PM</h4>
                  <p>Gather around for a beachside BBQ with cocktails at the bar shack experience.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>8:00 PM</h4>
                  <p>Savour fine dining at the rooftop restaurant overlooking the lake and hills.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>9:30 PM</h4>
                  <p>Enjoy live music or entertainment at the D Club — inspired by Sanjay Dutt.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center">
                  <h4>11:00 PM</h4>
                  <p>End your night under the stars with a bonfire or a peaceful lakeside stroll.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->

      <section id="services" class="services section la-vista-services">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">Our</span> Services</h2>
            <strong class="fade-title-right">Services</strong>
          </header>
          <div class="section-content">
            <div class="row-services row-base row">
              <div class="col-base col-service col-sm-6 col-md-6 wow fadeInUp">
                <div class="service-item text-center">
                  <i class="fa-solid fa-hotel la-vista-icon"></i>
                  <h4>Luxurious Accommodations</h4>
                  <p>Enjoy spacious Goa-Portuguese style farmhouses with ultra-luxurious club amenities, private pools, and modern interiors.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-champagne-glasses la-vista-icon"></i>
                  <h4>Dining &amp; Entertainment</h4>
                  <p>Savour world-class Goan and multi-cuisine fare at our restaurant &amp; bar shack, complete with live kitchen and beachside BBQ experience.</p>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-service col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-spa la-vista-icon"></i>
                  <h4>Health &amp; Wellness</h4>
                  <p>Stay fit at our state-of-the-art gym, practice yoga on the hilltop, or unwind with healing therapies at our spa &amp; wellness center.</p>
                </div>
              </div>
              <div class="col-base col-service col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item text-center">
                  <i class="fa-solid fa-sailboat la-vista-icon"></i>
                  <h4>Adventure &amp; Water Sports</h4>
                  <p>Engage in water sports at nearby beaches, cycling, jogging tracks, and enjoy a dedicated kids' play &amp; adventure zone.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Project Plan & Master Map -->

      <section id="project-plan" class="about section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Project <span class="text-primary">Plan</span></h2>
            <strong class="fade-title-left">Master Plan</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-base col-sm-6 col-md-6">
                <h3 class="col-about-title">Development<br> Phases<span class="text-primary">:</span></h3>
                <div class="col-about-info">
                  <p>
                    La Vista Goa is being developed in strategic phases to ensure superior quality and timely delivery of world-class amenities. 
                    <br><br>
                    <b>Phase 1:</b> Infrastructure development, security perimeter, and initial resort amenities including the D Club entertainment hub.
                    <br><br>
                    <b>Phase 2:</b> Expansion of luxury villas, additional recreational facilities, and complementary services to enhance the resort experience.
                    <br><br>
                    Each phase is meticulously planned to maintain the pristine environment and deliver an exceptional resort-living experience to our residents.
                  </p>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-about-img col-sm-6 col-md-6">
                <img alt="La Vista Goa Master Plan Map" class="img-responsive" src="assets/img/la-vista-goa/la-vista-goa-map.PNG">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Plot Sizes -->

      <section id="plot-sizes" class="about section la-vista-plot-section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Plot <span class="text-primary">Sizes</span></h2>
            <strong class="fade-title-left">Plots</strong>
          </header>
          <div class="section-content">
            <div class="row-base row la-vista-plot-grid">
              <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="la-vista-plot-card text-center">
                  <div class="la-vista-plot-size">1,350</div>
                  <div class="la-vista-plot-unit">Sq. Yds.</div>
                  <div class="la-vista-plot-label">Starting Size</div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="la-vista-plot-card text-center">
                  <div class="la-vista-plot-size">2,500</div>
                  <div class="la-vista-plot-unit">Sq. Yds.</div>
                  <div class="la-vista-plot-label">Mid Size</div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="la-vista-plot-card text-center">
                  <div class="la-vista-plot-size">3,600</div>
                  <div class="la-vista-plot-unit">Sq. Yds.</div>
                  <div class="la-vista-plot-label">Premium Size</div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="la-vista-plot-card text-center">
                  <div class="la-vista-plot-size">4,840</div>
                  <div class="la-vista-plot-unit">Sq. Yds.</div>
                  <div class="la-vista-plot-label">Max Size</div>
                </div>
              </div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
              <p style="font-size: 1.2em;"><b>Fully Paid-Up Land</b> &nbsp;|&nbsp; <b>Price on Demand</b></p>
              <a href="assets/pdf/LaVistaGoa.pdf" download class="btn btn-shadow-2 wow swing">Download Brochure <i class="icon-next"></i></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Invest -->

      <section id="invest" class="services section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Why <span class="text-primary">Invest</span></h2>
            <strong class="fade-title-right">Invest</strong>
          </header>
          <div class="section-content">
            <div class="row-base row" style="display: flex;flex-wrap: wrap;justify-content: center;">
              <div class="col-sm-6 col-md-4 wow fadeInUp">
                <div class="la-vista-invest-card">
                  <i class="fa-solid fa-chart-line"></i>
                  <h4>High ROI Potential</h4>
                  <p>Sindhudurg is emerging as the next big luxury destination. Early investors stand to gain significant appreciation as New Goa develops.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="la-vista-invest-card">
                  <i class="fa-solid fa-file-contract"></i>
                  <h4>Fully Paid-Up Land</h4>
                  <p>No hidden charges or additional fees. Your plot is fully paid-up with clear title and complete documentation.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="la-vista-invest-card">
                  <i class="fa-solid fa-hand-holding-dollar"></i>
                  <h4>Revenue Management</h4>
                  <p>Benefit from our professional hospitality management services that generate rental income from your property year-round.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="la-vista-invest-card">
                  <i class="fa-solid fa-plane-departure"></i>
                  <h4>Prime Connectivity</h4>
                  <p>Just 40 mins from Goa, 50 mins from Mopa International Airport, and 24 km from pristine beaches — accessibility at its best.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="la-vista-invest-card">
                  <i class="fa-solid fa-shield-halved"></i>
                  <h4>Gated &amp; Secure</h4>
                  <p>24x7 security, CCTV surveillance, and gated access ensure your property is always safe and well-maintained.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="la-vista-invest-card">
                  <i class="fa-solid fa-star"></i>
                  <h4>Celebrity-Endorsed</h4>
                  <p>Backed by Bollywood superstar Sanjay Dutt as Brand Ambassador — a mark of trust, prestige, and quality.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Amenities List -->

      <section id="amenities-list" class="about section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Super <span class="text-primary">Amenities</span></h2>
            <strong class="fade-title-left">Amenities</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-base col-sm-6 col-md-5">
                <div class="col-about-info">
                  <ul class="amenities-list-main">
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>GATED COMMUNITY WITH 24X7 SECURITY</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>INFINITY POOL &amp; BEACH-STYLE BAR</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>LAKEFRONT OASIS &amp; NATURE TRAILS</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>BBQ &amp; BAR SHACK EXPERIENCE</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>LUXURIOUS CLUB HOUSE</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>SPA &amp; WELLNESS CENTER</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>PRIVATE DECKS &amp; CABANAS</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>OPEN-AIR YOGA &amp; MEDITATION ZONE</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>ORGANIC FARMING PLOTS</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>KIDS PLAY AREA &amp; ADVENTURE ZONE</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-base col-sm-6 col-md-7">
                <div class="col-about-info">
                  <ul class="amenities-list-main">
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>MULTI-CUISINE RESTAURANT &amp; CAFÉ</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>WATER SPORTS FACILITIES</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>CYCLING &amp; JOGGING TRACKS</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>AMPHITHEATRE &amp; EVENT LAWN</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>REVENUE &amp; HOSPITALITY MANAGEMENT</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>CONCIERGE SERVICE &amp; BUTLER ON CALL</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>STP PLANT &amp; CLEAN ENERGY</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>DOCTOR ON CALL</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>AI-POWERED SMART LIVING</p>
                    </li>
                    <li class="amenities-list-item">
                      <i class="fa-solid fa-leaf"></i>
                      <p>HOUSEKEEPING &amp; PROPERTY MAINTENANCE</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Amenities Gallery -->

      <section id="amenities" class="projects section">
        <div class="container">
          <h2 class="section-title">Our <span class="text-primary">Amenities</span></h2>
        </div>
        <div class="section-content">
          <div class="projects-carousel js-projects-carousel js-projects-gallery">
            <div class="project project-light">
              <a href="assets/img/la-vista-goa/logo-pool-gold.jpeg" title="Infinity Pool">
                <figure>
                  <img alt="Infinity Pool" src="assets/img/la-vista-goa/logo-pool-gold.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                      Infinity Pool <br> &amp; Cabanas
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project project-light">
              <a href="assets/img/la-vista-goa/villa.jpeg" title="Luxury Farmhouse">
                <figure>
                  <img alt="Luxury Farmhouse" src="assets/img/la-vista-goa/villa.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                      Goa-Portuguese <br> Architecture
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/hilltop-retreat.jpeg" title="Hilltop Retreat">
                <figure>
                  <img alt="Hilltop Retreat" src="assets/img/la-vista-goa/hilltop-retreat.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                      Hilltop Retreat <br> by the Lake
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/sanjay-club.jpeg" title="D Club">
                <figure>
                  <img alt="D Club by Sanjay Dutt" src="assets/img/la-vista-goa/sanjay-club.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                      D Club <br> Beach Bar
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/logo-pool-white.jpeg" title="Waterfront Living">
                <figure>
                  <img alt="Waterfront Living" src="assets/img/la-vista-goa/logo-pool-white.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                       Waterfront <br> Resort Living
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/villa-gold.jpeg" title="Luxury Villa">
                <figure>
                  <img alt="Luxury Gold Villa" src="assets/img/la-vista-goa/villa-gold.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                       Luxury Farmhouse <br> Living
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0003.jpg" title="Farm Landscape">
                <figure>
                  <img alt="Premium Farm Landscape" src="assets/img/la-vista-goa/FARM LA VISTA_page-0003.jpg">
                  <figcaption>
                    <h3 class="project-title">
                       Scenic Farm <br> Landscape
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0002.jpg" title="Farmhouse Views">
                <figure>
                  <img alt="Farmhouse Scenic Views" src="assets/img/la-vista-goa/Farm house views FINAL_page-0002.jpg">
                  <figcaption>
                    <h3 class="project-title">
                       Panoramic <br> Views
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/banner.jpeg" title="La Vista Goa Resort Banner">
                <figure>
                  <img alt="La Vista Goa Resort Overview" src="assets/img/la-vista-goa/banner.jpeg">
                  <figcaption>
                    <h3 class="project-title">
                      La Vista <br> Resort Overview
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0001.jpg" title="Farm Area 1">
                <figure>
                  <img alt="La Vista Goa - Farm Area" src="assets/img/la-vista-goa/FARM LA VISTA_page-0001.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Organic <br> Farm Produce
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/FARM LA VISTA_page-0002.jpg" title="Farm Area 2">
                <figure>
                  <img alt="La Vista Goa - Gated Farm Estate" src="assets/img/la-vista-goa/FARM LA VISTA_page-0002.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Gated Estate <br> Security
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0001.jpg" title="Farmhouse Design 1">
                <figure>
                  <img alt="La Vista Goa - Farmhouse Architecture" src="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0001.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Luxury <br> Architecture
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0002.jpg" title="Farmhouse Interiors">
                <figure>
                  <img alt="La Vista Goa - Farmhouse Interiors" src="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0002.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Premium <br> Interiors
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0003.jpg" title="Farmhouse Exterior">
                <figure>
                  <img alt="La Vista Goa - Farmhouse Exterior" src="assets/img/la-vista-goa/Farm house (4)_pages-to-jpg-0003.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Farmhouse <br> Exterior
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0003.jpg" title="Farm Views 3">
                <figure>
                  <img alt="La Vista Goa - Lush Landscapes" src="assets/img/la-vista-goa/Farm house views FINAL_page-0003.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Green <br> Walkways
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="assets/img/la-vista-goa/Farm house views FINAL_page-0004.jpg" title="Farm Views 4">
                <figure>
                  <img alt="La Vista Goa - Nature Trails" src="assets/img/la-vista-goa/Farm house views FINAL_page-0004.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Nature <br> Trails &amp; Parks
                    </h3>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Location  -->

      <section id="location" class="about section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Location </h2>
            <strong class="fade-title-left">Location</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-base col-sm-6 col-md-6">
                <h3 class="col-about-title">Sindhudurg, New Goa<span class="text-primary">,</span></h3>
                <div class="col-about-info">
                  <p>
                    La Vista Goa is strategically located in Sindhudurg district, the rapidly developing New Goa region, offering excellent connectivity:
                    <br>
                    <br>
                    <b>Tarkarli Beach (Water Sports): 24 km</b>
                    <br>
                    <b>Devbag Beach (Snorkeling): 24 km</b>
                    <br>
                    <b>Chipi Airport: 40 minutes</b>
                    <br>
                    <b>Goa: 40 minutes</b>
                    <br>
                    <b>Mopa International Airport: 50 minutes</b>
                    <br>
                    <br>
                    Sindhudurg is emerging as the next big destination for luxury living, with pristine beaches, rich cultural heritage, and rapidly improving infrastructure. The region offers the charm of Goa without the crowds — a perfect blend of serenity and accessibility.
                  </p>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-about-img col-sm-6 col-md-6">
                <img alt="La Vista Goa Location" class="img-responsive" src="assets/img/la-vista-goa/hilltop-retreat.jpeg">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contacts -->

      <section id="contacts" class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
            <strong class="fade-title-right">contacts</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                Silverliningdevelopers@gmail.com<br>
                1-B GF, hauz khas, near pansheel park club, Delhi - 110017
              </div>
              <div class="col-base  col-md-8">
                <form id="contactForm" class="">
                    <div class="row-field row">
                        <div class="col-field col-sm-6 col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required="" placeholder="Email *">
                            </div>
                        </div>
                        <div class="col-field col-sm-6 col-md-4">
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="company" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-field col-sm-12 col-md-4">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-message col-field col-sm-12">
                            <div class="form-group">
                                <div class="success-message" style="display:none;"><i class="fa fa-check text-primary"></i> Thank you! Your message has been successfully sent...</div>
                                <div class="error-message" style="display:none;">We're sorry, but something went wrong</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-submit text-right">
                        <button type="submit" class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
<?php include("inc/footer.php") ?>
