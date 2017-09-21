@extends('dashboard')


@section('title')
User Management
@endsection
@section('content')
<div class="row" ng-controller="userManagementController">

    <div class="col-md-12">
        <!--    Alert for Course-->

        <div class="row text-center " >
            <span style="color: green;font-size: 24px;" ng-show="showUserManagementSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated</span>
            <br>
        </div>

        <table st-table="displayedCollection" st-safe-src="users"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th colspan="12"><input st-search="" class="form-control" placeholder="search" type="text"/></th>
                </tr>
                <tr>
                    <th style="width: 100px;" st-sort="user.last_name">Photo</th>
                    <th style="width: 160px;" st-sort="user.last_name">Last Name</th>
                    <th style="width: 160px;" st-sort="user.first_name">First Name</th>
                    <th style="width: 100px;" st-sort="user.middle_name">Middle Name</th>
                    <th st-sort="user.email">email</th>
                    <th style="width: 60px;" st-sort="user.role"></th>
                    <th style="width: 60px;" st-sort="user.active"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="user in displayedCollection">
                    <td>
                    <img class="img-circle" ng-src="<%user.image%>"  style="width: 50px;height: 50px;" ng-click="infoAccount(user)">
                    </td>
                    <td><%user.last_name%></td>
                    <td><%user.first_name%></td>
                    <td><%user.middle_name%></td>
                    <td><%user.email%></td>
                    <td>
                        <div ng-if="user.role == 'SuperAdministrator'">
                            <a href="" ng-click="changeRole(user)"><span class="label label-info">superadministrator</span></a>
                        </div>
                        <div ng-if="(user.role == 'administrator')">
                            <a href="" ng-click="changeRole(user)"><span class="label label-info">administrator</span></a>
                        </div>
                        <div ng-if="(user.role == 'user')">
                            <a href="" ng-click="changeRole(user)"><span class="label label-info">user</span></a>
                        </div>
                    </td>
                    <td>
                        <div ng-if="user.active == '0'">
                            <a href="" ng-click="changeActive(user)"><span class="label label-warning">Inactive</span></a>
                        </div>
                        <div ng-if="(user.active == '1')">
                            <a href="" ng-click="changeActive(user)"><span class="label label-success">Active</span></a>
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
    <script type="text/ng-template" id="userManagement.html">
        <div class="modal ">
            <div class="modal-dialog modal-sm type-danger">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                    aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Select Role:</h4>
                </div>
                 <div class="modal-body">
                        <img class="img-circle" ng-src="<%user.image%>" onerror="this.src='../src/images/users/user2-160x160.jpg'" style="width: 100px;height: 100px;margin-left:75px;" >
                        <br> <br>
                        <label style="text-transform: capitalize;">Name:<%" "%><%user.first_name%><%" "%><%user.middle_name%><%" "%><%user.last_name%></label>
                        <label >Email Address:<%" "%><%user.email%></label><br>
                        <label >Student No.:<%" "%><%user.student_no%></label><br>
                        <label >Civil Status:<%" "%><%user.civil_status%></label><br>
                        <label >Gender:<%" "%><%user.gender%></label><br>
                        <label >BirthDate:<%" "%><%user.date_of_birth%></label><br>
                        <label >Home Address:<%" "%><%user.home_address%></label><br>
                        <label >Level:<%" "%><%user.level%></label><br>
                        <label >Year:<%" "%><%user.year%></label><br>
                        <label >Course:<%" "%><%user.course%></label><br>
    
                        <div ng-if="user.activated == 1">
                          <label>Activated? Yes</label> 
                        </div>
                        <div ng-if="user.activated == 0">
                          <label>Activated?No</label> 
                        </div>
                        <div ng-if="user.approved == 1">
                          <label>Approved? Yes</label> 
                        </div>
                        <div ng-if="user.approved == 0">
                          <label>Approved?No</label> 
                        </div>                     
                </div>
                <div class="col-md-12">
                    <label>Change Role:</label>
                    <select class="form-control" placeholder="Roles" 
                    ng-model="my_roles.selectedOption" 
                    ng-options="option.name for option in my_roles.availableOptions | orderBy:'name' track by option.name  "
                    ng-change="roleOnChange(my_roles.selectedOption)"
                    >
                    </select>
                </div>
                <br><br>
                <br><br>
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
    <script type="text/ng-template" id="userManagement2.html">
        <div class="modal ">
            <div class="modal-dialog modal-sm type-danger">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                    aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Enable/Disable Account</h4>
                </div>
                 <div class="modal-body">
                        <img class="img-circle" ng-src="<%user.image%>" onerror="this.src='../src/images/users/user2-160x160.jpg'" style="width: 100px;height: 100px;margin-left:75px;" >
                        <div ng-if="user.active == 1">
                         <h3 style="margin-left:90px;margin-top:5px;">Active</h3>
                        </div>
                        <div ng-if="user.active == 0">
                        <h3 style="margin-left:90px;margin-top:5px;">Inactive</h3>
                        </div>  
                        <label style="text-transform: capitalize;">Name:<%" "%><%user.first_name%><%" "%><%user.middle_name%><%" "%><%user.last_name%></label>
                        <label >Email Address:<%" "%><%user.email%></label><br>
                        <label >Student No.:<%" "%><%user.student_no%></label><br>
                        <label >Civil Status:<%" "%><%user.civil_status%></label><br>
                        <label >Gender:<%" "%><%user.gender%></label><br>
                        <label >BirthDate:<%" "%><%user.date_of_birth%></label><br>
                        <label >Home Address:<%" "%><%user.home_address%></label><br>
                        <label >Level:<%" "%><%user.level%></label><br>
                        <label >Year:<%" "%><%user.year%></label><br>
                        <label >Course:<%" "%><%user.course%></label><br>
    
                        <div ng-if="user.activated == 1">
                          <label>Activated? Yes</label> 
                        </div>
                        <div ng-if="user.activated == 0">
                          <label>Activated?No</label> 
                        </div>
                        <div ng-if="user.approved == 1">
                          <label>Approved? Yes</label> 
                        </div>
                        <div ng-if="user.approved == 0">
                          <label>Approved?No</label> 
                        </div> 
                  
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
    <script type="text/ng-template" id="modalAccountInfo2.html">
        <div class="modal ">
            <div class="modal-dialog modal-sm type-danger">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                        <h5 class="modal-title">Account Information</h5>         
                    </div>
                    <div class="modal-body">
                        <img class="img-circle" ng-src="<%user.image%>" onerror="this.src='../src/images/users/user2-160x160.jpg'" style="width: 100px;height: 100px;margin-left:75px;" >
                        <br> <br>
                        <label style="text-transform: capitalize;">Name:<%" "%><%user.first_name%><%" "%><%user.middle_name%><%" "%><%user.last_name%></label>
                        <label >Email Address:<%" "%><%user.email%></label><br>
                        <label >Student No.:<%" "%><%user.student_no%></label><br>
                        <label >Civil Status:<%" "%><%user.civil_status%></label><br>
                        <label >Gender:<%" "%><%user.gender%></label><br>
                        <label >BirthDate:<%" "%><%user.date_of_birth%></label><br>
                        <label >Home Address:<%" "%><%user.home_address%></label><br>
                        <label >Level:<%" "%><%user.level%></label><br>
                        <label >Year:<%" "%><%user.year%></label><br>
                        <label >Course:<%" "%><%user.course%></label><br>
    
                        <div ng-if="user.activated == 1">
                          <label>Activated? Yes</label> 
                        </div>
                        <div ng-if="user.activated == 0">
                          <label>Activated?No</label> 
                        </div>
                        <div ng-if="user.approved == 1">
                          <label>Approved? Yes</label> 
                        </div>
                        <div ng-if="user.approved == 0">
                          <label>Approved?No</label> 
                        </div>                     
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

@endsection