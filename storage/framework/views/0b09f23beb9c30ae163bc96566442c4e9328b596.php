<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alumni Association | About-Us</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="<?php echo e(URL::to('src/bootstrap/css/bootstrap.min.css')); ?>"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://rawgit.com/maximnaidenov/angular-busy-tracker/v2.0.0/dist/busy.css"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/AdminLTE.min.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/plugins/iCheck/square/blue.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/skins/_all-skins.min.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/angular/css/faculty.css')); ?>"/>


        <script src="<?php echo e(URL::to('src/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.js"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/faculty.js')); ?>"></script>
    </head>
    <body ng-app="facultyApp" ng-controller="facultyController">

        <section class="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-lg-12">
                            <h1 class="description">Faculty and Staff</h1>
                            <hr>
                            <div class="row pt-md">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Marrie Doi</h1>
                                    <h2>Co-founder/ Operations</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Christopher Di</h1>
                                    <h2>Co-founder/ Projects</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Heather H</h1>
                                    <h2>Co-founder/ Marketing</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Nancy Doe</h1>
                                    <h2>Designer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Stella John</h1>
                                    <h2>Web Developer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Cherry John</h1>
                                    <h2>Fullstack Developer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Marrie Doi</h1>
                                    <h2>Co-founder/ Operations</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Christopher Di</h1>
                                    <h2>Co-founder/ Projects</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Heather H</h1>
                                    <h2>Co-founder/ Marketing</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Nancy Doe</h1>
                                    <h2>Designer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Stella John</h1>
                                    <h2>Web Developer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                    <div class="img-box">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" style="width:200px;height: 200px;" class="img-responsive">
                                        <ul class="text-center">
                                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                        </ul>
                                    </div>
                                    <h1>Cherry John</h1>
                                    <h2>Fullstack Developer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--        <footer>
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center">

                    <h6>Coded with <i class="fa fa-heart red"></i> by <a href="http://www.nabeel.co.in" target="_blank">Nabeel Kondotty</a></h6>
                </div>   
            </div>
        </footer>-->

        <script>
var myToken = '<?php echo e(Session::token()); ?>';
var baseURL = '<?php echo e(url('/')); ?>';
var photo = '<?php echo e(URL::asset('src/images/users/')); ?>';
        </script>




    </body>



</html>
