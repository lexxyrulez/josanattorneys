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
#more2 {display: none;}
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
                               <!-- Large modal -->
<a type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg">Get Appointment</a>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      

             <!-- Contact Start -->
             <div class="contact">
                <div style="max-width: 1300px;" class="container">
                    <div class="section-header">
                        <h2>Get Appointment</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Green Acre's House, Victoria,Dar Es Salaam</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+255 763 309 593</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>+255 763 309 593</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                            <div>               
    @if(Session::has('message_sent'))
    <div class="alert alert-success" role="alert">
    {{Session::get('message_sent')}}
   
    @endif
                                <form method="POST" action="{{route('contact.send')}}" >
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" required="required" />
                                        <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required="required" ></textarea>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your justice</h1>
                            <p class="animated fadeInRight"></p>
                            <a class="btn animated fadeInUp" data-toggle="modal" data-target=".bd-example-modal-lg">Get free consultation</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                            <p class="animated fadeInRight"></p>
                            <a class="btn animated fadeInUp" data-toggle="modal" data-target=".bd-example-modal-lg">Get free consultation</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                            <p class="animated fadeInRight"></p>
                           



<!-- Large modal -->
<a type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg">Get Free Consultation</a>







                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            
            
            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-check-circle"></i>
                                <h3>Legal</h3>
                                <p>Govt Approved</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-user-tie"></i>
                                <h3>Attorneys</h3>
                                <p>Expert Attorneys</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-thumbs-up"></i>
                                <h3>Success</h3>
                                <p>99.99% Case Won</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-handshake"></i>
                                <h3>Support</h3>
                                <p>Quick Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->
            
            
           
            

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

            

            <!-- About Start -->
            <div class="about">
                <div  style="max-width: 1000px;" class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="section-header">
                                <h2>Mission & Vision</h2>
                            </div>
                            <div class="about-text">
                                <h2>Mission</h2>
                                <p>
                                    To provide eective and innovative legal 
solutions to our clients in a time bound 
manner adhering to internationally 
acceptable standards of quality.

                                </p>

                                <h2>Vision</h2>
                                <p>
                                    To be a premier Tanzania law firm 
commanding trust, respect and 
everlasting professional relationship from 
clients globally.
                                </p>

                                <h2>Our Values</h2>
                                <p>
                                    To attain the outstanding professional 
excellence.
To always act with fairness, integrity, 
ethics, diligence and social responsibility. 
To have passion to resolve clients’ 
problems and exceed clients’
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>

                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about-img">
                                <img src="img/2.png" alt="Image">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->





            <!-- Service Start -->
            <div id="practice" class="service">
                <div style="max-width: 1100px;" class="container">
                    <div class="section-header">
                        <h2>Our Practices Areas</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3> 
                                    Administrative Law</h3>
                                <p>
                                Issues of violation of the constitution
                                 are intricate. Cases dealing with constitutional 
                                 issues are of importance due to the <span id="dots">...</span><span id="more">impact they have
                                  on people in the society at large.
                                </p>
                                <a class="btn" onclick="myFunction()" id="myBtn">Read More</a>
                              <!--a  onclick="myFunction()" id="myBtn">Read more </a-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>Labour And
                                    Employment Law</h3>
                                <p>The Firm advises its clients on the legal aspects 
                                    of employment and labour law to ensure
                                    compliance with all the <span id="dots2">...</span><span id="more2"> applicable laws.Our professionals Attorneys are ready to consult.
                                </p>
                                <a class="btn" onclick="myFunction2()" id="myBtn2">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>Insurance Law</h3>
                                <p>
                                    We offer legal services in the insurance industry. In 
particular, we advise on the insurance legislation 
and litigation on policy liability or <span id="dots3">...</span><span id="more3"> repudiated claims. Our professional Attorneys are ready to listen and consult.

                                </p>
                                <a class="btn" onclick="myFunction3()" id="myBtn3">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>Family Law</h3>
                                <p>
                                    On matters of family, family being the heart of our 
society, our group of advocates is equipped with 
vast knowledge on family law related  matters.Our <span id="dots4">...</span><span id="more4">professional Attorneys are ready to listen and consult.
                                </p>
                                <a class="btn" onclick="myFunction4()" id="myBtn4">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-hand-holding-usd"></i>
                                </div>
                                <h3>Taxation And Audit Law</h3>
                                <p>
                                    The Firm presents the interests and defends the 
rights of our clients in various tax related 
matters in both judicial  and quassi judicial <span id="dots5">...</span><span id="more5">
bodies established under the laws in Tanzania.
                                </p>
                                <a class="btn" onclick="myFunction5()" id="myBtn5">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h3>Intellectual 
                                    Property Law</h3>
                                <p>
                                    Includes various areas of intellectual property blending together to protect the 
                                    rights of authors,  performers, owners and <span id="dots6">...</span><span id="more6">
                                    businesses for their creative accomplishments.
                                </p>
                                <a class="btn" onclick="myFunction6()" id="myBtn6">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <h3>Internet  & CyberLaw</h3>
                                <p>
                                    Refers to how legal principles and legislation govern the use of the internet, it involves domain disputes, copyrights, 
                                    <span id="dots7">...</span><span id="more7"> trademarks,breaching  of   licensing and privacy 
