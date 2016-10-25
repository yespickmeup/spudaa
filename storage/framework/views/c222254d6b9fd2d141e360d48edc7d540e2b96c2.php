<div class="row">
    <div class="col-md-6">


        <div class="form-group">
            <h4><p><b>A.) Which of the following best describes yor primary work status at this time?</b></p></h4>
            <input type="radio" name="work_status" value="1" > employed full time  <br>

            <fieldset  >
                <label ng-repeat="choice in question1.choices" >
                    <input type="radio"  ng-class="{ 'radio1': true }"  name="work_status" value="<%choice.id%>" ng-model="aQuestion1" />
                    <%choice.text%>

                </label>


            </fieldset>
         

            <p>Others (pls. specify)<input type="text" name="work_status_others" class="form-control"></p>
            <h5><p><b>* Note: for those currently employed, please proceed to section B.1, otherwise, proceed to section B.2</b></p></h5>
        </div>

        <div class="form-group">
            <h4><p><b>A.) Which of the following best describes yor primary work status at this time?</b></p></h4>

            <fieldset>
                <input type="radio" name="work_status" value="1" > employed full time  <br>
                <input type="radio" name="work_status" value="2" > employed part time  <br>
                <input type="radio" name="work_status" value="3" > continuing education part time and employed  <br>
                <input type="radio" name="work_status" value="4" > unemployed, seeking employment <br>
                <input type="radio" name="work_status" value="5" ng-checked="" > unemployed, not seeking employment  <br>
            </fieldset>



            <p>Others (pls. specify)<input type="text" name="work_status_others" class="form-control"></p>
            <h5><p><b>* Note: for those currently employed, please proceed to section B.1, otherwise, proceed to section B.2</b></p></h5>
        </div>

        <div class="form-group">
            <h4><p><b>Please mark the numbers according to your level of satisfaction on the aspects of your current job:</b></p></h4>
            1 - Very dissatisfied <br>
            2 - Dissatisfied <br>
            3 - Neutral <br>
            4 - Satisfied <br>
            5 - Very satisfied <br>
            <table class="table table-bordered table-hover">
                <tr>
                    <th></th>
                    <th style="width: 20px" > &nbsp;1</th>
                    <th style="width: 20px" > &nbsp;2</th>
                    <th style="width: 20px" > &nbsp;3</th>
                    <th style="width: 20px" > &nbsp;4</th>
                    <th style="width: 20px" > &nbsp;5</th>
                </tr>
                <tr>
                    <td>Challenge</td>
                    <td><input type="radio"  name="sat_challenge" value="1"></td>
                    <td><input type="radio"  name="sat_challenge" value="2"></td>
                    <td><input type="radio"  name="sat_challenge" value="3"></td>
                    <td><input type="radio"  name="sat_challenge" value="4"></td>
                    <td><input type="radio"  name="sat_challenge" value="5"></td>
                </tr>
                <tr>
                    <td>Job Security</td>
                    <td><input type="radio"  name="sat_job_security" value="1"></td>
                    <td><input type="radio"  name="sat_job_security" value="2"></td>
                    <td><input type="radio"  name="sat_job_security" value="3"></td>
                    <td><input type="radio"  name="sat_job_security" value="4"></td>
                    <td><input type="radio"  name="sat_job_security" value="5"></td>
                </tr>
                <tr>
                    <td>Salary/benefits</td>
                    <td><input type="radio"  name="sat_salary" value="1"></td>
                    <td><input type="radio"  name="sat_salary" value="2"></td>
                    <td><input type="radio"  name="sat_salary" value="3"></td>
                    <td><input type="radio"  name="sat_salary" value="4"></td>
                    <td><input type="radio"  name="sat_salary" value="5"></td>
                </tr>
                <tr>
                    <td>Potential for career advancement</td>
                    <td><input type="radio"  name="sat_potential" value="1"></td>
                    <td><input type="radio"  name="sat_potential" value="2"></td>
                    <td><input type="radio"  name="sat_potential" value="3"></td>
                    <td><input type="radio"  name="sat_potential" value="4"></td>
                    <td><input type="radio"  name="sat_potential" value="5"></td>
                </tr>
                <tr>
                    <td>Support for continuing educations or in-service programs</td>
                    <td><input type="radio"  name="sat_support" value="1"></td>
                    <td><input type="radio"  name="sat_support" value="2"></td>
                    <td><input type="radio"  name="sat_support" value="3"></td>
                    <td><input type="radio"  name="sat_support" value="4"></td>
                    <td><input type="radio"  name="sat_support" value="5"></td>
                </tr>
                </tr>
                <tr>
                    <td>Quality of service</td>
                    <td><input type="radio"  name="sat_quality_of_service" value="1"></td>
                    <td><input type="radio"  name="sat_quality_of_service" value="2"></td>
                    <td><input type="radio"  name="sat_quality_of_service" value="3"></td>
                    <td><input type="radio"  name="sat_quality_of_service" value="4"></td>
                    <td><input type="radio"  name="sat_quality_of_service" value="5"></td>
                </tr>
                <tr>
                    <td>Organization's ethical standards</td>
                    <td><input type="radio"  name="sat_org_ethics" value="1"></td>
                    <td><input type="radio"  name="sat_org_ethics" value="2"></td>
                    <td><input type="radio"  name="sat_org_ethics" value="3"></td>
                    <td><input type="radio"  name="sat_org_ethics" value="4"></td>
                    <td><input type="radio"  name="sat_org_ethics" value="5"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <h4><p><b>B.1) For those employed</b></p></h4>
            <h4><p><b><i>How closely related to your course is your current job?</i></b></p></h4>
            <input type="radio" name="job_course_relation" value="1"> highly related <br>
            <input type="radio" name="job_course_relation" value="2"> moderately related <br>
            <input type="radio" name="job_course_relation" value="3"> slightly related <br>
            <input type="radio" name="job_course_relation" value="4"> not related <br>
            <p><h4><b><i>If slightly or not related at all, do you desire to seek a more relevant job?    
                        <input type="radio"  name="seek_relavant_job" value="yes"> yes 
                        <input type="radio" name="seek_relavant_job" value="no"> no
                    </i></b></h4></p>
        </div>

        <div class="form-group">
            <h4><p><b>B.2) For those unemployed. What is the primary reason for your current unemployment?</b></p></h4>
            <input type="radio" name="unemployment_reason" value="1"> unable to find job since graduating from college <br>
            <input type="radio" name="unemployment_reason" value="2"> quit to find another job <br>
            <input type="radio" name="unemployment_reason" value="3"> removed by previous employer<br>
            <input type="radio" name="unemployment_reason" value="4"> health/personal reasons<br>
            <input type="radio" name="unemployment_reason" value="5"> no desire for employment as of this time<br>
        </div>
        <div class="form-group">
            <h4><p><b>How long have you been seeking employment?</b></p></h4>
            <input type="radio"  name="seeking_employment" value="1"> not seeking employment <br>
            <input type="radio"  name="seeking_employment" value="2"> less than 1 month <br>
            <input type="radio"  name="seeking_employment" value="3"> 1-3 months<br>
            <input type="radio"  name="seeking_employment" value="4"> 3-6 months<br>
            <input type="radio"  name="seeking_employment" value="5"> 7-12 months<br>
            <input type="radio"  name="seeking_employment" value="6"> over 12 months<br>
        </div>
    </div>
    <!--    <a class="btn btn-default" ng-click="checkSurvey()">Check</a>-->

</div>
<div class="row text-center" >
    <div class="row text-center " >
        <span style="color: green;font-size: 24px;" ng-show="showUpdateEmploymentSurveySuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated</span>
    </div>
    <div class="btn-group">

        <a href="" class="btn btn-primary pull-right"  ng-click="updateEmploymentSurvey2()"  
           >Update</a>

        <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                   >Next</a>-->
    </div>
</div>
<br>