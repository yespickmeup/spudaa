<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Alumni Association | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Academy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- css files -->

        <link rel="stylesheet" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}" media="all" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/team.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/style.css') }}"/>
        <link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
        <!-- /fonts -->
        <!-- js files -->
        <script src="{{ URL::to('src/AdminLTE/js/modernizr.j') }}s"></script>
        <!-- /js files -->
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <!-- navigation -->

        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top cl-effect-1">
                    <div class="container ">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><h1>Alumni Association</h1>
                                <h4 style="color:darkolivegreen;">St. Paul University Dumaguete Campus</h4>
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <!--                                <li class="active"><a href="#">Home</a></li>-->
                                <li><a href="#about">About</a></li>
                                <li><a href="#news">News & Events</a></li>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <!--                                <li><a href="#contact">Contact</a></li>-->
                                <li><a href="{{route('signin')}}">Signin </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /navigation -->
        <!-- banner section -->
        <section class="banner">
            <div class="cover-slider__wrap">
                <ul class="cover-slider">
                    <li class="cover-slider__slide">
                        <span class="hide">Alt Tag</span>
                    </li>
                    <li class="cover-slider__slide">
                        <span class="hide">Alt Tag</span>
                    </li>
                    <li class="cover-slider__slide">
                        <span class="hide">Alt Tag</span>
                    </li>
                </ul>
            </div>
        </section>	
        <!-- /banner section -->
        <!-- About Section -->
        <section class="about-us" id="about">
            <div class="container-fluid">
                <div class="row">	
                    <div class="col-lg-6 about-info1 slideanim" >
                        <img src="../src/AdminLTE/img/home/about-img.jpg" alt="about" class="img-responsive">
                    </div>
                    <div class="col-lg-6 about-info2 slideanim">
                        <div class="about-details">
                            <h2>About Us</h2>
                            <p>
                                Created in 1961 and established in 1964 under the Office of the President, the Office of Alumni Relations (OAR) serves as the link between the alumni and the rest of the academic community. The OAR seeks to encourage the maximum participation, involvement, support and commitment of the alumni to the University of the Philippines’ social mission. It assists the UP and its Alumni Association (UPAA) in identifying, cultivating, and involving the alumni in institutional and alumni programs, events and activities. It also represents the UP and the UPAA at institutional and alumni programs, events and activities both locally, on-and off-campus, and foreign venues whenever possible.
                                <br>
                                Its objectives include.... <a href="#">Learn more</a>
                               
                        </div>	
                    </div>
                </div>
            </div>		
        </section>

        <!-- News and Events Section -->
        <section class="about-us" id="news" style="background-color: whitesmoke;">
            <div class="container">
                <div class="row col-md-offset-0">	
                    <div class="col-lg-6 about-info2 slideanim">
                        <div class="about-details">
                            @include('home.news')
                        </div>	
                    </div>
                    <div class="col-lg-6 about-info2 slideanim">
                        <div class="about-details">
                            @include('home.events')
                        </div>	

                    </div>
                </div>
            </div>	
            <br>  <br>
        </section>
        <!-- /News and Events  Section -->
        <!-- Service Section -->
        <section class="our-services slideanim" id="service">
            <h3 class="text-center slideanim">Our Amazing Services</h3>
            <p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 serv-part">
                        <div class="row">
                            <div class="col-xs-6 slideanim">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-6 slideanim">
                                <div class="serv-info">
                                    <h4>Lorem Ipsum</h4>
                                    <p class="serv">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 serv-part">
                        <div class="row">
                            <div class="col-xs-6 slideanim">
                                <i class="fa fa-cloud" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-6 slideanim">
                                <div class="serv-info">
                                    <h4>Lorem Ipsum</h4>
                                    <p class="serv">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 serv-part">
                        <div class="row">
                            <div class="col-xs-6 slideanim">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-6 slideanim">
                                <div class="serv-info">
                                    <h4>Lorem Ipsum</h4>
                                    <p class="serv">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 serv-part">
                        <div class="row">
                            <div class="col-xs-6 slideanim">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-6 slideanim">
                                <div class="serv-info">
                                    <h4>Lorem Ipsum</h4>
                                    <p class="serv">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 serv-part">
                        <div class="row">
                            <div class="col-xs-6 slideanim">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-6 slideanim">
                                <div class="serv-info">
                                    <h4>Lorem Ipsum</h4>
                                    <p class="serv">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 serv-part">
                        <div class="row">
                            <div class="col-xs-6 slideanim">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-6 slideanim">
                                <div class="serv-info">
                                    <h4>Lorem Ipsum</h4>
                                    <p class="serv">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Service Section -->
        <!-- Gallery Section -->
        <section class="our-gallery" id="gallery">
            <h3 class="text-center slideanim">Our Gallery</h3>
            <p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="container">
                <img src="../src/AdminLTE/img/home/work1.jpg" data-darkbox="../src/AdminLTE/img/home/work1-1.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work2.jpg" data-darkbox="../src/AdminLTE/img/home/work2-2.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work3.jpg" data-darkbox="../src/AdminLTE/img/home/work3-3.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work4.jpg" data-darkbox="../src/AdminLTE/img/home/work4-4.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work5.jpg" data-darkbox="../src/AdminLTE/img/home/work5-5.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work6.jpg" data-darkbox="../src/AdminLTE/img/home/work6-6.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work7.jpg" data-darkbox="../src/AdminLTE/img/home/work7-7.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work8.jpg" data-darkbox="../src/AdminLTE/img/home/work8-8.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work9.jpg" data-darkbox="../src/AdminLTE/img/home/work9-9.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work10.jpg" data-darkbox="../src/AdminLTE/img/home/work10-10.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work11.jpg" data-darkbox="../src/AdminLTE/img/home/work11-11.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                <img src="../src/AdminLTE/img/home/work12.jpg" data-darkbox="../src/AdminLTE/img/home/work12-12.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
            </div>
        </section>	
        <!-- /Gallery section -->
        <!-- Team -->
        <section class="our-team" id="team">
            <h3 class="text-center slideanim">Best Of The Best, Our Faculty</h3>
            <p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="container">
                <section class="main">
                    <ul class="ch-grid">

                        <div class="ch-item slideanim">				
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1"></div>
                                <div class="ch-info-back1">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>	
                            </div>
                        </div>
                        <h4 class="slideanim">Johnny Cage</h4>
                        <p class="team-info slideanim">Founder</p>

                        <li class="t1">
                            <div class="ch-item slideanim">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"></div>
                                    <div class="ch-info-back1">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim">Britney Spears</h4>
                            <p class="team-info slideanim">Director</p>
                        </li>
                        <li class="t2">
                            <div class="ch-item slideanim">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back2">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim">Britney Spears</h4>
                            <p class="team-info slideanim">Director</p>
                        </li>

                        <li class="t3">
                            <div class="ch-item slideanim">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back3">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim">Princess Diana</h4>
                            <p class="team-info slideanim">Manager</p>
                        </li>
                        <li class="t4">
                            <div class="ch-item slideanim">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-4"></div>
                                    <div class="ch-info-back4">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim">Lady Gaga</h4>
                            <p class="team-info slideanim">Treasurer</p>
                        </li>
                    </ul>
                </section>           
            </div>
        </section>	
        <!-- /Team -->
        <!-- Google Map -->
        <section class="map">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 slideanim">
                        <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.0721769061033!2d123.29599791540937!3d9.326872593314642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab6f300771c587%3A0x2e0a3d3ded6fb861!2sSt.+Paul+University+Dumaguete!5e0!3m2!1sen!2sph!4v1475557826279" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                    </div>	
                </div>
            </div>
        </section>
        <!-- /Google Map -->
        <!-- Contact -->
        <section class="contact-us slideanim" id="contact">
            <h3 class="text-center slideanim">Contact Us</h3>
            <p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="container">		
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="contact-info">
                            <h4>Connect With Us :-</h4>
                            <p><strong>Phone :</strong> 123.456.7890</p>
                            <p><strong>Email :</strong> <a href="mailto:name@example.com">name@example.com</a></p>
                            <p class="addr"><strong>Address :</strong> 3481 Melrose Place,Beverly Hills, Chicago 90210.</p>
                            <ul class="social-icons2">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-sm-12 form-group slideanim">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                </div>
                            </div>
                            <div class="row email-bar">
                                <div class="col-sm-12 form-group slideanim">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control slideanim" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-outline1 btn-lg" type="submit">Send</button>
                                </div>
                            </div>
                        </form>			
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact -->
        <!-- Footer Section -->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="links">
                            <a href="index.html">Home</a>
                            <a href="#about">About</a>
                            <a href="#news">News and Events</a>
                            <a href="#service">Services</a>
                            <a href="#gallery">Gallery</a>
                            <a href="{{route('signin')}}">Signin</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>&copy; 2016 Academy. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Footer Section -->
        <!-- js files -->
        <script src="{{ URL::to('src/AdminLTE/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('src/AdminLTE/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('src/AdminLTE/js/SmoothScroll.min.js') }}"></script>
        <script src="{{ URL::to('src/AdminLTE/js/index.js') }}"></script>
        <script src="{{ URL::to('src/AdminLTE/js/darkbox.js') }}"></script>

        <!-- /js for gallery -->
        <!-- js for smooth navigation -->
        <script>
$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
})
        </script>
        <!-- /js for smooth navigation -->
        <!-- js for sliding animations -->
        <script>
            $(window).scroll(function () {
                $(".slideanim").each(function () {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        </script>
        <!-- /js for sliding animations -->
        <!-- /js files -->
    </body>
</html>
