<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alumni Association | Signin</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/bootstrap/css/bootstrap.min.css')); ?>"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/AdminLTE/css/AdminLTE.min.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/plugins/iCheck/square/blue.css')); ?>"/>


    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>Alumni</b>Association
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <h3>Sign in to start your session</h3>
                <br>

                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(session('warning')): ?>
                    <div class="alert alert-warning">
                        <?php echo e(session('warning')); ?>

                    </div>
                    <?php endif; ?>    

                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> has-feedback">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?> " placeholder="Email Address">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?> has-feedback">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!--                    <div class="form-group has-feedback">
                                            <input type="email" class="form-control" placeholder="Email">
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>-->
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat" disabled><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat" disabled><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                </div> 


                <a href="#">I forgot my password</a><br>
                <a href="<?php echo e(route('signup')); ?>" class="text-center">Register a new membership</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <script src="<?php echo e(URL::to('src/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('src/plugins/iCheck/icheck.min.js')); ?>"></script>
       
        <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
        </script>
    </body>
</html>