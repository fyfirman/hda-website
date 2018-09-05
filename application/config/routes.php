<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login/ceklogin'] = 'login/ceklogin';
$route['anggota'] = 'anggota/view/';
$route['anggota/(:any)'] = 'anggota/view/$1';
$route['bk/(:any)'] = 'bk/view/$1';
$route['bk'] = 'bk/index';
$route['kkm'] = 'pages/kkm';
$route['credit'] = 'credit/view';
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
