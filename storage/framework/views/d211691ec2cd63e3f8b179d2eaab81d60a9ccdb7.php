

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alumni Association | Dashboard</title>

        <style>

        </style>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/bootstrap/css/bootstrap.min.css')); ?>"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/AdminLTE.min.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/skins/_all-skins.min.css')); ?>"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini" ng-app="settingsApp">
        <div class="wrapper">
            <header class="main-header">
                <a href="../../index2.html" class="logo">
                    <span class="logo-mini"><b>A</b>LT</span>
                    <span class="logo-lg"><b>Alumni</b>Association</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu" >
                        <ul class="nav navbar-nav" >
                            <li class="dropdown user user-menu" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Groups</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Photos</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">

                <section class="sidebar" >

                    <div class="user-panel" >
                        <div class="pull-left image" >
                            <img src="<?php echo e(URL::to('src/images/users/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <ul class="sidebar-menu" >
                        <li class="header">MAIN NAVIGATION</li>
                        <li><a href="<?php echo e(route('user.management')); ?>"><i class="fa fa-user"></i> <span>My Account</span></a></li>
                        <li><a href="<?php echo e(route('user.management')); ?>"><i class="fa fa-book"></i> <span>Surveys</span></a></li>
                        <li><a href="<?php echo e(route('user.management')); ?>"><i class="fa fa-users"></i> <span>User Management</span></a></li>
                        <li><a href="<?php echo e(route('account.approval')); ?>"><i class="fa fa-check-circle-o"></i> <span>Account Approval</span></a></li>
                        <li><a href="<?php echo e(route('card.releasing')); ?>"><i class="fa fa-photo"></i> <span>ID Card Releasing</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Settings</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo e(route('level')); ?>"><i class="fa fa-circle-o"></i> Level</a></li>
                                <li><a href="<?php echo e(route('year')); ?>"><i class="fa fa-circle-o"></i> Year</a></li>
                                <li><a href="<?php echo e(route('course')); ?>"><i class="fa fa-circle-o"></i> Courses</a></li>
                                <li><a href="<?php echo e(route('major')); ?>"><i class="fa fa-circle-o"></i> Majors</a></li>

                            </ul>
                        </li>
                        <li><a href="../../documentation/index.html"><i class="fa fa-bell"></i> <span>News</span></a></li>
                        <li><a href="../../documentation/index.html"><i class="fa fa-bell"></i> <span>Programs & Events</span></a></li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <?php echo $__env->yieldContent('title'); ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>
                <section class="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.6
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="#">Synapse Software Technologies</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <script>
            var myToken = '<?php echo e(Session::token()); ?>';
            var baseURL = '<?php echo e(url('/')); ?>';
        </script>
        <script src="<?php echo e(URL::to('src/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/bootstrap/js/bootstrap.min.js')); ?>"></script>


        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>
        <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.0.1.js"></script>
        <script type="text/javascript" src="http://fgnass.github.io/spin.js/spin.min.js"></script>
        <script src="<?php echo e(URL::to('src/angular/js/angular-spinner.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/smart-table.debug.js')); ?>"></script>
        <script src="https://rawgit.com/dwmkerr/angular-modal-service/master/dst/angular-modal-service.js"></script>
      

        <script src="<?php echo e(URL::to('src/plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/plugins/fastclick/fastclick.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/app.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/AdminLTE/js/demo.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/settings.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/level.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/year.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/courses.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/settings/major.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/account_approval/account_approval.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/user_management/user_management.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/id_card_releasing/id_card_releasing.js')); ?>"></script>
        
          <script src="<?php echo e(URL::to('src/angular/css/angularPrint.css')); ?>"></script>
        <script src="<?php echo e(URL::to('src/angular/js/angularPrint.js')); ?>"></script>
    </body>
</html>