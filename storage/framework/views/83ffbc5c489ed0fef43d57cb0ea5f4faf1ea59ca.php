<?php $__env->startSection('title'); ?>
ID Card Releasing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" ng-controller="idCardReleasingController">

    <div class="col-md-12" id="mySelector">


        <img src="<?php echo e(URL::asset('src/images/system/front_cover.jpg')); ?>"
             class="img-thumbnail imgInp img-responsive"
             alt="Cinque Terre"
             width="400px" 
             height="120px;"
             ng-src="<%imageSource%>"
             >
        <!--        <label style="">Coco Martin</label>-->

    </div>
    <br>
    <div class="col-md-12 pull-right"><br>
        
        <button ng-click="print()" class="btn btn-success">Print Preview</button>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>