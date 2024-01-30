<div>
    <div id="wrapper">

        <header id="header" class="full-header transparent-header  header-size-custom" data-sticky-shrink="false"
            data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <div id="logo">
                            <a href="/">
                                SAPTASANA SANTANA
                            </a>
                        </div>
                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>
                        <nav class="primary-menu">
                            <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="65">
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#wrapper">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-about">
                                        <div>About</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-services">
                                        <div>Services</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-blog">
                                        <div>Blog</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-contact">
                                        <div>Contact</div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>

        <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-100 include-header"
            data-loop="true" data-speed="1000" data-effect="fade">
            <div class="slider-inner">

                <div class="swiper swiper-parent">
                    <div class="swiper-wrapper">
                        @foreach ($dataHighlight as $row)
                            <div class="swiper-slide dark">
                                <div class="container">
                                    <div class="slider-caption slider-caption-center">
                                        <h2 data-animate="fadeInUp">{{ $row['title'] }}</h2>
                                        <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                                            {{ $row['description'] }}
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide-bg"
                                    style="background-image: url({{ Storage::url($row['file']) }});"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
                    <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
                </div>

                <a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250"
                    data-offset="65" class="one-page-arrow dark"><i
                        class="bi-chevron-down infinite animated fadeInDown"></i></a>
            </div>
        </section>

        <section id="content">
            <div class="content-wrap py-0">
                <div id="section-about" class="text-center page-section">
                    <div class="container">
                        <h2 class="mx-auto mb-5 font-body" style="max-width: 700px; font-size: 40px;">
                            {{ $about ? $about->title : null }}
                        </h2>
                        <p class="lead mx-auto mb-5" style="max-width: 800px;">
                            {{ $about ? $about->description : null }}
                        </p>
                    </div>
                </div>

                <div id="section-services" class="page-section pt-0">

                    <div class="section m-0">
                        <div class="container">
                            <div class="mx-auto text-center" style="max-width: 900px;">
                                <h2 class="mb-0 fw-light ls-1">We enjoy working on the Services &amp; Products we
                                    provide as much as you need them. This help us in delivering your Goals easily.
                                    Browse through the wide range of services we provide.</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-stretch">

                        <div class="col-lg-4 d-none d-md-block"
                            style="background: url('images/services/main-bg.jpg') center center no-repeat; background-size: cover;">
                        </div>
                        <div class="col-lg-8">
                            <div class="row align-items-stretch grid-border">
                                <div class="col-lg-4 col-md-6 col-padding">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-mobile op-gradient-icon"></i></a>
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Responsive Framework</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-padding">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i
                                                    class="icon-et-presentation op-gradient-icon"></i></a>
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Beautifully Presented</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-padding">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-puzzle op-gradient-icon"></i></a>
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Extensively Extendable</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-padding">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-gears op-gradient-icon"></i></a>
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Powerfully Customizable</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-padding">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-genius op-gradient-icon"></i></a>
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Geniusly Transformable</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-padding">
                                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i
                                                    class="icon-et-hotairballoon op-gradient-icon"></i></a>
                                        </div>
                                        <div class="fbox-content fbox-content-sm">
                                            <h3>Industrial Support</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section dark m-0">
                        <div class="mx-auto text-center" style="max-width: 900px;">
                            <h2 class="mb-0 fw-light ls-1">Like Our Services? Get an <a href="#"
                                    data-scrollto="#template-contactform" data-offset="140"
                                    data-easing="easeInOutExpo" data-speed="1250"
                                    class="button button-border button-circle button-light button-large my-0"
                                    style="position: relative; top: -3px;">Instant Quote</a></h2>
                        </div>
                    </div>

                    <div class="section parallax scroll-detect m-0 dark" style="padding: 150px 0;">
                        <img src="one-page/images/page/testimonials.jpg" class="parallax-bg">

                        <div class="container">

                            <div class="row justify-content-end">
                                <div class="col-md-7">
                                    <div class="fslider testimonial testimonial-full text-center bg-transparent border-0 shadow-none p-0"
                                        data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide">
                                                    <p class="mb-4 fs-4 fw-light ls-1">Similique fugit repellendus
                                                        expedita excepturi iure perferendis provident quia eaque vero
                                                        numquam?</p>
                                                    <h4 class="h5 mb-0 fw-medium">Steve Jobs</h4>
                                                    <small class="text-muted">Apple Inc.</small>
                                                </div>
                                                <div class="slide">
                                                    <p class="mb-4 fs-4 fw-light ls-1">Natus voluptatum enim quod
                                                        necessitatibus quis expedita harum provident eos obcaecati id
                                                        culpa corporis molestias.</p>
                                                    <h4 class="h5 mb-0 fw-medium">Collis Ta'eed</h4>
                                                    <small class="text-muted">Envato Inc.</small>
                                                </div>
                                                <div class="slide">
                                                    <p class="mb-4 fs-4 fw-light ls-1">Incidunt deleniti blanditiis
                                                        quas aperiam recusandae consequatur ullam quibusdam cum libero
                                                        illo rerum!</p>
                                                    <h4 class="h5 mb-0 fw-medium">John Doe</h4>
                                                    <small class="text-muted">XYZ Inc.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div id="section-blog" class="page-section">

                    <h2 class="text-center text-uppercase fw-light ls-3 font-body">Recently From the Blog</h2>

                    <div class="section mb-0">
                        <div class="container">

                            <div class="row posts-md mt-5 col-mb-50 mb-0">

                                <div class="entry col-md-6">
                                    <div class="grid-inner row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="entry-image">
                                                <a href="#"><img src="one-page/images/blog/1.jpg"
                                                        alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                            <span class="before-heading fst-normal">Press &amp; Media</span>
                                            <div class="entry-title text-transform-none">
                                                <h3 class="fw-normal"><a href="#">Global Meetup Program is
                                                        Launching!</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i
                                                        class="uil uil-angle-right-b"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-md-6">
                                    <div class="grid-inner row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="entry-image">
                                                <a href="#"><img src="one-page/images/blog/2.jpg"
                                                        alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                            <span class="before-heading fst-normal">Inside Scoops</span>
                                            <div class="entry-title text-transform-none">
                                                <h3 class="fw-normal"><a href="#">The New YouTube Economy
                                                        unfolds itself</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i
                                                        class="uil uil-angle-right-b"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-md-6">
                                    <div class="grid-inner row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="entry-image">
                                                <a href="#"><img src="one-page/images/blog/3.jpg"
                                                        alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                            <span class="before-heading fst-normal">Video Blog</span>
                                            <div class="entry-title text-transform-none">
                                                <h3 class="fw-normal"><a href="#">Kicking Off Design Party in
                                                        Style</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i
                                                        class="uil uil-angle-right-b"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-md-6">
                                    <div class="grid-inner row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="entry-image">
                                                <a href="#"><img src="one-page/images/blog/4.jpg"
                                                        alt="Paris"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                            <span class="before-heading fst-normal">Inspiration</span>
                                            <div class="entry-title text-transform-none">
                                                <h3 class="fw-normal"><a href="#">Top Ten Signs You're a
                                                        Designer</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="more-link">Read more <i
                                                        class="uil uil-angle-right-b"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="container mt-6">

                        <div id="oc-clients" class="owl-carousel mt-5 image-carousel carousel-widget"
                            data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000"
                            data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4"
                            data-items-lg="5" data-items-xl="6">

                            <div class="oc-item"><a href="#"><img src="images/clients/1.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/2.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/3.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/4.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/5.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/6.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/7.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/8.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/9.png"
                                        alt="Clients"></a></div>
                            <div class="oc-item"><a href="#"><img src="images/clients/10.png"
                                        alt="Clients"></a></div>

                        </div>

                    </div>

                </div>

                <div id="section-contact" class="page-section pt-0">

                    <div class="row mx-0 mb-6 align-items-stretch">
                        <div class="col-lg-8 col-md-6 d-none d-md-block px-0">
                            <div class="gmap h-100" data-address="Melbourne, Australia" data-maptype="ROADMAP"
                                data-zoom="14"
                                data-markers='[{ address: "Melbourne, Australia", html: "Melbourne, Australia", icon:{ image: "one-page/images/icons/map-icon-red.png", iconsize: [32, 32], iconanchor: [14,44] } }]'
                                data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 bg-contrast-100">
                            <div class="col-padding">
                                <h3 class="font-body fw-normal ls-1">Our Headquarters</h3>

                                <div style="font-size: 16px; line-height: 1.7;">
                                    <address style="line-height: 1.7;">
                                        <strong>North America:</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>

                                    <div class="clear mt-4"></div>

                                    <address style="line-height: 1.7;">
                                        <strong>Europe:</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>

                                    <div class="clear mt-5"></div>

                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                        <div class="mx-auto mt-5" style="max-width: 850px;">

                            <div class="form-widget">

                                <div class="form-result"></div>

                                <form class="row mb-0" id="template-contactform" name="template-contactform"
                                    action="include/form.php" method="post">

                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scale-ripple">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="text" id="template-contactform-name"
                                            name="template-contactform-name" value=""
                                            class="form-control border-form-control required" placeholder="Name">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="email" id="template-contactform-email"
                                            name="template-contactform-email" value=""
                                            class="required email form-control border-form-control"
                                            placeholder="Email Address">
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-4 mb-4">
                                        <input type="text" id="template-contactform-phone"
                                            name="template-contactform-phone" value=""
                                            class="form-control border-form-control" placeholder="Phone">
                                    </div>

                                    <div class="col-md-8 mb-4">
                                        <input type="text" id="template-contactform-subject" name="subject"
                                            value="" class="required form-control border-form-control"
                                            placeholder="Subject">
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 mb-4">
                                        <textarea class="required form-control border-form-control" id="template-contactform-message"
                                            name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="col-12 text-center mb-4">
                                        <button class="button button-border button-circle fw-medium ms-0 mt-4"
                                            type="submit" id="template-contactform-submit"
                                            name="template-contactform-submit" value="submit">Send Message</button>
                                        <br>
                                        <small class="d-block mt-3 text-muted">We'll do our best to get back to you
                                            within 6-8 working hours.</small>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 d-none">
                                        <input type="text" id="template-contactform-botcheck"
                                            name="template-contactform-botcheck" value="" class="form-control">
                                    </div>

                                    <input type="hidden" name="prefix" value="template-contactform-">

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

        <footer id="footer" class="dark border-0">

            <div class="container text-center">
                <div class="footer-widgets-wrap">

                    <div class="row mx-auto">

                        <div class="col-lg-4">

                            <div class="widget">
                                <h4>Site Links</h4>

                                <ul class="list-unstyled footer-site-links mb-0">
                                    <li><a href="#" data-scrollto="#wrapper" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Top</a></li>
                                    <li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">About</a></li>
                                    <li><a href="#" data-scrollto="#section-works" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Works</a></li>
                                    <li><a href="#" data-scrollto="#section-services"
                                            data-easing="easeInOutExpo" data-speed="1250"
                                            data-offset="70">Services</a></li>
                                    <li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo"
                                            data-speed="1250" data-offset="70">Blog</a></li>
                                    <li><a href="#" data-scrollto="#section-contact"
                                            data-easing="easeInOutExpo" data-speed="1250"
                                            data-offset="70">Contact</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="widget subscribe-widget" data-loader="button">
                                <h4>Subscribe</h4>

                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                    class="mb-0">
                                    <input type="email" id="widget-subscribe-form-email"
                                        name="widget-subscribe-form-email"
                                        class="form-control form-control-lg not-dark required email"
                                        placeholder="Your Email Address">
                                    <button class="button button-border button-circle button-light mt-4"
                                        type="submit">Subscribe Now</button>
                                </form>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="widget">
                                <h4>Contact</h4>

                                <p class="lead">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>

                                <div class="d-flex justify-content-center mt-4">
                                    <a href="#" class="social-icon si-small bg-transparent h-bg-facebook"
                                        title="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="social-icon si-small bg-transparent h-bg-x-twitter"
                                        title="Twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-small bg-transparent h-bg-github"
                                        title="Github">
                                        <i class="fa-brands fa-github"></i>
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    <a href="#" class="social-icon si-small bg-transparent h-bg-pinterest"
                                        title="Pinterest">
                                        <i class="fa-brands fa-pinterest-p"></i>
                                        <i class="fa-brands fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div id="copyrights">
                <div class="container text-center">
                    Copyrights Canvas 2020 | All Rights Reserved
                </div>
            </div>

        </footer>

    </div>

    <div id="gotoTop" class="uil uil-angle-up"></div>
</div>
