
<div class="row">
    <div class="col-md-8">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Name">
    </div>
    <div class="col-md-4">
        <label>Relation</label>
        <select class="form-control" placeholder="Relation" ng-model="relation" >
            <option>Father</option>
            <option>Mother</option>
            <option>Son</option>
            <option>Daughter</option>
            <option>Husband</option>
            <option>Wife</option>
            <option>Brother</option>
            <option>Sister</option>
            <option>Grandfather</option>
            <option>Grandmother</option>
            <option>Grandson</option>
            <option>Granddaughter</option>
            <option>Uncle</option>
            <option>Aunt</option>
            <option>Nephew</option>
            <option>Niece</option>
            <option>Cousin</option>

        </select>
    </div>
</div>

<label>Name Before Married</label>
<input type="text" class="form-control" placeholder="Name before married">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Email Address">
<label>Contact Number</label>
<input type="text" class="form-control" placeholder="Contact Number">
<label>Residence Address</label>
<input type="text" class="form-control" placeholder="Residence address">
<label>Occupation</label>
<input type="text" class="form-control" placeholder="Occupation">
<label>Office Address</label>
<input type="text" class="form-control" placeholder="Office Address"><br>
<div class="form-group pull-right">
    <button class="btn btn-default ">New</button>
    <button class="btn btn-primary ">Add</button>
</div>

<br>
<br>

<table class="table table-bordered">
<!--    <tr>
        <td>Juan Dela Cruz</td>
        <td>Father</td>
        <td style="width: 30px">  <button class="btn btn-default btn-sm">Edit</button> </td>
        <td style="width: 30px">  <button class="btn btn-warning btn-sm">Delete</button> </td>
    </tr>
    <tr>
        <td>Maria Dela Cruz</td>
        <td>Mother</td>
        <td style="width: 30px">  <button class="btn btn-default btn-sm">Edit</button> </td>
        <td style="width: 30px">  <button class="btn btn-warning btn-sm">Delete</button> </td>
    </tr>-->
</table>
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