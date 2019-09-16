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
$route['default_controller'] = 'MedController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//-------------------------------------------------------------route user view
$route['beranda'] = 'medcontroller/beranda';
$route['kategori/(:any)'] = 'medcontroller/kategori/$1';
$route['cari'] = 'medcontroller/cari';
$route['tentang'] = 'medcontroller/tentang';
$route['kontak'] = 'medcontroller/kontak';
$route['artikel/(:any)'] = 'medcontroller/artikel/$1';
$route['tag/(:any)'] = 'medcontroller/tag/$1';
//---------------------------------------------------------------route administrator
$route['login'] = 'medcontroller/login';
$route['page/signout'] = 'medcontroller/page/signout';
$route['page/profile/(:any)'] = 'medcontroller/page/profile/$1';
$route['page/pengaturan/(:any)/(:any)'] = 'medcontroller/page/pengaturan/$1/$2';
$route['page/artikel/(:any)/(:any)'] = 'medcontroller/page/artikel/$1/$2';
$route['page/artikel/(:any)/(:any)/(:any)'] = 'medcontroller/page/artikel/$1/$2/$3';
$route['page/utama/(:any)'] = 'medcontroller/page/utama/$1';
$route['update_post/(:any)/(:any)/(:any)'] = 'medcontroller/update_post/$1/$2/$3';
$route['del_post/(:any)/(:any)/(:any)'] = 'medcontroller/del_post/$1/$2/$3';

//------form open
$route['register'] = 'medcontroller/register';
$route['proses_login'] = 'medcontroller/proses_login';
$route['set_password/(:any)'] = 'medcontroller/set_password/$1';
$route['save_post/(:any)'] = 'medcontroller/save_post/$1';
$route['search_post/(:any)/(:any)'] = 'medcontroller/search_post/$1/$2';

$route['sitemap\.xml'] = "medcontroller/sitemap";