policies. Our professional Attorneys are ready to listen and consult.
                                </p>
                                <a class="btn" onclick="myFunction7()" id="myBtn7">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>Succession 
                                    And trusts</h3>
                                <p>
                                    Disposition of one’s property after death can 
preserve assets and benefit the surviving 
family members. At Josan Attorneys <span id="dots8">...</span><span id="more8"> we assist our clients in 
making wise decisions in their will.
                                </p>
                                <a class="btn" onclick="myFunction8()" id="myBtn8">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <div class="feature">
                <div style="max-width: 1000px;" class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Why Choose Us</h2>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-gavel"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Best law practices</h3>
                                    <p>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-balance-scale"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Efficiency & Trust</h3>
                                    <p>
                                       
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="far fa-smile"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Results you deserve</h3>
                                    <p>
                                       
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="img/feature.jpg" alt="Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            
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


            <!-- FAQs Start -->
            <div class="faqs">
                <div style="max-width: 800px;" class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="faqs-img">
                                <img src="img/faqs.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Have A Questions?</h2>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> Will there be more than one attorney working on my case?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> What should I bring to the consultation or first meeting?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> How much experience do you have?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Will I have to go to court?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span>5</span> Who can bring a case on behalf of a family member who died?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div> 
                            </div>
                          

<!-- Large modal -->
<a type="button" class="btn " data-toggle="modal" data-target=".bd-example-modal-lg">Ask More</a>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      

             <!-- Contact Start -->
             <div class="contact">
                <div style="max-width: 1300px;" class="container">
                    <div class="section-header">
                        <h2>Get Appointment</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Green Acre's House, Victoria,Dar Es Salaam</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+255 763 309 593</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>+255 763 309 593</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                            <div>               
    @if(Session::has('message_sent'))
    <div class="alert alert-success" role="alert">
    {{Session::get('message_sent')}}
   
    @endif
                                <form method="POST" action="{{route('contact.send')}}" >
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" required="required" />
                                        <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required="required" ></textarea>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>




    </div>
  </div>
</div>


  </div>
</div>

  </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->


           


            
            
            
            <!-- Newsletter Start>
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
            <Newsletter End -->


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
        
        <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  


  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunction2() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more"; 
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less"; 
    moreText2.style.display = "inline";
  }
}


function myFunction3() {
  var dots3 = document.getElementById("dots3");
  var moreText3 = document.getElementById("more3");
  var btnText3 = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    btnText3.innerHTML = "Read more"; 
    moreText3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "Read less"; 
    moreText3.style.display = "inline";
  }
}


function myFunction4() {
  var dots4 = document.getElementById("dots4");
  var moreText4 = document.getElementById("more4");
  var btnText4 = document.getElementById("myBtn4");

  if (dots4.style.display === "none") {
    dots4.style.display = "inline";
    btnText4.innerHTML = "Read more"; 
    moreText4.style.display = "none";
  } else {
    dots4.style.display = "none";
    btnText4.innerHTML = "Read less"; 
    moreText4.style.display = "inline";
  }
}


function myFunction5() {
  var dots5 = document.getElementById("dots5");
  var moreText5 = document.getElementById("more5");
  var btnText5 = document.getElementById("myBtn5");

  if (dots5.style.display === "none") {
    dots5.style.display = "inline";
    btnText5.innerHTML = "Read more"; 
    moreText5.style.display = "none";
  } else {
    dots5.style.display = "none";
    btnText5.innerHTML = "Read less"; 
    moreText5.style.display = "inline";
  }
}


function myFunction6() {
  var dots6 = document.getElementById("dots6");
  var moreText6 = document.getElementById("more6");
  var btnText6 = document.getElementById("myBtn6");

  if (dots6.style.display === "none") {
    dots6.style.display = "inline";
    btnText6.innerHTML = "Read more"; 
    moreText6.style.display = "none";
  } else {
    dots6.style.display = "none";
    btnText6.innerHTML = "Read less"; 
    moreText6.style.display = "inline";
  }
}


function myFunction7() {
  var dots7 = document.getElementById("dots7");
  var moreText7 = document.getElementById("more7");
  var btnText7 = document.getElementById("myBtn7");

  if (dots7.style.display === "none") {
    dots7.style.display = "inline";
    btnText7.innerHTML = "Read more"; 
    moreText7.style.display = "none";
  } else {
    dots7.style.display = "none";
    btnText7.innerHTML = "Read less"; 
    moreText7.style.display = "inline";
  }
}


function myFunction8() {
  var dots8 = document.getElementById("dots8");
  var moreText8 = document.getElementById("more8");
  var btnText8 = document.getElementById("myBtn8");

  if (dots8.style.display === "none") {
    dots8.style.display = "inline";
    btnText8.innerHTML = "Read more"; 
    moreText8.style.display = "none";
  } else {
    dots8.style.display = "none";
    btnText8.innerHTML = "Read less"; 
    moreText8.style.display = "inline";
  }
}


</script>
<script defer src="https://widget.tochat.be/bundle.js?key=5022828a-a9c6-45ef-b489-8982274c60a0"></script>


    </body>
</html>
