
<div class="box box-widget widget-user">
    <div class="widget-user-header bg-black" style="background: url('{{ URL::to('src/AdminLTE/img/home/signup.png') }}')   no-repeat;background-size: 100% 100%; ">
        <h3 class="widget-user-username"></h3>
        <h5 class="widget-user-desc"></h5>
    </div>
    <div class="widget-user-image">
         <img class="img-circle" 
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
            <input type="text" class="form-control" placeholder="Autogenerated" disabled="true">
        </div>
        <div class="col-md-6">
            <label>Student No</label>
            <input type="text" class="form-control" placeholder="Student No" hasFocus ng-model="user.student_no">
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

    <div class="row " style="margin-left: 0px;width: 100%;" ng-class="{ 'has-error' : userForm.email.$error && !userForm.$error.emailExists }" >
        <label>Email Address</label>
        <div class="input-group " >
            <input type="email" class="form-control " placeholder="Email" 
                   ng-model="user.email" 
                   name="email" 
                   id="email"
                   required
                   email-available
                   ng-model-options="{updateOn: 'blur'}"
                   email
                   >
            <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat" >Check Availability 
<!--                    <i class="fa fa-check-circle-o"></i>-->
                    <i class="fa fa-question"></i>
                </button>
            </span>

        </div>
        <!--        <div ng-if="userForm.$pending.emailExists" ng-show="userForm.email.$touched" class="pull-right">checking....</div>
                <div ng-if="!userForm.$error.emailExists" ng-show="userForm.email.$touched" class="pull-right" style="color: red;">Email address already exists!</div>
                <div ng-if="userForm.$error.emailExists" ng-show="userForm.email.$touched" class="pull-right" style="color: green;">Email address available</div>-->

<!--        <p ng-show="userForm.email.$error.required && userForm.email.$touched" class="help-block">Email address is required</p>-->
        <span class="error" ng-show="userForm.email.$error.required && userForm.email.$touched">
            Email address is required</span>
        <span class="error" ng-show="userForm.email.$error.email">
            Not valid email!</span>
        <span class="error pull-right" ng-show="userForm.$error.emailExists && userForm.email.$touched && !userForm.email.$error.email && !userForm.email.$error.required">
            Email address available! </span>
        <span class="pull-right" ng-show="!userForm.$error.emailExists && userForm.email.$touched && !userForm.email.$error.email && !userForm.email.$error.required">
            Email address already exists!</span>
        <span class="pull-right" ng-if="userForm.$pending.emailExists && userForm.email.$touched">
            checking...</span>

    </div>

    <div class="row form-group " ng-class="{ 'has-error' : userForm.password.$invalid || userForm.confirm_password.$invalid }">
        <div class="col-md-6 ">
            <label style="color: gray;">Password</label>
            <input type="password" class="form-control" placeholder="Password" ng-model="user.password" name="password" id="password" required>
            <p ng-show="userForm.password.$error.required && userForm.password.$touched || userForm.confirm_password.$error.required && userForm.confirm_password.$touched" class="help-block">
                Password/Confirm password is required.</p>
        </div>

        <div class="col-md-6">
            <label style="color: gray;">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" ng-model="user.confirm_password" name="confirm_password" 
                   compare-to="user.password" required>
            <p ng-show="userForm.confirm_password.$invalid && userForm.confirm_password.$touched" class="help-block">
                Password and confirm password do not match.</p>

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
            <input type="radio"  class="pull-right" ng-model="user.father_is_paulinian" name="father_is_paulinian" /> 

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
            <input type="radio" ng-model="user.mother_is_paulinian" class="pull-right" name="mother_is_paulinian"> 
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


<div class="row text-center" >
    <div class="btn-group">
        <a href="{{route('signin')}}" class="btn btn-default pull-left" >Back to Login</a>
        <!--        <a href="" class="btn btn-primary pull-right"  ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>-->
        <a href="" class="btn btn-primary pull-right"  
           ng-click="((userForm.$error && !userForm.$error.emailExists) || userForm.first_name.$invalid || userForm.last_name.$invalid || userForm.date_of_birth.$invalid) || changeTab(2)" 
           ng-disabled="(userForm.$error && !userForm.$error.emailExists) || userForm.first_name.$invalid || userForm.last_name.$invalid || userForm.date_of_birth.$invalid" 
           >Next</a>
    </div>
</div>
<br>

<!--<div class="row">
    <div class="col-md-6">
        <div class="box box-solid collapsed-box ">
            <div class="box-header with-border">
                <div class="user-block">
                    School Activities Involvements
                </div>
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
            </div>
            <div class="box-footer ">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-solid collapsed-box ">
            <div class="box-header with-border">
                <div class="user-block">
                    Alumni Family Members
                </div>
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
            </div>
            <div class="box-footer ">
            </div>
        </div>
    </div>
</div> -->
