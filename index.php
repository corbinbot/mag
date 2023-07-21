<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
            crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <style type="text/css">
        /* ============ desktop view ============ */
        /* @media all and (min-width: 992px) { */
        .navbar .nav-item .dropdown-menu {
            display: none;
        }


        .navbar .nav-item:hover .dropdown-menu {
            display: block;

        }

        .navbar .nav-item .dropdown-menu {
            margin: auto;
            margin-top: 0;
            right: 50%;

        }

        /* } */

        /* ============ desktop view .end// ============ */
        </style>
        <?php
        include_once("includes/navbar.php");
        ?>
        <!-- top Section  -->
        <section class="top-section">
            <div id="background-video">
                <video autoplay loop muted>
                    <source src="media/background.mp4" type="video/mp4">
                    <!-- Add additional source tags for different video formats if needed -->
                </video>
                <div class="content container">
                    <h1 class="my-4">Empowering Growth with Seamless Technical Solutions</h1>
                    <h5>Your Trusted Partner For Maximizing Impact and Results</h5>
                </div>
            </div>
        </section>
        <!-- top section end  -->

        <!-- skills section start -->
        <section class="skill-section">
            <div class="container">
                <div class="cards">
                    <img src="media/php.png" alt="php">
                </div>
                <div class="cards">
                    <img src="media/react.png" alt="react">
                </div>
                <div class="cards">
                    <img src="media/salesforce.png" alt="salesforce">
                </div>
                <div class="cards">
                    <img src="media/zoho.png" alt="Zoho">
                </div>
                <div class="cards">
                    <img src="media/php.png" alt="php">
                </div>
                <div class="cards">
                    <img src="media/react.png" alt="react">
                </div>
                <div class="cards">
                    <img src="media/salesforce.png" alt="salesforce">
                </div>
                <div class="cards">
                    <img src="media/zoho.png" alt="Zoho">
                </div>
                <div class='view-all'>
                    <a><span>View All</span><i class="fas fa-arrow-right"></i></a>
                </div>

            </div>
        </section>
        <!-- skill section end -->
        <!-- about us section  -->

        <section class="about-us-section">
            <div class="container about-us">
                <img src="media/about.jpeg" alt="aboutus">
                <div class="about-right">
                    <h2>Self-managed Teams for Startups</h2>
                    <p>Hire a team of Developers, Designers, Quality Assurance Specialists, DevOps Engineers, and other
                        experts you may need to work hand-to-hand on your digital products.</p>
                    <div>
                        <a><span>View Managed Teams</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us section end -->

        <!-- Our services section  -->
        <section class="service-section container">
            <h1 class="text-center">Our services</h1>
            <div class="left-arrow" onclick="slideLeft()">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                </svg>
            </div>
            <div class="carousel-div" id="carousel-div">

                <div class="carousel">
                    <img src="media/graphics.jpg" alt="graphics" />
                    <h5>Graphics Designing</h5>
                </div>
                <div class="carousel">
                    <img src="media/html.jpg" alt="html" />
                    <h5>HTML</h5>
                </div>
                <div class="carousel">
                    <img src="media/mysql.jpg" alt="mysql" />
                    <h5>MYSQL</h5>
                </div>
                <div class="carousel">
                    <img src="media/wordpress.jpg" alt="wordpress" />
                    <h5>Wordpress</h5>
                </div>
                <div class="carousel">
                    <img src="media/react.jpg" alt="react" />
                    <h5>React</h5>
                </div>
                <div class="carousel">
                    <img src="media/javascript.jpg" alt="javascript" />
                    <h5>JavaScript</h5>
                </div>
                <div class="carousel">
                    <img src="media/php.jpg" alt="php" />
                    <h5>PHP</h5>
                </div>

            </div>
            <div class="right-arrow" onclick="slideRight()">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg>
            </div>

        </section>

        <!-- our services section end -->


        <!-- testimonial section  -->
        <section class="testimonial container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <h1 class="text-center">What our Clients Say About us</h1>
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="main-carousel">
                            <div class="content">
                                <h3>Reliable partners</h3>
                                <p>"They helped us build our brand from scratch with animations, designs, website, blog
                                    and
                                    SEO. They did a fantastic job, and we are very happy with their work so far and will
                                    be
                                    using them for the years to come." </p>
                            </div>
                            <img src="media/graphics.jpg" class="d-block" alt="...">
                        </div>


                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="main-carousel">
                            <div class="content">
                                <h3>Reliable partners</h3>
                                <p>“Mag has built a website that is tailor-made to our needs. It is clean and
                                    well-designed, and at the same time easily customisable. We can update it on our own
                                    whenever we need.” </p>
                            </div>
                            <img src="media/mysql.jpg" class="d-block" alt="...">
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="main-carousel">
                            <div class="content">
                                <h3>Reliable partners</h3>
                                <p>"They helped us build our brand from scratch with animations, designs, website, blog
                                    and
                                    SEO. They did a fantastic job, and we are very happy with their work so far and will
                                    be
                                    using them for the years to come." </p>
                            </div>
                            <img src="media/php.jpg" class="d-block" alt="...">
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- testimonial section end  -->


        <!-- blog section start  -->

        <section class="blog-section">
            <h2 class="text-center">Our Blogs</h2>
            <div class="container blog-container">
                <div class="blog-card">
                    <img src="media/graphics.jpg">
                    <p>05 JUL 2023</p>
                    <h4>Hubspot and Slack integration = Communication Magic</h4>
                    <h6>Ever Feel Like managing your business communication is like juggling flaming torches...</h6>
                </div>
                <div class="blog-card">
                    <img src="media/html.jpg">
                    <p>05 JUL 2023</p>
                    <h4>Hubspot and Slack integration = Communication Magic</h4>
                    <h6>Ever Feel Like managing your business communication is like juggling flaming torches...</h6>
                </div>
                <div class="blog-card">
                    <img src="media/php.jpg">
                    <p>05 JUL 2023</p>
                    <h4>Hubspot and Slack integration = Communication Magic</h4>
                    <h6>Ever Feel Like managing your business communication is like juggling flaming torches...</h6>
                </div>

            </div>
        </section>

        <!-- blog section end  -->

        <!-- footer section start  -->
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-dark text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Mag Cloud Solutions
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i>Agra, UP, India</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@magcloudsolutions.in
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Mag Cloud Solutions</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- footer section end  -->
        <script src="js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
            integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
        </script>
    </body>

</html>