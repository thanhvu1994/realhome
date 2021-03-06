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
// $route['news/create'] = 'news/create';
// $route['news/(:any)'] = 'news/view/$1';
// $route['news'] = 'news';
// $route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'sites/index';
$route['admin'] = 'admin/login';
$route['danh-muc.html'] = 'sites/categoryAll';
$route['danh-muc.html/(:num)'] = 'sites/categoryAll';
$route['tin-tuc.html'] = 'sites/news';
$route['tin-tuc.html/(:num)'] = 'sites/news';

$route['(dat-hang)/(:any).html'] = 'sites/contact/dat-hang/$2';
$route['(bao-gia)/(:any).html'] = 'sites/contact/bao-gia/$2';
$route['(lien-he).html'] = 'sites/contact';
$route['(dang-nhap).html'] = 'sites/login';
$route['(quen-mat-khau).html'] = 'sites/forgot';
$route['(dang-ki).html'] = 'sites/register';
$route['(gio-hang).html'] = 'sites/cart';
$route['(them-dia-chi).html'] = 'sites/address';
$route['(dia-chi-cua-toi).html'] = 'sites/addresses';
$route['(tai-khoan).html'] = 'sites/account';
$route['(thong-tin-ca-nhan).html'] = 'sites/infomation';
$route['(dang-xuat).html'] = 'sites/logout';

$route['(:any)p.html'] = 'sites/cms/$1';
$route['(:any)c.html'] = 'sites/category/$1';
$route['(:any)c.html/(:num)'] = 'sites/category/$1';
$route['(:any)/(:any)p.html'] = 'sites/product/$2';
$route['(:any)n.html'] = 'sites/newCategory/$1';
$route['(:any)n.html/(:num)'] = 'sites/newCategory/$1';
$route['(:any)/(:any)n.html'] = 'sites/newDetail/$2';




