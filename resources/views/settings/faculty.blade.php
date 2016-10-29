@extends('dashboard')


@section('title')
Board of Directors
@endsection
@section('content')
<div class="row" ng-controller="facultyController">

    <div class="col-md-12">



        <div class="col-md-12 ">
            <button class="btn btn-primary pull-right " ng-click="newMember()">New</button>

        </div>

        <div class="col-md-12">
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


    </div>
    <script type="text/ng-template" id="modalMember.html">
        <div class="modal " >
        <div class="modal-dialog modal-sm type-danger" style="width:450px;">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
        aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add new director!</h4>
        </div>
        <div class="modal-body">
         

        <div class="img-box " style="margin-left:100px;">
        <img src="{{ URL::to('src/images/users/user2-160x160.jpg') }}" style="width:200px;height: 200px;" class="img-thumbnail">
        <input type="file" name="image" id="image" accept="image/jpeg/png"
        class="btn btn-default form-control image"
        style="width:200px;" ng-model="imageSource" ngf-max-height="1000"
        ngf-max-size="100MB"
        onchange="angular.element(this).scope().fileNameChaged(this)">  
                
        </div>
        <br>
       
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" ng-model="director.name" >
        <label for="designation">Designation</label>
        <input type="text" id="designation" class="form-control" ng-model="director.designation">
        <label for="details">Details</label>
        <textarea rows="6" id="details" class="form-control" ng-model="director.details">   </textarea>         
        </div>
        <div class="modal-footer">
        <button type="button" ng-click="close('No')" class="btn btn-default" data-dismiss="modal">
        Cancel
        </button>
        <button type="button" ng-click="close('Yes',title)" class="btn btn-primary" data-dismiss="modal">
        Save
        </button>
        </div>
        </div>
        </div>
        </div>
    </script>
</div>

@endsection