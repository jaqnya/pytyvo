<?php
// Database info.
define('SERVER_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DATABASE_NAME', 'accounting');

// Web routes.
define('SERVER', 'http://localhost/pytyvo');
define('ROUTE_SIGNIN', SERVER . '/signin');
define('ROUTE_SIGNOUT', SERVER . '/signout');

define('ROUTE_SIGNUP', SERVER . '/signup');
define('ROUTE_SUCCESSFUL_SIGNUP', SERVER . '/successful-signup');

define('ROUTE_ADMINISTRATION', SERVER . '/administration');
define('ROUTE_ADMINISTRATION_SETUP', ROUTE_ADMINISTRATION . '/setup');

# { Administration / Setup / General }
define('ROUTE_ADMINISTRATION_SETUP_GENERAL', ROUTE_ADMINISTRATION_SETUP . '/general');
# { Administration / Setup / General / Countries }
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY_MANAGER', ROUTE_ADMINISTRATION_SETUP_GENERAL . '/country-manager');
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY_MANAGER . '/maintain');
# { Administration / Setup / General / Departaments }
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_DEPAR_MANAGER', ROUTE_ADMINISTRATION_SETUP_GENERAL . '/depar-manager');
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_DEPAR_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_GENERAL_DEPAR_MANAGER . '/maintain');
# { Administration / Setup / General / Cities }
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_CITY_MANAGER', ROUTE_ADMINISTRATION_SETUP_GENERAL . '/city-manager');
define('ROUTE_ADMINISTRATION_SETUP_GENERAL_CITY_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_GENERAL_CITY_MANAGER . '/maintain');

# { Administration / Setup / Inventory }
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY', ROUTE_ADMINISTRATION_SETUP . '/inventory');
# { Administration / Setup / Inventory / Families }
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_FAMILY_MANAGER', ROUTE_ADMINISTRATION_SETUP_INVENTORY . '/family-manager');
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_FAMILY_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_INVENTORY_FAMILY_MANAGER . '/maintain');
# { Administration / Setup / Inventory / Categories }
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_CATEGORY_MANAGER', ROUTE_ADMINISTRATION_SETUP_INVENTORY . '/category-manager');
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_CATEGORY_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_INVENTORY_CATEGORY_MANAGER . '/maintain');
# { Administration / Setup / Inventory / Subcategories }
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_SUBCATEGORY_MANAGER', ROUTE_ADMINISTRATION_SETUP_INVENTORY . '/subcategory-manager');
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_SUBCATEGORY_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_INVENTORY_SUBCATEGORY_MANAGER . '/maintain');
# { Administration / Setup / Inventory / Brands }
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_BRAND_MANAGER', ROUTE_ADMINISTRATION_SETUP_INVENTORY . '/brand-manager');
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_BRAND_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_INVENTORY_BRAND_MANAGER . '/maintain');
# { Administration / Setup / Inventory / Measurement Units }
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_MEASUREMENT_UNIT_MANAGER', ROUTE_ADMINISTRATION_SETUP_INVENTORY . '/measurement-unit-manager');
define('ROUTE_ADMINISTRATION_SETUP_INVENTORY_MEASUREMENT_UNIT_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_INVENTORY_MEASUREMENT_UNIT_MANAGER . '/maintain');

# { Administration / Setup / Service }
define('ROUTE_ADMINISTRATION_SETUP_SERVICE', ROUTE_ADMINISTRATION_SETUP . '/service');
# { Administration / Setup / Service / Machines }
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_MACHINE_MANAGER', ROUTE_ADMINISTRATION_SETUP_SERVICE . '/machine-manager');
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_MACHINE_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_SERVICE_MACHINE_MANAGER . '/maintain');
# { Administration / Setup / Service / WO Brands }
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_BRAND_MANAGER', ROUTE_ADMINISTRATION_SETUP_SERVICE . '/wo-brand-manager');
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_BRAND_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_BRAND_MANAGER . '/maintain');
# { Administration / Setup / Service / Models }
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_MODEL_MANAGER', ROUTE_ADMINISTRATION_SETUP_SERVICE . '/model-manager');
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_MODEL_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_SERVICE_MODEL_MANAGER . '/maintain');
# { Administration / Setup / Service / WO Status }
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_STATUS_MANAGER', ROUTE_ADMINISTRATION_SETUP_SERVICE . '/wo-status-manager');
define('ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_STATUS_MAINTAIN', ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_STATUS_MANAGER . '/maintain');

# { AJAX }
define('ROUTE_AJAX', SERVER . '/ajax');
define('ROUTE_AJAX_MACHINE_GET_ALL_ACTIVE', ROUTE_AJAX . '/machine-get-all-active');
define('ROUTE_AJAX_WO_BRAND_GET_ALL_ACTIVE', ROUTE_AJAX . '/wo-brand-get-all-active');

// Resources.
define('ROUTE_CSS', SERVER . '/css/');
define('ROUTE_JS', SERVER . '/js/');
define('ROUTE_IMG', SERVER . '/img/');
?>