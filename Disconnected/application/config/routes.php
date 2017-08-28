<?php

//ROUTES.PHP


if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$route['default_controller'] = "users";
$route['404_override'] 		 = '';
$route['registration'] 		 = 	"users/action";
$route['login'] 		 = 	"users/action";

$route['user_logout']  		 = 'users/logout';
$route['members']      		 = 'users/members';
$route['profile']			 = 'users/profile';
$route['send_message'] 		 = 'Message/send';
