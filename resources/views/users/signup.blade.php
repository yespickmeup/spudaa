<!DOCTYPE html>
<html ng-app="signupApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alumni Association | Signup</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://rawgit.com/maximnaidenov/angular-busy-tracker/v2.0.0/dist/busy.css"/>
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/AdminLTE.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/plugins/iCheck/square/blue.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/AdminLTE/css/skins/_all-skins.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('src/plugins/datepicker/datepicker3.css') }}"/>


    </head>
    <body class="hold-transition register-page">




        <div class="container " ng-controller="signupController">
            <div class="col-md-12">
                <br><br><br>
                <div class="register-logo">
                    <b>Alumni</b>Association
                </div>
                <div class="register-box-body">

                    <h2 class="page-header">Signup</h2>
                    <!--                     <h1>Hello Spinner!</h1>
                                        <input type="button" ng-click="startSpin()" value="Start spinner" />
                                        <input type="button" ng-click="stopSpin()" value="Stop spinner" />
                                        <br />Spinner active: <%spinneractive%><br />Started: <%startcounter%> times<br />
                    -->                    <span us-spinner="{radius:15, width:5, length: 10}" spinner-key="spinner-1" ></span>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Background Information</a></li>
                                    <li ><a href="#tab_2" data-toggle="tab">Employment Survey</a></li>
                                    <li ><a href="#tab_3" data-toggle="tab">Education Outcomes</a></li>
                                    <li ><a href="#tab_7" data-toggle="tab">Customer Satisfaction Survey</a></li>
<!--                                    <li ><a href="#tab_5" data-toggle="tab">School Activities Involvements</a></li>-->
                                    <li><a href="#tab_6" data-toggle="tab">Alumni Family Members</a></li>
                                    <li><a href="#tab_4" data-toggle="tab">Alumni Services</a></li>

                                </ul>
                                <form name="userForm" ng-submit="submitForm(userForm.$valid)"  
                                      style="" ng-model="userForm" enctype="multipart/form-data" novalidate data-toggle="validator"

                                      >
                                    <div class="tab-content "  >
                                        <div class="tab-pane active" id="tab_1" ng-controller="backgroundInfoController">
                                            @include('users.signup-background-info')
                                        </div>
                                        <div class="tab-pane " id="tab_2" ng-controller="employmentSurveyController">
                                            @include('users.signup-survey-questions')
                                        </div>
                                        <div class="tab-pane " id="tab_3" ng-controller="educactionOutcomesController">
                                            @include('users.signup-education-outcomes')
                                        </div>
                                        <div class="tab-pane " id="tab_7" >
                                            @include('users.signup-customer-satisfaction-survey')
                                        </div>
                                       
                                        <div class="tab-pane" id="tab_6" ng-controller="alumniFamilyMemberController">
                                            @include('users.signup-alumni-family-members')
                                        </div>
                                        <div class="tab-pane" id="tab_4" >
                                            @include('users.signup-alumni-services')
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br> <br> <br>
     
        <script src="{{ URL::to('src/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('src/plugins/iCheck/icheck.min.js') }}"></script>
        <script src="{{ URL::to('src/AdminLTE/js/app.min.js') }}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>
        <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.0.1.js"></script>
        <script type="text/javascript" src="http://fgnass.github.io/spin.js/spin.min.js"></script>
        <script src="{{ URL::to('src/angular/js/angular-spinner.js') }}"></script>
        <script src="{{ URL::to('src/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::to('src/AdminLTE/js/smart-table.debug.js') }}"></script>

        
        <script src="{{ URL::to('src/angular/js/signup/signup.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('src/angular/js/signup/background-info.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('src/angular/js/signup/employment-survey.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('src/angular/js/signup/education-outcomes.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('src/angular/js/signup/school-activities-involvements.js') }}" type="text/javascript"></script>
        <script src="{{ URL::to('src/angular/js/signup/alumni-family-members.js') }}" type="text/javascript"></script>
           <script src="{{ URL::to('src/angular/js/signup/alumni_professional_services.js') }}" type="text/javascript"></script>
            <script src="{{ URL::to('src/angular/js/signup/alumni_personal_services.js') }}" type="text/javascript"></script>

        <script type="text/ng-template" id="spinjs.html">
            <div class="busy-overlay-container">
            <div ng-if="$tracker.isBusy()">
            <span class="busy-overlay-sign" us-spinner="$config.options"></span>
            <div class="busy-overlay-backdrop"></div>
            </div>
            <div ng-transclude></div>
            </div>
        </script>
        <script>
                                            var myToken = '{{ Session::token() }}';
                                            var loginUrl = '{{ url('/signin') }}';
                                            var baseURL = '{{url('/')}}';
        </script>
        <script>



            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
            $('#datepicker').datepicker({
                autoclose: true
            });

        </script>

    </body>
</html>
