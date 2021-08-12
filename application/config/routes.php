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

// News Controller Routing
$route['news'] = 'news/index';
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';

// Form Data
$route['form'] = 'form/form_controller/index';
$route['form/delete_account/(:any)'] = 'form/form_controller/delete_account/$1';
$route['form/delete_image/(:any)'] = 'form/form_controller/delete_image/$1';
$route['form/(:any)'] = 'form/form_controller/$1';

// Use API
$route['use_api'] = 'use_api/fetch_api_controller/index';
$route['use_api/(:any)'] = 'use_api/fetch_api_controller/$1';
$route['use_api/(:any)/(:any)'] = 'use_api/fetch_api_controller/$1/$2';
$route['use_api/(:any)/(:any)/(:any)'] = 'use_api/fetch_api_controller/$1/$2/$3';

// API Generate
$route['api'] = 'use_api/api_model_controller';
$route['api/(:any)'] = 'use_api/api_model_controller/$1';
$route['api/(:any)/(:any)'] = 'use_api/api_model_controller/$1/$2';
$route['api/(:any)/(:any)/(:any)'] = 'use_api/api_model_controller/$1/$2/$3';

// Datatable
$route['datatable'] = 'datatable/datatable_controller';
$route['datatable/(:any)'] = 'datatable/datatable_controller/$1';
$route['datatable/(:any)/(:any)'] = 'datatable/datatable_controller/$1/$2';
$route['datatable/(:any)/(:any)/(:any)'] = 'datatable/datatable_controller/$1/$2/$3';

// Translate Language
$route['translate'] = 'translate/translate_controller';
$route['translate/(:any)'] = 'translate/translate_controller/$1';

// Pages controller Routing
$route['pages/(:any)'] = 'pages/$1';
$route['(:any)'] = 'pages/view/$1';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
