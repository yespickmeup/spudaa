<div class="form-group">
    <h4><p><b>Please mark the numbers accourding to your level of satisfaction on the aspects of your current job:</b></p></h4>

    0 - No importance or impact <br>
    1 - Minor importance or impact <br>
    2 - Moderate importance or impact <br>
    3 - High importance or impact <br><br>

    <table class="table table-bordered table-hover">
        <tr>
            <th colspan="4" style="width: 80px;text-align: center;"> IMPORTANCE</th>
            <th style="text-align: center;">EXPERIENCE</th>
            <th colspan="4" style="width: 80px;text-align: center;"> IMPACT</th>


        </tr>
        <tr>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">0</td>          
            <td style="text-align: center;"></td>
            <td style="width: 20px;text-align: center;">0</td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
        </tr>
        <tr>


            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="creativity_importance" value="<%choice.id%>" ng-model="aCreativity_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>

            <td style="text-align: center;">Creativity</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="creativity_impact" value="<%choice.id%>" ng-model="aCreativity_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="commitment_importance" value="<%choice.id%>" ng-model="aCommitment_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
            <td style="text-align: center;">Lifelong Learning Commitment</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="commitment_impact" value="<%choice.id%>" ng-model="aCommitment_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="ethics_importance" value="<%choice.id%>" ng-model="aEthics_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
            <td style="text-align: center;">Living my professional life according to my standards and ethics</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="ethics_impact" value="<%choice.id%>" ng-model="aEthics_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="teamwork_importance" value="<%choice.id%>" ng-model="aTeamwork_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
            <td style="text-align: center;">Leadership and Teamwork</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="teamwork_impact" value="<%choice.id%>" ng-model="aTeamwork_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="diversity_importance" value="<%choice.id%>" ng-model="aDiversity_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
            <td style="text-align: center;">Respect of cultural diversity</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="diversity_impact" value="<%choice.id%>" ng-model="aDiversity_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="effective_communication_importance" value="<%choice.id%>" ng-model="aEffective_communication_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>      
            <td style="text-align: center;">Effective communication</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="effective_communication_impact" value="<%choice.id%>" ng-model="aEffective_communication_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="punctuality_importance" value="<%choice.id%>" ng-model="aPunctuality_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
            <td style="text-align: center;">Punctuality</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="punctuality_impact" value="<%choice.id%>" ng-model="aPunctuality_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="adaptably_importance" value="<%choice.id%>" ng-model="aAdaptably_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
            <td style="text-align: center;">Flexibility and adaptably</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="adaptably_impact" value="<%choice.id%>" ng-model="aAdaptably_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
    </table>
    <!--     <a class="btn btn-default" ng-click="checkOutcome()">check</a>-->
    <table class="table table-bordered table-hover">
        <tr>
            <th colspan="4" style="width: 80px;text-align: center;"> IMPORTANCE</th>
            <th style="text-align: center;">Core Competency Standards for Nursing Practice in the Philippines</th>
            <th colspan="4" style="width: 80px;text-align: center;"> IMPACT</th>

        </tr>
        <tr>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">0</td>          
            <td style="text-align: center;"></td>
            <td style="width: 20px;text-align: center;">0</td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="nursing_care_importance" value="<%choice.id%>" ng-model="aNursing_care_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
            <td style="text-align: center;">Safety and quality nursing care</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="nursing_care_impact" value="<%choice.id%>" ng-model="aNursing_care_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="management_of_environment_importance" value="<%choice.id%>" ng-model="aManagement_of_environment_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>             
            <td style="text-align: center;">Management of resources and environment</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="management_of_environment_impact" value="<%choice.id%>" ng-model="aManagement_of_environment_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="health_education_importance" value="<%choice.id%>" ng-model="aHealth_education_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>           
            <td style="text-align: center;">Health Education</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="health_education_impact" value="<%choice.id%>" ng-model="aHealth_education_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="profession_importance" value="<%choice.id%>" ng-model="aProfession_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>             
            <td style="text-align: center;">Personal and Profession</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="profession_impact" value="<%choice.id%>" ng-model="aProfession_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>           
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="legal_responsibilities_importance" value="<%choice.id%>" ng-model="aLegal_responsibilities_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
            <td style="text-align: center;">Legal responsibilities</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="legal_responsibilities_impact" value="<%choice.id%>" ng-model="aLegal_responsibilities_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="ethico_importance" value="<%choice.id%>" ng-model="aEthico_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
            <td style="text-align: center;">Ethico-moral Responsibilities</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="ethico_impact" value="<%choice.id%>" ng-model="aEthico_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="improvement_importance" value="<%choice.id%>" ng-model="aImprovement_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
            <td style="text-align: center;">Quality Improvement</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="improvement_impact" value="<%choice.id%>" ng-model="aImprovement_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="records_management_importance" value="<%choice.id%>" ng-model="aRecords_management_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
            <td style="text-align: center;">Records Management</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="records_management_impact" value="<%choice.id%>" ng-model="aRecords_management_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="research_importance" value="<%choice.id%>" ng-model="aResearch_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>          
            <td style="text-align: center;">Research</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="research_impact" value="<%choice.id%>" ng-model="aResearch_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="collaboration_importance" value="<%choice.id%>" ng-model="aCollaboration_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>              
            <td style="text-align: center;">Collaboration and Teamwork</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="collaboration_impact" value="<%choice.id%>" ng-model="aCollaboration_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in importances.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="communication_importance" value="<%choice.id%>" ng-model="aCommunication_importance" />
                    <div class="control__indicator"></div>
                </label>
            </td>              
            <td style="text-align: center;">Communication</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in impacts.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio"   name="communication_impact" value="<%choice.id%>" ng-model="aCommunication_impact" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
    </table>
    <!--      <a class="btn btn-default" ng-click="checkOutcome2()">check</a>-->
    <div class="row text-center" >
        <div class="row text-center " >
            <span style="color: green;font-size: 24px;" ng-show="showUpdateEducationalOutcomesSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated</span>
        </div>
        <div class="btn-group">

            <a href="" class="btn btn-primary pull-right"  ng-click="updateEducationalOutcomes2()" 
               >Update</a>
            <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                       >Next</a>-->
        </div>
    </div>
    <br>
</div>