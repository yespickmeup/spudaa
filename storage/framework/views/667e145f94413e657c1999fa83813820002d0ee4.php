<h4><p><b>We want to know about you. To help the Paulinian  Alumni organize programs that cater to your needs,
            may we ask you to help. Please list down your priorities and needs in your 
            professional and personal lives as of the moment.</b></p></h4>
<div class="row">
    <div class="col-md-6" ng-controller="alumniProfessionalServicesController">
        <h4><b>Professional</b></h4>
        <label for="personal_life" >Priority</label>
        <div class="input-group">

            <input type="text" class="form-control" name="personal_life" id="personal_life" ng-model="inputProfessionalService">
            <span class="input-group-btn">
                <button type="button" class="btn btn-flat btn-primary " ng-click="addProfessionalService()" ng-show="showServicesAdd">Add</button>
                <button type="button" class="btn btn-flat btn-primary " ng-click="updateProfessionalService()" ng-show="showServicesUpdate">Update</button>
            </span>
        </div>
        <br>
        <table st-table="displayedCollection" st-safe-src="alumni_professional_services"
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
                        <button type="button" ng-click="removeProfessionalService(professionalService)" class="btn btn-sm btn-warning">
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
    <div class="col-md-6" ng-controller="alumniPersonalServicesController">
        <h4><b>Personal Life</b></h4>
        <label for="personal_life2" >Priority</label>
        <div class="input-group">

            <input type="text" class="form-control" name="personal_life" id="personal_life" ng-model="inputPersonalService">
            <span class="input-group-btn">
                <button type="button" class="btn btn-flat btn-primary " ng-click="addPersonalService()" ng-show="showPersonalAdd">Add</button>
                <button type="button" class="btn btn-flat btn-primary " ng-click="updatePersonalService()" ng-show="showPersonalUpdate">Update</button>
            </span>
        </div>
        <br>
        <table st-table="displayedCollection" st-safe-src="alumni_personal_services"
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
                        <button type="button" ng-click="removePersonalService(personalService)" class="btn btn-sm btn-warning">
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
        <a href="" class="btn btn-default pull-left" ng-click="changeTab(5)">Previous</a>
        <a href="" class="btn btn-success pull-right"  ng-click="((userForm.$error && !userForm.$error.emailExists) || userForm.first_name.$invalid  || userForm.last_name.$invalid || userForm.date_of_birth.$invalid) || submitForm()" ng-disabled="(userForm.$error && !userForm.$error.emailExists) || userForm.first_name.$invalid  || userForm.last_name.$invalid || userForm.date_of_birth.$invalid"  
           >Save</a>
        <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>-->
    </div>
</div>
<br>