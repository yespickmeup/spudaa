<div class="row">
    <div class="col-md-12">
        <label>Name of Activity</label>
        <div class="input-group">

            <input type="text" class="form-control" placeholder="Activity" ng-model="inputActivity" 
                   ng-keydown="$event.which === 13 && addActivity()"
                   >

            <span class="input-group-btn">
                <button ng-show="showActivityAdd" class="btn btn-primary" type="button"
                        ng-click="addActivity()">
                    Add
                </button>
                <button ng-show="showActivityUpdate" class="btn btn-primary" type="button"
                        ng-click="updateActivity()">
                    Update
                </button>
            </span>
        </div>
        <br>

        <table st-table="displayedCollection" st-safe-src="activity_involvements"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th st-sort="activity.activity">Activity</th>
                    <th style="width:30px;"></th>
                    <th style="width:30px;"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="activity in displayedCollection">
                    <td><%activity.activity%></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default "
                                ng-click="editInvolvement(activity)">
                            <i class="glyphicon glyphicon-edit">
                            </i>

                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="removeInvolvement(activity)" class="btn btn-sm btn-warning">
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
    <div class="row text-center" >
    <div class="btn-group">
        <a href="" class="btn btn-default pull-left" ng-click="doBack()">Previous</a>
        <a href="" class="btn btn-primary pull-right"  ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
           >Next</a>
        <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>-->
    </div>
</div>
<br>
</div>