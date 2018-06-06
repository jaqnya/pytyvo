<?php

// Database info.
define('SERVER_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DATABASE_NAME', 'accounting');

// Web routes.
define('SERVER', 'http://localhost/accounting');
define('ROUTE_SIGNIN', SERVER . '/signin');
define('ROUTE_SIGNOUT', SERVER . '/signout');
define('ROUTE_SIGNUP', SERVER . '/signup');
define('ROUTE_SUCCESSFUL_SIGNUP', SERVER . '/successful-signup');
define('ROUTE_ADMINISTRATION', SERVER . '/administration');
define('ROUTE_ADMINISTRATION_SETUP', ROUTE_ADMINISTRATION . '/setup');
define('ROUTE_ADMINISTRATION_SETUP_GENERAL', ROUTE_ADMINISTRATION_SETUP . '/general');
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY', ROUTE_ADMINISTRATION_SETUP_GENERAL . '/country');
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY_NEW_COUNTRY', ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY . '/new-country');

// Resources.
define('ROUTE_CSS', SERVER . '/css/');
define('ROUTE_JS', SERVER . '/js/');
define('ROUTE_IMG', SERVER . '/img/');