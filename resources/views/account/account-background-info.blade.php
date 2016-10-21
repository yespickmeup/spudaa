
<div class="box box-widget widget-user">
    <div class="widget-user-header bg-black" style="background: url('{{ URL::to('src/images/users/photo1.png') }}') center center;">
        <h3 class="widget-user-username"></h3>
        <h5 class="widget-user-desc"></h5>
    </div>
    <div class="widget-user-image">
        <img class="img-circle" 
             src="<%user.imageSource%>" 
             ng-src="<%user.imageSource%> "
             onerror="this.src='../src/images/users/user2-160x160.jpg'"
             style="width: 80px;height: 80px;"
             >
        
    </div>
  
    <div class="box-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                </div>
            </div>
            <div class="col-sm-2 col-sm-offset-1">
                <div class="description-block">
                    <input type="file" name="image" id="image" accept="image/jpeg/png"
                               class="btn btn-default form-control image"
                               style="" ng-model="imageSource" ngf-max-height="1000"
                               ngf-max-size="100MB"
                               onchange="angular.element(this).scope().fileNameChaged(this)">
                    <span style="color: green" ng-show="uploadComplete"><span class="glyphicon glyphicon-ok"></span> Upload complete</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                </div>
            </div>

        </div>

    </div>
</div> 

