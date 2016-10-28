@extends('dashboard')
@section('title')
Surveys
@endsection
@section('content')
<div class="row" ng-controller="accountSurveyController">
    <div class="register-box-body">
        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class='active'  ><a href="#tab_1" data-toggle="tab">Employment Survey</a></li>
                        <li class=''><a href="#tab_6" data-toggle="tab">Educational Outcomes</a></li>
                        <li class=''><a href="#tab_4" data-toggle="tab">Customer Satisfaction Survey</a></li>
                    </ul>
                    <form name="userForm" ng-submit="submitForm(userForm.$valid)"  
                          style="" ng-model="userForm"  novalidate data-toggle="validator"
                          >
                        <div class="tab-content "  >
                            <div class='tab-pane active' id="tab_1"  >
                                 @include('account.account-employment-survey')
                            </div>
                            <div class='tab-pane ' id="tab_6" >
                                @include('account.account-education-outcomes')
                            </div>
                            <div class='tab-pane ' id="tab_4">
                                 @include('account.account-customer-satisfaction-survey')
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection