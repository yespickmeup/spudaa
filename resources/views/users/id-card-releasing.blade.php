@extends('dashboard')

@section('myCss')


@endsection
@section('title')
ID Card Releasing
@endsection
@section('content')
<div class="row" ng-controller="idCardReleasingController">
    <div class="row col-md-6">
        <!--        <div class="dropdown dropdown-scroll col-md-6" >
        
                    <button class="btn btn-default dropdown-toggle" style="width: 100%;text-align: left;" type="button" id="dropdownMenu1" data-toggle="dropdown">Search Name <span class="caret"></span>
                    </button>
        
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation">
                            <div class="input-group input-group-sm search-control"> <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-search"></span>
                                </span>
                                <input type="text" class="form-control" placeholder="Query" ng-model="query">
                            </div>
                        </li>
                        <li role="presentation" ng-repeat='item in items| filter:query'><a href="#"> <%item.name%> </a></li>
                    </ul>
                </div>
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
                <input type="checkbox" name="r1" class="minimal-red" >
                <input type="text" class="form-control" >-->
        <div class="col-md-12" id="mySelector">
            <img src="{{ URL::asset('src/images/system/front_cover.jpg') }}"
                 class="img-thumbnail imgInp img-responsive"
                 alt="Cinque Terre"
                 width="323.52px" 
                 height="204px;"
                 style="position: relative; "
                 id="accountPhoto"
                 ng-src="<%imageSource%>"
                 >
            <label style="position: absolute;margin-left: -235px;top:150px; font-family:  Helvetica, sans-serif;font-size: 14px; " id="accountName" >Rodel Luis Nacianceno</label>
            <label style="position: absolute;margin-left: -235px;top:170px; " id="accountNo" >00000000000001</label>
            <img class="img-thumbnail" 
                
                 ng-src="<%user.imageSource%> "
                 onerror="this.src='../src/images/users/user2-160x160.jpg'"
                 style="width: 72px;height: 78px;position: absolute; margin-left: -314px;top:110px;"
                 >
        </div>

        <div class="col-md-12 pull-right sample"><br>
            <button ng-click="print()" class="btn btn-success">Print Preview</button>
        </div>
    </div>
    <div class="col-md-6">
        <table st-table="displayedCollection" st-safe-src="levels"
               class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th st-sort="level.level">Request</th>
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

</div>
@endsection

@section('myScripts')

@endsection