<?php $__env->startSection('title'); ?>
Surveys
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                                 <?php echo $__env->make('account.account-employment-survey', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class='tab-pane ' id="tab_6" >
                                <?php echo $__env->make('account.account-education-outcomes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <div class='tab-pane ' id="tab_4">
                                 <?php echo $__env->make('account.account-customer-satisfaction-survey', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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