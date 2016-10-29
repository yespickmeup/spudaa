<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html ng-app="homeApp">
    <head>
        <title>Alumni Association | Home</title>
        <link rel="shortcut icon" type="image/png" href="../src/images/system/spud-alumni-logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Academy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- css files -->

        <link rel="stylesheet" href="<?php echo e(URL::to('src/bootstrap/css/bootstrap.min.css')); ?>" media="all" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/team.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/style.css')); ?>"/>
        <link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
        <!-- /fonts -->
        <!-- js files -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.js"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/modernizr.j')); ?>s"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/home.js')); ?>"></script>
        <style>
            html, body {
                max-width: 100%;
                overflow-x: hidden;

            }
        </style>
        <!-- /js files -->
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" ng-controller="homeController">
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

                            <a class="navbar-brand" href="#" style="margin-left:50px !important;">
                                <img class="img-thumbnail" 
                                     ng-src="../src/images/system/spud-alumni-logo.png"
                                     style="width: 80px;height: 80px;background-color : transparent;position: absolute;margin-left: -85px;margin-top: -15px;border: 0;"
                                     >

                                <h1>St. Paul University Dumaguete</h1>
                                <h4 style="color:darkolivegreen;">Alumni Association</h4>
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: -12px;margin-left: 220px !important;">
                                <!--                                <li class="active"><a href="#">Home</a></li>-->
                                <li><a href="#about">About</a></li>
                                <li><a href="#news">News & Events</a></li>
                                <li><a href="#service">Partners</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <!--                                <li><a href="#contact">Contact</a></li>-->
                                <li><a href="<?php echo e(route('signin')); ?>">Sign in </a></li>
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
                    <div class="col-lg-6 about-info2 slideanim" >
                        <div class="about-details" id="details" style="margin-left: 15px;margin-top: 15px;">
                            <br><h1>About Us</h1>
                            <div ng-bind-html="renderHtml(preference.about_us)" id="about-details" ></div>

                            <a href='<?php echo e(route('about.us')); ?>' style="font-size: 25px;">Learn more...</a>
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

                        </div>	
                    </div>
                    <div class="col-lg-6 about-info2 slideanim">
                        <div class="about-details">

                        </div>	

                    </div>
                </div>
            </div>	
            <br>  <br>
        </section>
        <!-- /News and Events  Section -->
        <!-- Service Section -->
        <section class="our-services slideanim" id="service">
            <h3 class="text-center slideanim">Partners</h3>
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
            <p class="text-center slideanim"></p>
            <div class="container">
                <div class="col-md-12 ">
                    <img src="../src/images/gallery/work1.jpg" data-darkbox="../src/images/gallery/work1.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work2.jpg" data-darkbox="../src/images/gallery/work2.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work3.jpg" data-darkbox="../src/images/gallery/work3.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work4.jpg" data-darkbox="../src/images/gallery/work4.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work5.jpg" data-darkbox="../src/images/gallery/work5.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work6.jpg" data-darkbox="../src/images/gallery/work6.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work7.jpg" data-darkbox="../src/images/gallery/work7.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
                    <img src="../src/images/gallery/work8.jpg" data-darkbox="../src/images/gallery/work8.jpg" style="height: 260px;width: 270px;" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-thumbnail ">
    <!--                <img src="../src/AdminLTE/img/home/work9.jpg" data-darkbox="../src/AdminLTE/img/home/work9-9.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                    <img src="../src/AdminLTE/img/home/work10.jpg" data-darkbox="../src/AdminLTE/img/home/work10-10.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                    <img src="../src/AdminLTE/img/home/work11.jpg" data-darkbox="../src/AdminLTE/img/home/work11-11.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
                    <img src="../src/AdminLTE/img/home/work12.jpg" data-darkbox="../src/AdminLTE/img/home/work12-12.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">-->
                </div>  
            </div>

        </section>	
        <!-- /Gallery section -->
        <!-- Team -->
        <section class="our-team" id="team" >
            <h3 class="text-center slideanim">Board of Directors</h3>
            <p class="text-center slideanim"></p>
            <div class="container">
                <section class="main">
                    <ul class="ch-grid">
                        <div class="container">
                               <li class="t1" >
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/JV.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/JV.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Dr. Jose Victor V. Imbo</h4>
                            <p class="team-info slideanim">President</p>
                        </li>
                        </div>
                     
                        
                          
                        <li class="t2">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/albert bae.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/albert bae.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Albert Bael</h4>
                            <p class="team-info slideanim">Vice President</p>
                        </li>

                        <li class="t3">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/juditha.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/juditha.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Dr.Juditha Mapuue</h4>
                            <p class="team-info slideanim">Secretary</p>
                        </li>
                        <li class="t4">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/janice.png');background-size: 240px 240px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/janice.png');background-size: 240px 240px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Janice Teves Gaston</h4>
                            <p class="team-info slideanim">Assistant Secretary</p>
                        </li>
                        <li class="">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/veronica.png');background-size: 180px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/veronica.png');background-size: 180px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Veronica Chuang</h4>
                            <p class="team-info slideanim">Treasurer</p>
                        </li>
                         <li class="">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/randy.png');background-size: 230px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/randy.png');background-size: 230px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Randolf Bandiola</h4>
                            <p class="team-info slideanim">PRO</p>
                        </li>
                         <li class="">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/rowena.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/rowena.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Rowena Viliran</h4>
                            <p class="team-info slideanim">Auditor</p>
                        </li>
                          <li class="">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/kenneth.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/kenneth.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Kenneth Paul Duran</h4>
                            <p class="team-info slideanim">Sgt. At Arms</p>
                        </li>
                         <li class="">
                            <div class="ch-item slideanim">
                                <div class="ch-info" >
                                    <div class="ch-info-front" style="background-image: url('../src/images/board-of-members/elli.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                    </div>
                                    <div class="ch-info-back1" style="background-image: url('../src/images/board-of-members/elli.png');background-size: 200px 230px;background-repeat: no-repeat;">
                                        <ul class="social-icons">
                                            <li><a href="#" style="background-image: url()"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4 class="slideanim" style="font-size: 21px;">Carmelo Elli</h4>
                            <p class="team-info slideanim">Sgt. At Arms</p>
                        </li>
                    </ul>
                </section>      
                <div class="row text-center">
                    <div class="col-sm-12 ">
                        <!--<a href="<?php echo e(route('faculty.staff')); ?>"  class="btn btn-outline1 btn-lg" >View All</a>-->
                    </div>
                </div>
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
                            <p><strong>Phone :</strong><%preference.contact_no%></p>
                            <p><strong>Email :</strong> <a href="mailto:name@example.com"><%preference.email_address%></a></p>
                            <p class="addr"><strong>Address :</strong> <%preference.address%></p>
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
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required ng-model="email.name">
                                </div>
                            </div>
                            <div class="row email-bar">
                                <div class="col-sm-12 form-group slideanim">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required ng-model="email.email">
                                </div>
                            </div>
                            <textarea class="form-control slideanim" id="comments" name="comments" placeholder="Comment" rows="5" ng-model="email.comment"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <a href="" ng-click="sendEmail22()" class="btn btn-outline1 btn-lg" >Send</a>
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
                            <a href="#">Home</a>
                            <a href="#about">About</a>
                            <a href="#news">News and Events</a>
                            <a href="#service">Services</a>
                            <a href="#gallery">Gallery</a>
                            <a href="<?php echo e(route('signin')); ?>">Signin</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright">
                            <p class="love">Made with <i class="fa fa-heart-o" aria-hidden="false" style="color: red;"></i> by Synapse Software Technologies</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="<?php echo e(URL::to('src/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/SmoothScroll.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/index.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/darkbox.js')); ?>"></script>


        <script>
                                        var baseURL = '<?php echo e(url('/')); ?>';
                                        var myToken = '<?php echo e(Session::token()); ?>';
                                        $(document).ready(function () {

                                            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                                                // Store hash
                                                var hash = this.hash;


                                                $('html, body').animate({
                                                    scrollTop: $(hash).offset().top
                                                }, 900, function () {
                                                    window.location.hash = hash;
                                                });
                                            });
                                        });
        </script>

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
    </body>
</html>
