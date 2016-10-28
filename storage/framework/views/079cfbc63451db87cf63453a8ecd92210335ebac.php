<?php $__env->startSection('title'); ?>
My Account
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" ng-controller="signupController">

    <div class="register-box-body">
        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class='<%tab1%>'  ><a href="#tab_1" data-toggle="tab">Background Information</a></li>
                        <li class='<%tab2%>'><a href="#tab_2" data-toggle="tab">Employment Survey</a></li>
                        <li class='<%tab3%>'><a href="#tab_3" data-toggle="tab">Education Outcomes</a></li>
                        <li class='<%tab4%>'><a href="#tab_7" data-toggle="tab">Customer Satisfaction Survey</a></li>
                        <!--                                    <li ><a href="#tab_5" data-toggle="tab">School Activities Involvements</a></li>-->
                        <li class='<%tab5%>'><a href="#tab_6" data-toggle="tab">Alumni Family Members</a></li>
                        <li class='<%tab6%>'><a href="#tab_4" data-toggle="tab">Alumni Services</a></li>
                    </ul>
                    <form name="userForm" ng-submit="submitForm(userForm.$valid)"  
                          style="" ng-model="userForm" enctype="multipart/form-data" novalidate data-toggle="validator"
                          >
                        <div class="tab-content "  >
                            <div class='tab-pane <%tab1%>' id="tab_1"  ng-controller="backgroundInfoController">
                                <?php echo $__env->make('users.signup-background-info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class='tab-pane <%tab2%>' id="tab_2"  ng-controller="employmentSurveyController">
                                <?php echo $__env->make('users.signup-survey-questions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class='tab-pane <%tab3%>' id="tab_3" ng-controller="educactionOutcomesController">
                                <?php echo $__env->make('users.signup-education-outcomes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class='tab-pane <%tab4%>' id="tab_7" >
                                <?php echo $__env->make('users.signup-customer-satisfaction-survey', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>

                            <div class='tab-pane <%tab5%>' id="tab_6" ng-controller="alumniFamilyMemberController">
                                <?php echo $__env->make('users.signup-alumni-family-members', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class='tab-pane <%tab6%>' id="tab_4" >
                                <?php echo $__env->make('users.signup-alumni-services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>