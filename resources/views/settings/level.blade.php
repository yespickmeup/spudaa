@extends('dashboard')


@section('title')
Level Maintenance
@endsection
@section('content')
<div class="row" ng-controller="levelController">

    <div class="col-md-12">
        <!--    Alert for Level-->
        <div class="alert alert-success fade in" ng-show="showAddLevelSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Added!</strong>
        </div>
        <div class="alert alert-success fade in" ng-show="showUpdateLevelSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Updated!</strong>
        </div>
        <div class="alert alert-warning fade in" ng-show="showDeleteLevelSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Deleted!</strong>
        </div>

        <label>Input Level</label>
        <div class="input-group">

            <input type="text" class="form-control" placeholder="Level" ng-model="inputLevel" id="inputLevel"
                   ng-keydown="$event.which === 13 && addLevel()"
                   >
            <span class="input-group-btn">
                <button ng-show="showLevelAdd" class="btn btn-primary" type="button"
                        ng-click="addLevel()">
                    Add
                </button>
                <button ng-show="showLevelUpdate" class="btn btn-primary" type="button"
                        ng-click="updateLevel()">
                    Update
                </button>
            </span>
        </div>
        <br>

        <table st-table="displayedCollection" st-safe-src="levels"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th colspan="12"><input st-search="" class="form-control" placeholder="search"
                                            type="text"/></th>
                </tr>
                <tr>
                    <th st-sort="level.level">Level</th>
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
    <script type="text/ng-template" id="modal.html">
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

@endsection