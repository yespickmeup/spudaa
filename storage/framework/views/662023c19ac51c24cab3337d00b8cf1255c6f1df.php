<?php $__env->startSection('title'); ?>
Preferences
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" ng-controller="preferenceController">

    <div class="col-md-12">
        <div class="form-group">
            <label for="school_name">School Name</label>
            <input type="text" class="form-control" placeholder=""  ng-model="preference.school_name" id="school_name">
        </div>
        <div class="form-group">
            <label for="school_label">School Label</label>
            <input type="text" class="form-control" placeholder=""  ng-model="preference.school_label" id="school_label">
        </div>
        <div class="form-group">
            <label for="contact_no">Contact No</label>
            <input type="text" class="form-control" placeholder=""  ng-model="preference.contact_no" id="contact_no">
        </div>
        <div class="form-group">
            <label for="email_address">Email Address</label>
            <input type="text" class="form-control" placeholder=""  ng-model="preference.email_address" id="email_address">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" placeholder=""  ng-model="preference.address" id="address">
        </div>
        <div class="form-group">
            <label for="about_us">About Us</label>
            <textarea cols="50" rows="30" class="form-control" ng-model="preference.about_us" id="about_us"></textarea>

        </div>
        <div class="row text-center" >
            <div class="row text-center " >
                <span style="color: green;font-size: 24px;" ng-show="showUpdatPreferenceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated</span>
            </div>
            <div class="btn-group">

                <a href="" class="btn btn-primary pull-right"  ng-click="updatePreference()" 
                   >Update</a>
            </div>
        </div>
        <hr>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>