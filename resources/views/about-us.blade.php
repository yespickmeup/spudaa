<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alumni Association | About-Us</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://rawgit.com/maximnaidenov/angular-busy-tracker/v2.0.0/dist/busy.css"/>
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/AdminLTE.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/plugins/iCheck/square/blue.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/skins/_all-skins.min.css') }}"/>



        <script src="{{ URL::to('src/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.js"></script>
        <script src="{{ URL::to('src/angular/js/settings/about-us.js') }}"></script>
    </head>
    <body ng-app="aboutUssApp" ng-controller="aboutUseController">



        <div class="container">
            <div class="row">
                <div class="col-lg-12 " >
                    <img src="../src/AdminLTE/img/home/about-img.jpg" alt="about" class="img-responsive" style="height:400px;width: 100%;">
                    </div>
                <div class="col-md-12" id="details">

                </div>
            </div>

        </div>

        <script>
                    var myToken = '{{Session::token()}}';
                    var baseURL = '{{url('/')}}';
                    var photo = '{{URL::asset('src/images/users/')}}';
        </script>




    </body>



</html>
