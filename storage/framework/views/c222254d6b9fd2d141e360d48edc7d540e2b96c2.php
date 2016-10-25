<div class="row">
    <div class="col-md-6">

        <div class="form-group">
            <h4><p><b>A.) Which of the following best describes yor primary work status at this time?</b></p></h4>
            <div ng-repeat="choice in work_statuses.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="work_status" value="<%choice.id%>" ng-model="aWork_status" />
                    <div class="control__indicator"></div>
                </label>
            </div>



            <p>Others (pls. specify)<input type="text" name="work_status_others" class="form-control" ng-model="aWork_status_others"></p>
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
                    <th style="width: 20px;text-align: center;" > &nbsp;1</th>
                    <th style="width: 20px;text-align: center;" > &nbsp;2</th>
                    <th style="width: 20px;text-align: center;" > &nbsp;3</th>
                    <th style="width: 20px;text-align: center;" > &nbsp;4</th>
                    <th style="width: 20px;text-align: center;" > &nbsp;5</th>
                </tr>
                <tr><td>Challenge</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_challenge" value="<%choice.id%>" ng-model="aSat_challenge" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
                <tr><td>Job Security</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_job_security" value="<%choice.id%>" ng-model="aSat_job_security" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
                <tr> <td>Salary/benefits</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_salary" value="<%choice.id%>" ng-model="aSat_salary" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
                <tr><td>Potential for career advancement</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_potential" value="<%choice.id%>" ng-model="aSat_potential" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
                <tr><td>Support for continuing educations or in-service programs</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_support" value="<%choice.id%>" ng-model="aSat_support" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
                </tr>
                <tr> <td>Quality of service</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_quality_of_service" value="<%choice.id%>" ng-model="aSat_quality_of_service" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
                <tr> <td>Organization's ethical standards</td>
                    <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in sat_challenges.choices">
                        <label class="control control--radio"><%choice.text%>
                            <input type="radio" name="sat_org_ethics" value="<%choice.id%>" ng-model="aSat_org_ethics" />
                            <div class="control__indicator"></div>
                        </label>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <h4><p><b>B.1) For those employed</b></p></h4>
            <h4><p><b><i>How closely related to your course is your current job?</i></b></p></h4>

            <div ng-repeat="choice in job_course_relations.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="job_course_relation" value="<%choice.id%>" ng-model="aJob_course_relation" />
                    <div class="control__indicator"></div>
                </label>
            </div>
            <h4><b><label>If slightly or not related at all, do you desire to seek a more relevant job?    </label>
                </b></h4>
            <div ng-repeat="choice in seek_relavant_jobs.choices" style="float:left">
                <label class="control control--radio"><%choice.text%> &nbsp;
                    <input type="radio" name="seek_relavant_job" value="<%choice.id%>" ng-model="aSeek_relavant_job" />
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div>

        <div class="form-group">
            <br>
            <h4><p><b>B.2) For those unemployed. What is the primary reason for your current unemployment?</b></p></h4>
            
            <div ng-repeat="choice in unemployment_reasons.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="unemployment_reason" value="<%choice.id%>" ng-model="aUnemployment_reason" />
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div>
        <div class="form-group">
            <h4><p><b>How long have you been seeking employment?</b></p></h4>
           
            <div ng-repeat="choice in seeking_employments.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="seeking_employment" value="<%choice.id%>" ng-model="aSeeking_employment" />
                    <div class="control__indicator"></div>
                </label>
            </div>
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