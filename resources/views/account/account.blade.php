@extends('dashboard')


@section('title')
My Account
@endsection

@section('content')
<div class="row" ng-controller="accountController">

    <div class="register-box-body">
        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class='active'  ><a href="#tab_1" data-toggle="tab">Background Information</a></li>
                        <li class=''><a href="#tab_6" data-toggle="tab">Alumni Family Members</a></li>
                        <li class=''><a href="#tab_4" data-toggle="tab">Alumni Services</a></li>
                    </ul>
                    <form name="userForm" ng-submit="submitForm(userForm.$valid)"  
                          style="" ng-model="userForm" enctype="multipart/form-data" novalidate data-toggle="validator"
                          >
                        <div class="tab-content "  >
                            <div class='tab-pane active' id="tab_1"  ng-controller="accountBackgroundController">
                                @include('account.account-background-info')
                            </div>
                            <div class='tab-pane ' id="tab_6" ng-controller="familyMembersController">
                                @include('account.account-family-members')
                            </div>
                            <div class='tab-pane ' id="tab_4">
                                @include('account.account-alumni-services')
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



</div>

@endsection