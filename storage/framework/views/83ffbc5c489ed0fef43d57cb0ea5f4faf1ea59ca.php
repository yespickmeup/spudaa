<?php $__env->startSection('myCss'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
ID Card Releasing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div class="row" ng-controller="idCardReleasingController">
        <div class="col-md-6" >
            <div class="col-md-12" id="mySelector">
                <img src="<?php echo e(URL::asset('src/images/system/front_cover.jpg')); ?>"
                     class="img-thumbnail imgInp img-responsive"
                     alt="Cinque Terre"
                     width="323.52px" 
                     height="204px;"
                     style="position: relative; "
                     id="accountPhoto"
                     ng-src="<%imageSource%>"
                     >
                
                <label  style="position: absolute;margin-left: -235px;top:175px; font-family:  Helvetica, sans-serif;font-size: 16px;" id="accountName" ><%printName%></label>
                <label  style="position: absolute;margin-left: -235px;top:150px; font-family:  Helvetica, sans-serif;font-size: 14px; "id="accountNo" ><%printID%></label>
                <img class="img-thumbnail" 

                     ng-src="<%printImage%> "
                     onerror="this.src='../src/images/users/user2-160x160.jpg'"
                     style="width: 72px;height: 78px;position: absolute; margin-left: -314px;top:110px;"
                     >
            </div>

            <div class="col-md-12 pull-right sample"><br>
                <button ng-click="print()" class="btn btn-success">Print Preview</button>
            </div>
        </div>
        <div class="col-md-6" >
            <table st-table="displayedCollection" st-safe-src=""
                   class="table  table-bordered table-hover">
                <thead>
                    <tr>
                        <th st-sort="level.level">Request</th>
                        <th style="width:30px;"></th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="level in displayedCollection">
                        <td><%level.level%></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-default "
                                    ng-click="editLevel(level)">
                                <i class="glyphicon glyphicon-edit">
                                </i>

                            </button>
                        </td>
                        <td>  
                            <button type="button" ng-click="confirmDeleteLevel(level)" class="btn btn-sm btn-warning">
                                <i class="glyphicon glyphicon-remove-circle">
                                </i>
                            </button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-center">
                            <div st-pagination="" st-items-by-page="itemsByPage" st-displayed-pages="7"></div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row" ng-controller="idCardReleasingController2">
        <div class="col-md-12">
            <br>
            <table st-table="displayedCollection" st-safe-src="users"
                   class="table  table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="12"><input st-search="" class="form-control" placeholder="search"
                                                type="text"/></th>
                    </tr>
                    <tr>
                        <th style="width: 160px;" st-sort="user.last_name">Last Name</th>
                        <th style="width: 160px;" st-sort="user.first_name">First Name</th>
                        <th style="width: 100px;" st-sort="user.middle_name">Middle Name</th>
                        <th st-sort="user.email">email</th>
                        <th style="width: 40px;"></th>
                    </tr>

                </thead>
                <tbody>
                    <tr ng-repeat="user in displayedCollection">
                        <td><%user.last_name%></td>
                        <td><%user.first_name%></td>
                        <td><%user.middle_name%></td>
                        <td><%user.email%></td>
                        <td><button class="btn btn-success sm" ng-click="view(user)">Select</button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-center">
                            <div st-pagination="" st-items-by-page="itemsUsers" st-displayed-pages="7"></div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>