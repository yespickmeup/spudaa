
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" ng-model="member.name" id="inputFamilyName">
            </div>
            <div class="col-md-4">
                <label>Relation</label>
                <select class="form-control" placeholder="Relation" ng-model="member.relation" >
                    <option></option>
                    <option>Father</option>
                    <option>Mother</option>
                    <option>Son</option>
                    <option>Daughter</option>
                    <option>Husband</option>
                    <option>Wife</option>
                    <option>Brother</option>
                    <option>Sister</option>
                    <option>Grandfather</option>
                    <option>Grandmother</option>
                    <option>Grandson</option>
                    <option>Granddaughter</option>
                    <option>Uncle</option>
                    <option>Aunt</option>
                    <option>Nephew</option>
                    <option>Niece</option>
                    <option>Cousin</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label>Name Before Married</label>
                <input type="text" class="form-control" placeholder="Name before married"  ng-model="member.name_before_married">
            </div>
        </div>
        <div class="row" ng-class="{ 'has-error' : userForm.member_email.$invalid }">
            <div class="col-md-12">

                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" ng-model="member.email" name="member_email" >

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Contact Number</label>
                <input type="text" class="form-control" placeholder="Contact Number" ng-model="member.contact_number">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Residence Address</label>
                <input type="text" class="form-control" placeholder="Residence address" ng-model="member.address">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Occupation</label>
                <input type="text" class="form-control" placeholder="Occupation" ng-model="member.occupation">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Office Address</label>
                <input type="text" class="form-control" placeholder="Office Address" ng-model="member.office_address"><br>
            </div>
        </div>
        <div class="row text-center " >
            <span style="color: green;font-size: 24px;" ng-show="showAddFamilySuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Added!</span>
            <span style="color: green;font-size: 24px;" ng-show="showUpdateFamilySuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated!</span>
            <span style="color: green;font-size: 24px;" ng-show="showDeleteFamilySuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Deleted!</span>
        </div>
        <div class="form-group pull-right">
            <a href="" class="btn btn-default " ng-click="clearFamily()">New</a>
            <a href="" class="btn btn-primary " ng-click="addFamily()" ng-show="showFamilyAdd" ng-disabled="userForm.member_email.$invalid" >Add</a>
            <a href="" class="btn btn-primary " ng-click="updateFamily()" ng-show="showFamilyUpdate" ng-disabled="userForm.member_email.$invalid">Update</a>
        </div>
        <br>
        <table st-table="displayedCollection2" st-safe-src="familys"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th st-sort="member.name">Member</th>
                    <th style="width:160px;">Relation</th>
                    <th style="width:30px;"></th>
                    <th style="width:30px;"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="member in displayedCollection2">
                    <td><%member.name%></td>
                    <td><%member.relation%></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default "
                                ng-click="editFamily(member)">
                            <i class="glyphicon glyphicon-edit">
                            </i>
                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="confirmDeleteFamily(member)" class="btn btn-sm btn-warning">
                            <i class="glyphicon glyphicon-remove-circle">
                            </i>
                        </button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-center">
                        <div st-pagination="" st-items-by-page="itemsByPage2" st-displayed-pages="7"></div>
                    </td>
                </tr>
            </tfoot>
        </table>

        <div class="row text-center" >
            <div class="btn-group">
<!--                <a href="" class="btn btn-default pull-left" ng-click="changeTab(4)">Previous</a>
                <a href="" class="btn btn-primary pull-right"  ng-click="changeTab(6)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>-->
                <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                           >Next</a>-->
            </div>
        </div>

        <br>
    </div>
    <script type="text/ng-template" id="modalFamily.html">
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