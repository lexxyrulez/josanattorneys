<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JOSAN - Attorneys</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <!--link href="css/style.css" rel="stylesheet"-->
        <link rel="stylesheet" media="all" href="/css/style.css" />
        <style>
#more {display: none;}
</style>
    </head>

    <body>
        
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a  href="{{ url('/') }}">
                                    <!--h1>JOSAN width="250" height="125"</h1-->
                                    <img    src="img/1.PNG" alt="LOGO"  >
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>8:00AM - 5:00PM</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+255 763 309 593</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <!--a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                                <a  class="nav-item nav-link" href="{{ url('/about') }}">About</a>
                                <!--a href="{{ url('/portfolio') }}" class="nav-item nav-link">Practice</a-->
                                <a href="{{ url('/service') }}" class="nav-item nav-link">Services</a>
                                <a href="{{ url('/team') }}" class="nav-item nav-link">Our Team</a>
                                <a class="nav-item nav-link" href="{{ url('/contact') }}">Contact</a>

                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{ url('/contact') }}">Get Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- About Start -->
            <div  id="about" class="about">
                <div style="max-width: 1000px;" class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div  class="section-header">
                                <h2>Learn About Us</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Josan Attorneys is a full-service Law Firm 
that constitutes of several advocates, 
associate lawyers, legal advisors, and 
administrative sta. The Firm was 
established on 26th October 2021 when its 
principals ocially formed their practice to 
oer legal services while maintaining the 
sophistication, legal expertise, personal 
attention, practical approach to problem 
solving and timely results that clients expect 
in today’s competitive environment.
The Firm’s Principal Oce is located at the 
Third Floor, Green Acres House, at Victoria 
Area, along Bagamoyo Road, Dar es 
Salaam.

                                </p>
                                <p>
                                    A distinguishing attribute of the Firm is its 
                                    fully dedicated team aimed at providing a 
                                    value-adding, solution-oriented service to 
                                    its clients. The Firm has succeeded in 
                                    bringing together experience and quality 
                                    legal practice. Considering this recognized 
                                    success, we are a major adviser to the public 
                                    sector and the corporate world
                                </p>
                                <a class="btn" href="{{ url('/about') }}">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->



            <!-- Timeline Start -->
            <div class="timeline">
                <div class="container">
                    <div class="section-header">
                        <h2>Learn About Our Journey</h2>
                    </div>
                    <div class="timeline-start">
                        <div class="timeline-container left">
                            <div class="timeline-content">
                                <h2><span>2020</span>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-container right">
                            <div class="timeline-content">
                                <h2><span>2019</span>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-container left">
                            <div class="timeline-content">
                                <h2><span>2018</span>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-container right">
                            <div class="timeline-content">
                                <h2><span>2017</span>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-container left">
                            <div class="timeline-content">
                                <h2><span>2016</span>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-container right">
                            <div class="timeline-content">
                                <h2><span>2015</span>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Timeline End -->


       <!-- Team Start -->
       <div id="attorneys" class="team">
                <div style="max-width: 1000px;" class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/w1.png" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Nereus Mutogore</h2>
                                    <p>Managing Partner</p>
                                    <!--div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/w3.png" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Joseph Muhere</h2>
                                    <p>Senior Partner</p>
                                   <!--div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/w2.png" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Alfred Thawe</h2>
                                    <p>Senior Partner</p>
                                    <!--div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/w4.png" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Jackline Wilbert</h2>
                                    <p>Administrative Officer</p>
                                    <!--div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->



            


 <!-- Footer Start -->
 <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>Our Map Location</h2>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.9318870008683!2d39.24766391463318!3d-6.778144695100595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91102f087c897971!2zNsKwNDYnNDEuMyJTIDM5wrAxNCc1OS41IkU!5e0!3m2!1sen!2stz!4v1651217646349!5m2!1sen!2stz" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Green Acre's House, Victoria,Dar Es Salaam</p>
                                <p><i class="fa fa-phone-alt"></i>+255 763 309 593</p>
                                <p><i class="fa fa-envelope"></i>info@josanattorneys.co.tz</p>
                                <div class="footer-social">
                                    <!--a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a-->
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://www.valleypayapp.co.tz">Valley Pay</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://www.valleypayapp.co.tz">Valley Pay</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
