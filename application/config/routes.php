<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Home'] = 'Home';
$route['About'] = 'Home/about';
$route['Contact'] = 'Home/contact';
$route['News'] = 'Home/news';
$route['News/(:any)'] = 'Home/news/$1';
