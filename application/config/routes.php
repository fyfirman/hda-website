<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login/ceklogin'] = 'login/ceklogin';
$route['bk/(:any)'] = 'bk/view/$1';
$route['bk'] = 'bk/index';
$route['kkm'] = 'kkm/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
