<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Tenant_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'Auth_Controller/loginForm';


$route['house'] = 'House_Controller/selectAll';
$route['add-house'] = 'House_Controller/addHouse';
$route['edit-house/(:any)'] = 'House_Controller/editInfo/$id';


$route['dashboard'] = 'Tenant_Controller/index';
$route['tenants'] = 'Tenant_Controller/selectAll';
$route['add-tenant'] = 'Tenant_Controller/addTenant';
$route['edit-tenant/(:any)'] = 'Tenant_Controller/editInfo/$id';



$route['rents'] = 'Rent_Controller/index';
$route['add-rent'] = 'Rent_Controller/addRent';
$route['edit-rent/(:any)'] = 'Rent_Controller/editRentInfo/$id';


$route['payment'] = 'Payment_Controller/index';
$route['add-payment'] = 'Payment_Controller/addPayment';


$route['report'] = 'Report_Controller/index';
