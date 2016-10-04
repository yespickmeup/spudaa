/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  synsoftech
 * Created: 09 28, 16
 */


alter table users add student_no varchar(255) after approved;
alter table users add first_name varchar(255) after approved;
alter table users add middle_name varchar(255) after approved;
alter table users add last_name varchar(255) after approved;
alter table users add suffix_name varchar(255) after approved;
alter table users add civil_status varchar(255) after approved;
alter table users add gender varchar(255) after approved;
alter table users add date_of_birth varchar(255) after approved;
alter table users add blood_type varchar(255) after approved;
alter table users add country varchar(255) after approved;
alter table users add province varchar(255) after approved;
alter table users add city varchar(255) after approved;
alter table users add zip_code varchar(255) after approved;
alter table users add home_address varchar(255) after approved;
alter table users add present_address varchar(255) after approved;
alter table users add landline_no varchar(255) after approved;
alter table users add cellphone_no varchar(255) after approved;
alter table users add level varchar(255) after approved;
alter table users add year varchar(255) after approved;
alter table users add course varchar(255) after approved;
alter table users add major varchar(255) after approved;
alter table users add father varchar(255) after approved;
alter table users add father_is_paulinian boolean after approved;
alter table users add father_occupation varchar(255) after approved;
alter table users add father_office_address varchar(255) after approved;
alter table users add mother varchar(255) after approved;
alter table users add mother_is_paulinian boolean after approved;
alter table users add mother_occupation varchar(255) after approved;
alter table users add mother_office_address varchar(255) after approved;