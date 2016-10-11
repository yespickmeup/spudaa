@extends('dashboard')


@section('title')
Major Maintenance
@endsection
@section('content')
<div class="row" ng-controller="majorController">

    <div class="col-md-12">
        <!--    Alert for Course-->
        <div class="alert alert-success fade in" ng-show="showAddMajorSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Added!</strong>
        </div>
        <div class="alert alert-success fade in" ng-show="showUpdateMajorSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Updated!</strong>
        </div>
        <div class="alert alert-warning fade in" ng-show="showDeleteMajorSuccess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully Deleted!</strong>
        </div>


        <label>Input Course</label>
        <div class="input-group">

            <input type="text" class="form-control" placeholder="Major" ng-model="inputMajor" id="inputMajor"
                   ng-keydown="$event.which === 13 && addMajor()"
                   >
            <span class="input-group-btn">
                <button ng-show="showMajorAdd" class="btn btn-primary" type="button"
                        ng-click="addMajor()">
                    Add
                </button>
                <button ng-show="showMajorUpdate" class="btn btn-primary" type="button"
                        ng-click="updateMajor()">
                    Update
                </button>
            </span>
        </div>
        <br>

        <table st-table="displayedCollection" st-safe-src="majors"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th st-sort="course.course">Major</th>
                    <th style="width:30px;"></th>
                    <th style="width:30px;"></th>
                </tr>

            </thead>
            <tbody>
                <tr ng-repeat="major in displayedCollection">
                    <td><%major.major%></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default "
                                ng-click="editMajor(major)">
                            <i class="glyphicon glyphicon-edit">
                            </i>

                        </button>
                    </td>
                    <td>  
                        <button type="button" ng-click="confirmDeleteMajor(major)" class="btn btn-sm btn-warning">
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

@endsection