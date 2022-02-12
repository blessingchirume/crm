<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>| {{ config('app.name') }} |</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/mamba/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/mamba/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/mamba/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/mamba/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/mamba/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/mamba/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/mamba/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('/mamba/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/mamba/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
   

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light">
                    <a href="index.html">
                        <span class="login100-form-title p-20" style="background-color: white;">
                            <img class="card-img" src="{{ asset ('/Login_v16/images/logo.png') }}" style="width: 80%;; padding: 0px 0px;" alt="Card image">

                        </span>
                    </a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li class="drop-down"><a href="">Account</a>
                        <ul>
                            <li><a href="/login">Login</a></li>
                            <li><a href="#">Request Access</a></li>

                        </ul>
                    </li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('/mamba/assets/img/slide/slide-1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Full service <span>engineering</span></h2>
                                <p class="animated fadeInUp">With a comprehensive staff of engineers, technologists, project managers, and more, BCHOD Zimbabwe is your one-stop source for complete multi-disciplinary consultancy engineering and project management services.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('/mamba/assets/img/slide/slide-2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">At the forefront of engineering innovation</h2>
                                <p class="animated fadeInUp">We provide the design and engineering services you need, from feasibility studies and environmental services to multi-disciplinary engineering, project management, industrial water and wastewater treatment, or complete engineering, procurement, construction management project delivery.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('/mamba/assets/img/slide/slide-3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">At the forefront of engineering innovation</h2>
                                <p class="animated fadeInUp">We provide the design and engineering services you need, from feasibility studies and environmental services to multi-disciplinary engineering, project management, industrial water and wastewater treatment, or complete engineering, procurement, construction management project delivery.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row  d-flex align-items-stretch">

                    <div class="col-lg-6 faq-item" data-aos="fade-up">
                        <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                        <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
                        <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
                        <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
                        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
                        <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>20385 Solomio park ruwa</p>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@bchod.com<br>contact@bchod.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box ">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+263 77 590 6095<br>+263 78 312 3519</p>
                        </div>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>bchod</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <script src="{{ asset('/mamba/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/mamba/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/mamba/assets/js/main.js') }}"></script>

</body>

</html>