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
            <textarea cols="80" id="editor1" name="editor1" rows="10" ><%preference.about_us%></textarea>
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
        <h2>Banner</h2>

        <div class="row text-center" >
            <div class="row text-center " >
                <span style="color: green;font-size: 20px;text-align: center;" ng-show="uploadBanner"><span class="glyphicon glyphicon-ok"></span> Upload complete</span>
            </div>
            <br>
        </div>
        <div class="row">

            <div class="col-md-4">

                <img class="img-thumbnail" 
                     ng-src="<%imageSourceBanner1%> "
                     onerror="this.src='../src/AdminLTE/img/home/banner1.jpg'"
                     style="width: 250px;height: 250px;"
                     >
                <input type="file" name="image" id="image" accept="image/jpeg/png"
                       class="btn btn-default form-control image"
                       style="width: 250px;" ng-model="imageSource" ngf-max-height="1000"
                       ngf-max-size="100MB"
                       onchange="angular.element(this).scope().fileNameChaged(this, 'banner1.jpg')">

            </div>
            <div class="col-md-4">
                <img class="img-thumbnail" 
                     ng-src="<%imageSourceBanner2%> "
                     onerror="this.src='../src/AdminLTE/img/home/banner2.jpg'"
                     style="width: 250px;height: 250px;"
                     >
                <input type="file" name="image" id="image" accept="image/jpeg/png"
                       class="btn btn-default form-control image"
                       style="width: 250px;" ng-model="imageSource" ngf-max-height="1000"
                       ngf-max-size="100MB"
                       onchange="angular.element(this).scope().fileNameChaged(this, 'banner2.jpg')">

            </div>
            <div class="col-md-4">
                <img class="img-thumbnail" 
                     ng-src="<%imageSourceBanner3%> "
                     onerror="this.src='../src/AdminLTE/img/home/banner2.jpg'"
                     style="width: 250px;height: 250px;"
                     >
                <input type="file" name="image" id="image" accept="image/jpeg/png"
                       class="btn btn-default form-control image"
                       style="width: 250px;" ng-model="imageSource" ngf-max-height="1000"
                       ngf-max-size="100MB"
                       onchange="angular.element(this).scope().fileNameChaged(this, 'banner3.jpg')">

            </div>

        </div>
    </div>

</div>

<?php $__env->startSection('myScripts'); ?>
<script type="text/javascript">
    window.onload = function () {
        CKEDITOR.replace('editor1');
        CKEDITOR.instances['editor1'].on('change', function () {
            CKEDITOR.instances['editor1'].updateElement()
        });
    };
</script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>