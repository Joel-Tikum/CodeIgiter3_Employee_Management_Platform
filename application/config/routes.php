<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'learning/Fcontroller/employees';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['iqmasta'] = 'learning/Fcontroller';
$route['iqmasta/loginform'] = 'learning/Fcontroller/loginform';
$route['iqmasta/signup'] = 'learning/Fcontroller/signup';  //Return the login form
$route['iqmasta/login'] = 'learning/Fcontroller/login';  //Return the employees if login is successful


$route['iqmasta/admin/dashboard'] = 'learning/Fcontroller/adminDashboard';
$route['iqmasta/admin/workers'] = 'learning/Fcontroller/workers';
$route['iqmasta/admin/workers/create'] = 'learning/Fcontroller/workers';
$route['iqmasta/admin/tasks'] = 'learning/Fcontroller/tasks';


$route['iqmasta/worker/dashboard'] = 'learning/Fcontroller/workerDashboard';




$route['employees'] = 'learning/Fcontroller/employees';
$route['employee/create'] = 'learning/Fcontroller/employeeCreate';
$route['employee/add'] = 'learning/Fcontroller/employeeAdd';
$route['employee/update/(:num)'] = 'learning/Fcontroller/employeeUpdate/$1';
$route['employee/edit/(:num)'] = 'learning/Fcontroller/getEmployee/$1';
$route['employee/delete/(:num)']['DELETE'] = 'learning/Fcontroller/deleteEmployee/$1';
$route['employee/payment/(:num)'] = 'learning/Fcontroller/employeePayment/$1';
