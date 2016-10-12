
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" ng-model="member.name">
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

        <div class="form-group pull-right">
            <a href="" class="btn btn-default " ng-click="clearMember()">New</a>
            <a href="" class="btn btn-primary " ng-click="addMember()" ng-show="showMemberAdd" ng-disabled="userForm.member_email.$invalid" >Add</a>
            <a href="" class="btn btn-primary " ng-click="updateMember()" ng-show="showMemberUpdate" ng-disabled="userForm.member_email.$error ">Update</a>
        </div>
        <br>
        <table st-table="displayedCollection2" st-safe-src="alumni_family_members"
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
                                ng-click="editMember(member)">
                            <i class="glyphicon glyphicon-edit">
                            </i>
                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="removeMember(member)" class="btn btn-sm btn-warning">
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
                <a href="" class="btn btn-default pull-left" ng-click="changeTab(4)">Previous</a>
                <a href="" class="btn btn-primary pull-right"  ng-click="changeTab(6)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>
                <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                           >Next</a>-->
            </div>
        </div>
        <br>
    </div>
</div>