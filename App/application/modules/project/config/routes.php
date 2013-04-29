<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['project/(:int)/(:any)'] = "project/view/$1";