<div>
    <div class="row form-group">
        <div class="col-md-6 ">
            <label>Alumni No</label>
            <input type="text" class="form-control" placeholder="" disabled="true" ng-model="user.alumni_no">
        </div>
        <div class="col-md-6">
            <label>Student No</label>
            <input type="text" class="form-control" placeholder="Student No"  ng-model="user.student_no" >
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4 " ng-class="{ 'has-error' : userForm.first_name.$invalid  }">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="First Name" ng-model="user.first_name" name="first_name" required>
            <p ng-show="userForm.first_name.$error.required && userForm.first_name.$touched" class="help-block">First name is required.</p>
        </div>


        <div class="col-md-4">
            <label>Middle Name</label>
            <input type="text" class="form-control" placeholder="Middle Name" ng-model="user.middle_name">
        </div>
        <div class="col-md-3" ng-class="{ 'has-error' : userForm.last_name.$invalid  }" >
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" ng-model="user.last_name" name="last_name" required>
            <p ng-show="userForm.last_name.$error.required && userForm.last_name.$touched" class="help-block">Last name is required.</p>
        </div>


        <div class="col-md-1">
            <label>Suffix</label>
            <select class="form-control" placeholder="Suffix" ng-model="user.suffix_name">
                <option>I</option>
                <option>II</option>
                <option>III</option>
                <option>Jr.</option>
                <option>Sr.</option>
            </select>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-4 ">
            <label>Civil Status</label>
            <select class="form-control" placeholder="Civil Status" ng-model="user.civil_status" >
                <option >Single</option>
                <option>Married</option>
                <option>Divorced</option>
                <option>Separated</option>
                <option>Widowed</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>Gender</label>
            <select class="form-control" placeholder="Gender" ng-model="user.gender">
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <div class="col-md-2" ng-class="{ 'has-error' : userForm.date_of_birth.$invalid  }">
            <label>Date of Birth</label>
            <div class="form-group">
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" ng-model="user.date_of_birth" name="date_of_birth" placeholder="MM/dd/yyyy" required>

                </div>
                <p ng-show="userForm.date_of_birth.$error.required && userForm.date_of_birth.$touched" class="help-block">Date of birth is required.</p>
                <!-- /.input group -->
            </div>

        </div>
        <div class="col-md-2">
            <label>Blood Type</label>
            <select class="form-control" placeholder="Blood Type" ng-model="user.blood_type" >
                <option>O+</option>
                <option>O–</option>
                <option>A+</option>
                <option>A–</option>
                <option>B+</option>
                <option>B–</option>
                <option>AB+</option>
                <option>AB–</option>
            </select>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-3 ">
            <label>Country</label>
            <select class="form-control" placeholder="Country" 
                    ng-model="country.selectedOption" 
                    ng-options="option.name for option in country.availableOptions| orderBy:'name' track by option.name  "
                    ng-change="countryOnChange(country.selectedOption)"
                    >
            </select>
        </div>
        <div class="col-md-3 ">
            <label>Province</label>
            <select class="form-control" placeholder="Province" 
                    ng-model="province.selectedOption" 
                    ng-options="option.name for option in province.availableOptions| orderBy:'name' track by option.name"
                    ng-change="provinceOnChange(province.selectedOption)"
                    >
            </select>

        </div>
        <div class="col-md-4 ">
            <label>City</label>
            <select class="form-control" placeholder="City" 
                    ng-model="city.selectedOption" 
                    ng-options="option.name for option in city.availableOptions| orderBy:'name' track by option.name">
            </select>
        </div>
        <div class="col-md-2 ">
            <label>Zip Code</label>
            <input type="text" class="form-control" placeholder="Zip Code" ng-model="user.zip_code">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 ">
            <label>Home Address</label>
            <input type="text" class="form-control" placeholder="Home Address" ng-model="user.home_address">
        </div>
        <div class="col-md-6 ">
            <label>Present Address</label>
            <input type="text" class="form-control" placeholder="Present Address" ng-model="user.present_address">
        </div>
    </div>


    <div class="row form-group">
        <div class="col-md-6 ">
            <label>Landline No</label>
            <input type="text" class="form-control" placeholder="Landline No" ng-model="user.landline_no">
        </div>
        <div class="col-md-6 ">
            <label>Cellphone No</label>
            <input type="text" class="form-control" placeholder="Cellphone No" ng-model="user.cellphone_no">
        </div>
    </div>

    <div class="row ">
        <div class="col-md-6 ">
            <label>Level</label>
            <select class="form-control" placeholder="Level" 
                    ng-model="level.selectedOption" 
                    ng-options="option.level for option in level.availableOptions| orderBy:'level' track by option.level">
            </select>
        </div>
        <div class="col-md-6">
            <label>Year</label>

            <select class="form-control" placeholder="Year" 
                    ng-model="year.selectedOption" 
                    ng-options="option.year for option in year.availableOptions| orderBy:'year' track by option.year">
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 ">
            <label>Course</label>

            <select class="form-control" placeholder="Course" 
                    ng-model="course.selectedOption" 
                    ng-options="option.course for option in course.availableOptions| orderBy:'course' track by option.course">
            </select>
        </div>
        <div class="col-md-6">
            <label>Major</label>
            <select class="form-control" placeholder="Major" 
                    ng-model="major.selectedOption" 
                    ng-options="option.major for option in major.availableOptions| orderBy:'major' track by option.major">
            </select>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-10">
            <label>Father</label>
            <input type="text" class="form-control" placeholder="Father" ng-model="user.father">
        </div>
        <div class="col-md-2 ">
            <label>Is Paulinian?</label><br>
            <input type="checkbox"  class="pull-right"  name="father_is_paulinian" id="father_is_paulinian"  checked="<%father_is_paulinian%>" /> 

        </div>
    </div>
    <div class="row form-group" >
        <div class="col-md-6 " >
            <label>Occupation</label>
            <input type="text" class="form-control" placeholder="Occupation" ng-model="user.father_occupation">
        </div>
        <div class="col-md-6" >
            <label>Office Address</label>
            <input type="text" class="form-control" placeholder="Office Address" ng-model="user.father_office_address" >
        </div>
    </div>

    <div class="row ">
        <div class="col-md-10" >
            <label>Mother</label>
            <input type="text" class="form-control" placeholder="Mother" ng-model="user.mother" >
        </div>
        <div class="col-md-2 ">
            <label>Is Paulinian?</label><br>
            <input type="checkbox" ng-model="mother_is_paulinian" class="pull-right" name="father_is_paulinian" id="mother_is_paulinian" > 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 " >
            <label>Occupation</label>
            <input type="text" class="form-control" placeholder="Occupation" ng-model="user.mother_occupation">
        </div>
        <div class="col-md-6" >
            <label>Office Address</label>
            <input type="text" class="form-control" placeholder="Office Address" ng-model="user.mother_office_address" >
        </div>
    </div>

    <br>


</div>
<div class="row text-center " >
    <span style="color: green;font-size: 24px;" ng-show="showUpdateAccountSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated</span>
</div>

<br>
<div class="row text-center " >
    <div class="btn-group">
        <a href="" class="btn btn-info pull-right"  
           ng-click="(userForm.first_name.$invalid || userForm.last_name.$invalid || userForm.date_of_birth.$invalid) || updateUser(userForm)" 
           ng-disabled=" userForm.first_name.$invalid || userForm.last_name.$invalid || userForm.date_of_birth.$invalid" 
           >Update</a>
    </div>

</div>


<br>
@section('myScripts')


@endsection

