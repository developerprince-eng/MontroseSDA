<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session', 'form_validation', 'pagination');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file', 'form', 'html');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('gallery_model', 'event_model', 'news_model', 'sermons_model');
