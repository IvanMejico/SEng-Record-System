<?php

define('DEBUG', true);

define('DB_NAME', 'sengdb'); // database name
define('DB_USER', 'root'); // database user
define('DB_PASSWORD', ''); // database password
define('DB_HOST', '127.0.0.1'); // database host ***use IP address to avoid DNS lookup

define('DEFAULT_CONTROLLER', 'Home'); //  default_controller if there isn't one defind in the url
define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this layout.

DEFINE('PROOT', '/SENG_SYSTEM/'); // set this to '/' for a live server.

define('SITE_TITLE', 'SEng Database'); // This will be used if no site title is SITE_TITLE
define('MENU_BRAND', 'IVAN'); // This is the Brand text in the menu

define('CURRENT_USER_SESSION_NAME', 'tdfExILlsidtoRWEsqaljfejczZeqBJ'); //session name for logged in user
define('REMEMBER_ME_COOKIE_NAME', 'sLEWdaiIDAkntyPQWjXAcJVQPmARq'); // cookie name for logged in user remember me
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // time in seconds for remember me cookie to live (30 days)

define('ACCESS_RESTRICTED', 'Restricted'); // controller name for the restricted redirect