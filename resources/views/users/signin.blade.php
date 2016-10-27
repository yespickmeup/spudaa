<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alumni Association | Signin</title>
        <link rel="shortcut icon" type="image/png" href="../src/images/system/spud-alumni-logo.png" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/style.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/AdminLTE.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/plugins/iCheck/square/blue.css') }}"/>

        <script src="{{ URL::to('src/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('src/plugins/iCheck/icheck.min.js') }}"></script>
    </head>
    <body class="hold-transition login-page">

        <div class="login-box">
            <div style="margin-left:90px; ">
                <img class="img-thumbnail" 
                     src="../src/images/system/spud-alumni-logo.png"
                     style="width: 80px;height: 80px;background-color : transparent;position: absolute;margin-left: -85px;margin-top: -15px;border: 0;"
                     >

                <h2 style="color:darkolivegreen;">St. Paul University Dumaguete</h2>
                <h4 style="color:gray;">Alumni Association</h4>
                <br>
            </div>
            <br>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <br>
                <h3>Sign in to start your session</h3>
                <br>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                    @endif    

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                        <div class="col-md-12">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }} "  style="border:1px 1px 1px 1px;border-color: gray;color:black;height: 35px;" placeholder="Email Address">
                            <span class="glyphicon glyphicon-envelope form-control-feedback" style="margin-top: -5px;"></span>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback" style="margin-top: -20px;">
                        <div class="col-md-12">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" style="border-color: gray;">
                            <span class="glyphicon glyphicon-lock form-control-feedback" style="margin-top: -5px;"></span>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
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
                <a href="{{route('signup')}}" class="text-center"><label style="font-size: 18px;">Register a new membership</label></a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->



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
