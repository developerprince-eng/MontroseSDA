<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['events'] = 'events'; 
$route['sermons'] = 'sermons';
$route['church-building'] = 'main/buildingproject';
$route['contact'] = 'main/contact';
$route['ministries'] = 'ministries';
$route['news'] = 'news';
$route['gallery'] = 'gallery';   
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;