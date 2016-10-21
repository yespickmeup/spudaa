<h4><p><b>We want to know about you. To help the Paulinian  Alumni organize programs that cater to your needs,
            may we ask you to help. Please list down your priorities and needs in your 
            professional and personal lives as of the moment.</b></p></h4>
<div class="row">
    <div class="col-md-6" ng-controller="accountAlumniProfessionalServicesController">
        <h4><b>Professional</b></h4>
        <label for="personal_life" >Priority</label>
        <div class="input-group col-md-12">

            <input type="text" class="form-control"   ng-model="professionalService.service" id="inputProfessionalServiceName">
            <span class="input-group-btn">
                <a href="" type="button" class="btn btn-flat btn-primary " ng-click="addProfessionalService2()" ng-show="showProfessionalServiceAdd">Add</a>
                <a href="" type="button" class="btn btn-flat btn-primary " ng-click="updateProfessionalService2()" ng-show="showProfessionalServiceUpdate">Update</a>
            </span>
        </div>
        <div class="row text-center " >
            <span style="color: green;font-size: 18px;" ng-show="showAddProfessionalServiceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Added!</span>
            <span style="color: green;font-size: 18px;" ng-show="showUpdateProfessionalServiceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated!</span>
            <span style="color: green;font-size: 18px;" ng-show="showDeleteProfessionalServiceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Deleted!</span>
        </div>
        <br>
        <table st-table="displayedCollection" st-safe-src="professionalServices"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th st-sort="professionalService.service">Priority</th>
                    <th style="width:30px;"></th>
                    <th style="width:30px;"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="professionalService in displayedCollection">
                    <td><%professionalService.service%></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default "
                                ng-click="editProfessionalService(professionalService)">
                            <i class="glyphicon glyphicon-edit">
                            </i>
                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="confirmDeleteProfessionalService(professionalService)" class="btn btn-sm btn-warning">
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
    </div>
    <div class="col-md-6" ng-controller="accountAlumniPersonalServicesController">
        <h4><b>Personal Life</b></h4>
        <label for="personal_life2" >Priority</label>
        <div class="input-group col-md-12">

            <input type="text" class="form-control"  id="inputPersonalServiceName" ng-model="personalService.service">
            <span class="input-group-btn">
                <a href="" type="button" class="btn btn-flat btn-primary " ng-click="addPersonalService2()" ng-show="showPersonalServicesAdd">Add</a>
                <a href="" type="button" class="btn btn-flat btn-primary " ng-click="updatePersonalService2()" ng-show="showPersonalServicesUpdate">Update</a>
            </span>
        </div>
        <div class="row text-center " >
            <span style="color: green;font-size: 18px;" ng-show="showAddPersonalServiceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Added!</span>
            <span style="color: green;font-size: 18px;" ng-show="showUpdatePersonalServiceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated!</span>
            <span style="color: green;font-size: 18px;" ng-show="showDeletePersonalServiceSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Deleted!</span>
        </div>
        <br>
        <table st-table="displayedCollection" st-safe-src="personalServices"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th st-sort="personalService.service">Priority</th>
                    <th style="width:30px;"></th>
                    <th style="width:30px;"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="personalService in displayedCollection">
                    <td><%personalService.service%></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default "
                                ng-click="editPersonalService(personalService)">
                            <i class="glyphicon glyphicon-edit">
                            </i>
                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="confirmDeletePersonalService(personalService)" class="btn btn-sm btn-warning">
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
    </div>


</div>
<div class="row text-center" >
    <div class="btn-group">
        <!--        <a href="" class="btn btn-default pull-left" ng-click="changeTab(5)">Previous</a>
                <a href="" class="btn btn-success pull-right"  ng-click="((userForm.$error && !userForm.$error.emailExists) || userForm.first_name.$invalid || userForm.last_name.$invalid || userForm.date_of_birth.$invalid) || submitForm()" ng-disabled="(userForm.$error && !userForm.$error.emailExists) || userForm.first_name.$invalid || userForm.last_name.$invalid || userForm.date_of_birth.$invalid"  
                   >Save</a>-->
        <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>-->
    </div>
</div>
<br>

<script type="text/ng-template" id="modalPersonalService.html">
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