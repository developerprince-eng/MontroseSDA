<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
$route['sermons'] = 'main/sermons';
$route['about'] = 'main/about';
$route['contact'] = 'main/contact';
$route['ministry'] = 'main/ministry';
$route['events'] = 'main/events';
$route['auth'] = 'auth';
$route['auth/logout'] = 'auth/logout';
$route['auth/login'] = 'auth/login';
$route['auth/register'] = 'auth/register';
$route['dashboard'] = 'dashboard';
$route['dashboard/event-add'] = 'dashboard/event_add_item';
$route['sermons-list'] = 'dashboard/sermons_list';
$route['sermon-add'] = 'dashboard/sermon_add';
$route['sermons-add-item'] = 'dashboard/sermons_add_item';
$route['sermons-delete-item'] = 'dashboard/sermons_delete_item';
$route['sermons-suspend-item'] = 'dashboard/sermons_suspend_item';
$route['sermons-approve-item'] = 'dashboard/sermons_approve_item';
$route['events-list'] = 'dashboard/events_list';
$route['event-add'] = 'dashboard/event_add';
$route['event-add-item'] = 'dashboard/event_add_item';
$route['event-delete-item'] = 'dashboard/event_delete_item';
$route['event-suspend-item'] = 'dashboard/event_suspend_item';
$route['event-approve-item'] = 'dashboard/event_approve_item';
$route['default_controller'] = 'main/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
