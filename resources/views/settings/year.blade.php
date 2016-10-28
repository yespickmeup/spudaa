@extends('dashboard')


@section('title')
Year Maintenance
@endsection
@section('content')
<div class="row" ng-controller="yearController">

    <div class="col-md-12">
        <!--    Alert for Year-->
        <div class="alert alert-success fade in" ng-show="showAddYearSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Added!</strong>
        </div>
        <div class="alert alert-success fade in" ng-show="showUpdateYearSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Updated!</strong>
        </div>
        <div class="alert alert-warning fade in" ng-show="showDeleteYearSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Deleted!</strong>
        </div>


        <label>Input Year</label>
        <div class="input-group">

            <input type="text" class="form-control" placeholder="Year" ng-model="inputYear" id="inputYear"
                   ng-keydown="$event.which === 13 && addYear()"
                   >
            <span class="input-group-btn">
                <button ng-show="showYearAdd" class="btn btn-primary" type="button"
                        ng-click="addYear()">
                    Add
                </button>
                <button ng-show="showYearUpdate" class="btn btn-primary" type="button"
                        ng-click="updateYear()">
                    Update
                </button>
            </span>
        </div>
        <br>

        <table st-table="displayedCollection" st-safe-src="years"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th colspan="12"><input st-search="" class="form-control" placeholder="search"
                                            type="text"/></th>
                </tr>
                <tr>
                    <th st-sort="year.year">Year</th>
                    <th style="width:30px;"></th>
                    <th style="width:30px;"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="year in displayedCollection">
                    <td><%year.year%></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default "
                                ng-click="editYear(year)">
                            <i class="glyphicon glyphicon-edit">
                            </i>

                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="confirmDeleteYear(year)" class="btn btn-sm btn-warning">
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
    <script type="text/ng-template" id="modalYear.html">
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