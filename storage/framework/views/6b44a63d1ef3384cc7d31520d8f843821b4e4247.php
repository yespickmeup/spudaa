<?php $__env->startSection('title'); ?>
Account Approval
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" ng-controller="accountApprovalController">

    <div class="col-md-12">
        <!--    Alert for Course-->
        <div class="alert alert-success fade in" ng-show="showAccountApprovedSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Account&emsp;<strong><%account_name%> </strong> successfully approved!.
        </div>

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
                    <th style="width: 60px;" st-sort="user.activated"></th>
                    <th style="width: 60px;" st-sort="user.approved"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="user in displayedCollection">
                    <td><%user.last_name%></td>
                    <td><%user.first_name%></td>
                    <td><%user.middle_name%></td>
                    <td><%user.email%></td>

                    <td> 
                        <div ng-if="user.activated === '1'"> <span style="color: green;">Activated</span></div>
                        <div ng-if="user.activated === '0'"> <span style="color: red;" >Pending</span></div>
                    </td>
                    <td>

                        <div ng-if="user.approved === '0' && user.activated === '0'">
                            <span style="color: red;" >Pending</span>
                        </div>
                        <div ng-if="(user.approved === '0' && user.activated === '1')">
                            <a href="" ng-click="approveAccount(user)"><u><span style="color: #0088cc;">Approve</span></u></a>
                        </div>

                        <div ng-if="user.approved === '1' && user.activated === '1'">
                            <span style="color: green;">Approved</span>
                        </div>

                    </td>

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
    <script type="text/ng-template" id="modalMajor.html">
        <div class="modal ">
        <div class="modal-dialog modal-sm type-danger">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
        aria-hidden="true">&times;</button>
        <h4 class="modal-title">Confirm Delete!</h4>
        </div>

        <div class="modal-footer">
        <button type="button" ng-click="close('No')" class="btn btn-default" data-dismiss="modal">
        No
        </button>
        <button type="button" ng-click="close('Yes')" class="btn btn-primary" data-dismiss="modal">
        Yes
        </button>
        </div>
        </div>
        </div>
        </div>
    </script>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>