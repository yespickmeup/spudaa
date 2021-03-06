<div class="form-group" >
    <h4><label class="center"><b>CUSTOMER SATISFACTION SURVEY<br> for College Department</b></label></h4>

    This survey is to measure the level of customer satisfaction of the services of St. Paul University Dumaguete as an educational institution. 
    Please indicate your honest and objective assessment on the following services by selecting on the appropriate box using the given scale.<br>
    <br>
    <div class="row">
        <div class="col-md-3">
            1 - Very Dissatisfied

        </div>
        <div class="col-md-2">
            2 - Dissatisfied
        </div>
        <div class="col-md-2">
            3 - Neutral
        </div>
        <div class="col-md-3">
            4 - Satisfied 
        </div>
        <div class="col-md-2 pull-right">
            5 - Very Satisfied
        </div>
    </div>
    <br>
    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> A. Spiritual Needs Provided</th>
            <th  style="width: 20px;text-align: center;"> 1</th>
            <th  style="width: 20px;text-align: center;"> 2</th>
            <th  style="width: 20px;text-align: center;"> 3</th>
            <th  style="width: 20px;text-align: center;"> 4</th>
            <th  style="width: 20px;text-align: center;"> 5</th>
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;1. Monthly Mass</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a1" value="<%choice.id%>" ng-model="aA1" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;2. Recollection / Retreats</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a2" value="<%choice.id%>" ng-model="aA2" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;3. Campus religious organizations</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a3" value="<%choice.id%>" ng-model="aA3" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;4. Christian Life Education</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a4" value="<%choice.id%>" ng-model="aA4" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;5. Community Extension Services (CES) activity</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a5" value="<%choice.id%>" ng-model="aA5" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;6. Model Faith in Action</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a6" value="<%choice.id%>" ng-model="aA6" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;7. Chaplain</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a7" value="<%choice.id%>" ng-model="aA7" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;8. Religious activities (Marian Camp, Living Rosary, etc</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="a8" value="<%choice.id%>" ng-model="aA8" />
                    <div class="control__indicator"></div>
                </label>
            </td>        
        </tr>
    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> B. Student Support Services</th>
            <th  colspan="5" style="text-align: center;"> </th>

        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>1. Monthly Mass</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.1 Career Guidance Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b1_1" value="<%choice.id%>" ng-model="aB1_1" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.2 Counseling Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b1_2" value="<%choice.id%>" ng-model="aB1_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.3 Testing Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b1_3" value="<%choice.id%>" ng-model="aB1_3" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.4 Employment Information Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b1_4" value="<%choice.id%>" ng-model="aB1_4" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.5 Medical and Dental Care Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b1_5" value="<%choice.id%>" ng-model="aB1_5" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.6 Scholarship Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b1_6" value="<%choice.id%>" ng-model="aB1_6" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <!--NO 2-->
        <tr>
            <td style="text-align: left;">&emsp;<b>2. Guidance and Counseling</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.1 Student Orientation Program</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b2_1" value="<%choice.id%>" ng-model="aB2_1" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.2 Placement Testing</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b2_2" value="<%choice.id%>" ng-model="aB2_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.3 Psychological Counseling</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b2_3" value="<%choice.id%>" ng-model="aB2_3" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.4 Career Choices Assistance</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b2_4" value="<%choice.id%>" ng-model="aB2_4" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.5 Job Placement</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b2_5" value="<%choice.id%>" ng-model="aB2_5" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.6 Staff Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b2_6" value="<%choice.id%>" ng-model="aB2_6" />
                    <div class="control__indicator"></div>
                </label>
            </td>      
        </tr>
        <!--NO 3-->
        <tr>
            <td style="text-align: left;">&emsp;<b>3. Canteen</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.1 Adequacy of Food</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b3_1" value="<%choice.id%>" ng-model="aB3_1" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.2 Service System</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b3_2" value="<%choice.id%>" ng-model="aB3_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.3 Cleanliness</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b3_3" value="<%choice.id%>" ng-model="aB3_3" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.4 Canteen Staff Delivery of Services</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b3_4" value="<%choice.id%>" ng-model="aB3_4" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.5 Space</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b3_5" value="<%choice.id%>" ng-model="aB3_5" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.6 Pricing</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b3_6" value="<%choice.id%>" ng-model="aB3_6" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>4. Information Desk / Section</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.1 Phone Calls Answered Quickly and Correctly</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b4_1" value="<%choice.id%>" ng-model="aB4_1" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.2 Information Desk Staff Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b4_2" value="<%choice.id%>" ng-model="aB4_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>5. Registrars Office Service</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;5.1 Customer / Clienmt Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b5_1" value="<%choice.id%>" ng-model="aB5_1" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;5.2 Systems and Procedures</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b5_2" value="<%choice.id%>" ng-model="aB5_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>6. Security</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.1 Alertness</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b6_1" value="<%choice.id%>" ng-model="aB6_1" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.2 Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="b6_2" value="<%choice.id%>" ng-model="aB6_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> C. Instruction</th>
            <th  style="width: 20px;text-align: center;"> 1</th>
            <th  style="width: 20px;text-align: center;"> 2</th>
            <th  style="width: 20px;text-align: center;"> 3</th>
            <th  style="width: 20px;text-align: center;"> 4</th>
            <th  style="width: 20px;text-align: center;"> 5</th>
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;1. Provide Balance Education</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c1" value="<%choice.id%>" ng-model="aC1" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;2. Discipline Policies</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c2" value="<%choice.id%>" ng-model="aC2" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;3. Integrating Curriculum</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c3" value="<%choice.id%>" ng-model="aC3" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;4. Integrating Technology</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c4" value="<%choice.id%>" ng-model="aC4" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;5. Grading System</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c5" value="<%choice.id%>" ng-model="aC5" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;6. Methods of Teaching</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c6" value="<%choice.id%>" ng-model="aC6" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;7. Classroom Management (Class Attendance of Students
                and Faculty, Class Size, Academic Atmosphere)</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c7" value="<%choice.id%>" ng-model="aC7" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;8. Recognition of Outstanding Students</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c8" value="<%choice.id%>" ng-model="aC8" />
                    <div class="control__indicator"></div>
                </label>
            </td>     
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;9. Co - Curricular Activities</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c9" value="<%choice.id%>" ng-model="aC9" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;10. Academic Counseling</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c10" value="<%choice.id%>" ng-model="aC10" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;11. Instructional Delivery of Faculty</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="c11" value="<%choice.id%>" ng-model="aC11" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> D. Faculty</th>
            <th  style="width: 20px;text-align: center;"> 1</th>
            <th  style="width: 20px;text-align: center;"> 2</th>
            <th  style="width: 20px;text-align: center;"> 3</th>
            <th  style="width: 20px;text-align: center;"> 4</th>
            <th  style="width: 20px;text-align: center;"> 5</th>
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;1. Teaching Competence</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="d1" value="<%choice.id%>" ng-model="aD1" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>

        <tr>
            <td style="text-align: left;">&emsp;2. Attitudes and Values</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="d2" value="<%choice.id%>" ng-model="aD2" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;3. Foster Students' Growth</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="d3" value="<%choice.id%>" ng-model="aD3" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;4. Treatment of Students and Parents</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="d4" value="<%choice.id%>" ng-model="aD4" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;5. Academic Counseling Time</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="d5" value="<%choice.id%>" ng-model="aD5" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> E. Facilities</th>
            <th  colspan="5" style="text-align: center;"> </th>

        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>1. Physical Plant Facilities</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.1 Classrooms and Capacity</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_1" value="<%choice.id%>" ng-model="aE1_1" />
                    <div class="control__indicator"></div>
                </label>    
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.2 Provision of Bulleting Boards</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_2" value="<%choice.id%>" ng-model="aE1_2" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.3 Counseling Rooms</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_3" value="<%choice.id%>" ng-model="aE1_3" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.4 Administrators' Offices</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_4" value="<%choice.id%>" ng-model="aE1_4" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.5 Faculty Room</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_5" value="<%choice.id%>" ng-model="aE1_5" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.6 Conference Room</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_6" value="<%choice.id%>" ng-model="aE1_6" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.7 Audio - Visual Room</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_7" value="<%choice.id%>" ng-model="aE1_7" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.8 Grounds</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_8" value="<%choice.id%>" ng-model="aE1_8" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.9 General Cleanliness</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_9" value="<%choice.id%>" ng-model="aE1_9" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.10 Adequacy of Facilities</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_10" value="<%choice.id%>" ng-model="aE1_10" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.11 Clinic</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_11" value="<%choice.id%>" ng-model="aE1_11" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;1.12 Swimming Pool</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e1_12" value="<%choice.id%>" ng-model="aE1_12" />
                    <div class="control__indicator"></div>
                </label>
            </td>    
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>2. Library Facilities</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.1 Libraries are well Illuminated and Lighted</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_1" value="<%choice.id%>" ng-model="aE2_1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.2 Accessibility</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_2" value="<%choice.id%>" ng-model="aE2_2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.3 Capacity</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_3" value="<%choice.id%>" ng-model="aE2_3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.4 Design and Arrangement</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_4" value="<%choice.id%>" ng-model="aE2_4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.5 Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_5" value="<%choice.id%>" ng-model="aE2_5" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.6 Volume of Books (Collection) Journas, Periodicals</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_6" value="<%choice.id%>" ng-model="aE2_6" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.7 Card Catalogues</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_7" value="<%choice.id%>" ng-model="aE2_7" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.8 Library Service Time</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_8" value="<%choice.id%>" ng-model="aE2_8" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2..9 Information Dissemination</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_9" value="<%choice.id%>" ng-model="aE2_9" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.10 Reserve Books</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_10" value="<%choice.id%>" ng-model="aE2_10" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.11 Loan System</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_11" value="<%choice.id%>" ng-model="aE2_11" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.12 Internet Access</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_12" value="<%choice.id%>" ng-model="aE2_12" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;2.13 Instructional Materials (Large Volumes, new Additions
                and Functiona VHS Tapes, CD's, Microfilms, Software, Instructional Models</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e2_13" value="<%choice.id%>" ng-model="aE2_13" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>3. Science Laboratories Equipment and Facilities</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.1 Availability and Usability</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e3_1" value="<%choice.id%>" ng-model="aE3_1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.2 Modern and Upgraded</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e3_2" value="<%choice.id%>" ng-model="aE3_2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.3 Cleanliness</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e3_3" value="<%choice.id%>" ng-model="aE3_3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.4 Safety</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e3_4" value="<%choice.id%>" ng-model="aE3_4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;3.5 Staff Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e3_5" value="<%choice.id%>" ng-model="aE3_5" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>4. Computer Laboratories and Equipment</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.1 Website Navigation and Equipment</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e4_1" value="<%choice.id%>" ng-model="aE4_1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.2 Information Contained</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e4_2" value="<%choice.id%>" ng-model="aE4_2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.3 Cleanliness</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e4_3" value="<%choice.id%>" ng-model="aE4_3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.4 Safety</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e4_4" value="<%choice.id%>" ng-model="aE4_4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;4.5 Staff Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e4_5" value="<%choice.id%>" ng-model="aE4_5" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>5. Other Laboratories (Typing, Speech Lab)</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;5.1 Availability and Usability</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e5_1" value="<%choice.id%>" ng-model="aE5_1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;5.2 Modern and Upgraded</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e5_2" value="<%choice.id%>" ng-model="aE5_2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>6. FLCH / Students Community Hall / FDL</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.1 Availability of Basic Recreational and physical Eduction Facilities</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e6_1" value="<%choice.id%>" ng-model="aE6_1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.2 Adquated to Meet the Needs of the Present Population and Future Expansion</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e6_2" value="<%choice.id%>" ng-model="aE6_2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.3 Availability and Usability</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e6_3" value="<%choice.id%>" ng-model="aE6_3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.4 Cleanliness</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e6_4" value="<%choice.id%>" ng-model="aE6_4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.5 Safety</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e6_5" value="<%choice.id%>" ng-model="aE6_5" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;6.6 Staff and Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e6_6" value="<%choice.id%>" ng-model="aE6_6" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;<b>7. Comfort Rooms</b></td>
            <td style="width: 20px;text-align: center;">1</td>
            <td style="width: 20px;text-align: center;">2</td>
            <td style="width: 20px;text-align: center;">3</td>
            <td style="width: 20px;text-align: center;">4</td>  
            <td style="width: 20px;text-align: center;">5</td>  
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;7.1 Cleanliness and Maintenance</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e7_1" value="<%choice.id%>" ng-model="aE7_1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;7.2 CR's Free Obnoxious Odors</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e7_2" value="<%choice.id%>" ng-model="aE7_2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;&emsp;&emsp;7.3 Number Adequate for Student Populace</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="e7_3" value="<%choice.id%>" ng-model="aE7_3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> F. Partnership with Parents and Community</th>
            <th  style="width: 20px;text-align: center;"> 1</th>
            <th  style="width: 20px;text-align: center;"> 2</th>
            <th  style="width: 20px;text-align: center;"> 3</th>
            <th  style="width: 20px;text-align: center;"> 4</th>
            <th  style="width: 20px;text-align: center;"> 5</th>
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;1. Parents Orientation</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="f1" value="<%choice.id%>" ng-model="aF1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;2. School Visit by Parents</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="f2" value="<%choice.id%>" ng-model="aF2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;3. School Newsletter</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="f3" value="<%choice.id%>" ng-model="aF3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr> <tr>
            <td style="text-align: left;">&emsp;4. Parents' and Teachers Assocations</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="f4" value="<%choice.id%>" ng-model="aF4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>

    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> G. Finance Office Service</th>
            <th  style="width: 20px;text-align: center;"> 1</th>
            <th  style="width: 20px;text-align: center;"> 2</th>
            <th  style="width: 20px;text-align: center;"> 3</th>
            <th  style="width: 20px;text-align: center;"> 4</th>
            <th  style="width: 20px;text-align: center;"> 5</th>
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;1. Payment Terms/Schedule</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="g1" value="<%choice.id%>" ng-model="aG1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;2. Office Location</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="g2" value="<%choice.id%>" ng-model="aG2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;3. Office Hours</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="g3" value="<%choice.id%>" ng-model="aG3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;4. Staff Delivery of Service</td>
            <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="g4" value="<%choice.id%>" ng-model="aG4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
    </table>

    <table class="table table-bordered table-hover">
        <tr>
            <th  style="text-align: left;"> H. Administration</th>
            <th  style="width: 20px;text-align: center;"> 1</th>
            <th  style="width: 20px;text-align: center;"> 2</th>
            <th  style="width: 20px;text-align: center;"> 3</th>
            <th  style="width: 20px;text-align: center;"> 4</th>
            <th  style="width: 20px;text-align: center;"> 5</th>
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;1. Leadership Competence</td>
              <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="h1" value="<%choice.id%>" ng-model="aH1" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;2. Managerial Competence</td>
             <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="h2" value="<%choice.id%>" ng-model="aH2" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;3. Attitudes and Values</td>
             <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="h3" value="<%choice.id%>" ng-model="aH3" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
        <tr>
            <td style="text-align: left;">&emsp;4. Treatment of Employees, Parents and Students</td>
              <td style="width: 20px;padding-left: 15px;text-align: center;" ng-repeat="choice in a1s.choices">
                <label class="control control--radio"><%choice.text%>
                    <input type="radio" name="h4" value="<%choice.id%>" ng-model="aH4" />
                    <div class="control__indicator"></div>
                </label>
            </td> 
        </tr>
    </table>

    <div class="col-md-12">
        <label>
            <b>
                I. Comments / Suggestion  
            </b>
        </label>
        <textarea class="form-control" rows="5" id="suggestion" ng-model="suggestion" name="suggestion"></textarea>
    </div>

    <br>
    <div class="row text-center" >
        <div class=" text-center " >
            <span style="color: green;font-size: 24px;" ng-show="showUpdateSatisfactionSuccess" ><span class="glyphicon glyphicon-ok"></span> Successfully Updated</span>
        </div>
        <div class="btn-group" style="margin-top: 10px;">

            <a href="" class="btn btn-primary pull-right"  ng-click="updateSatisfaction()"  
               >Update</a>
            <!--        <a href="" class="btn btn-primary pull-right" ng-click="submitForm(userForm.$invalid)" ng-disabled="userForm.email.$error && !userForm.$error.emailExists" 
                       >Next</a>-->
        </div>
    </div>
    <br>
</div>