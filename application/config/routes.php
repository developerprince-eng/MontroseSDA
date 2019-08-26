<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'main';
$route['(:any)'] = 'main/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['events'] = 'events'; 
$route['sermons'] = 'sermons';
$route['church-building'] = 'main/buildingproject';
$route['contact'] = 'main/contact';
$route['ministries'] = 'ministries';
$route['news'] = 'news';
$route['gallery'] = 'gallery';   
