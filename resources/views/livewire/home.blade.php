<div>
    <div id="wrapper">

        <header id="header" class="full-header  header-size-custom" data-sticky-shrink="false"
            data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <div id="logo">
                            <a href="/">
                                <img class="logo-default"
                                    srcset="/assets/images/logo_text.png, /assets/images/logo_text.png 2x"
                                    src="/assets/images/logo_text.png" alt="Canvas Logo" style="height: 30px">
                                <img class="logo-dark"
                                    srcset="/assets/images/logo_text_white.png, /assets/images/logo_text_white.png 2x"
                                    src="/assets/images/logo_text_white.png" alt="Canvas Logo" style="height: 40px">
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
            <div class="content-wrap py-0 pb-0">
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
                                <h2 class="mb-0 fw-light ls-1">
                                    @if ($service)
                                        {{ $service->description }}
                                    @endif
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-stretch">

                        <div class="col-lg-4 d-none d-md-block"
                            style="background: url('{{ $service ? Storage::url($service->file) : null }}') center center no-repeat; background-size: cover;">
                        </div>
                        <div class="col-lg-8">
                            <div class="row align-items-stretch grid-border">
                                @foreach ($dataService as $row)
                                    <div class="col-lg-4 col-md-6 col-padding">
                                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#">
                                                    <i class="{{ $row['icon'] }}"></i>
                                                </a>
                                            </div>
                                            <div class="fbox-content fbox-content-sm">
                                                <h3>{{ $row['title'] }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="section dark m-0">
                        <div class="mx-auto text-center" style="max-width: 900px;">
                            <h2 class="mb-0 fw-light ls-1">Like Our Services? <a href="#"
                                    data-scrollto="#section-contact" data-offset="140" data-easing="easeInOutExpo"
                                    data-speed="1250"
                                    class="button button-border button-circle button-light button-large my-0"
                                    style="position: relative; top: -3px;">Contact Us</a> Now</h2>
                        </div>
                    </div>
                </div>

                <div id="section-blog" class="page-section pt-0 pb-0">

                    <h2 class="text-center text-uppercase fw-light ls-3 font-body">Recently From the Blog</h2>

                    <div class="section mb-0">
                        <div class="container">

                            <div class="row posts-md mt-5 col-mb-50 mb-0">

                                @foreach ($dataBlog as $row)
                                    <div class="entry col-md-6">
                                        <div class="grid-inner row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="entry-image">
                                                    <a href="#"><img src="{{ Storage::url($row['file']) }}"
                                                            alt="Paris"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="entry-title text-transform-none">
                                                    <h3 class="fw-normal"><a href="#">{{ $row['title'] }}</a>
                                                    </h3>
                                                </div>
                                                <span
                                                    class="before-heading fst-normal">{{ $row['description'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>

                <div id="section-contact" class="page-section pt-0 pb-0">

                    <div class="row mx-0 mb-6 align-items-stretch">
                        <div class="col-lg-8 col-md-6 d-md-block px-0">
                            @if ($contact)
                                {!! $contact->detail !!}
                            @endif
                        </div>
                        <div class="col-lg-4 col-md-6 bg-contrast-100">
                            <div class="col-padding">
                                <h3 class="font-body fw-normal ls-1">{{ $contact ? $contact->title : null }}</h3>

                                <div style="font-size: 16px; line-height: 1.7;">
                                    <address style="line-height: 1.7;">
                                        {!! $contact ? $contact->description : null !!}
                                    </address>

                                    <div class="clear mt-4"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <footer id="footer" class="dark border-0 pt-0">

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
