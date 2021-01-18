<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', __DIR__ . DS . '..' . DS);

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . 'function' . DS);

defined('CSS_PATH') ? null : define('CSS_PATH', DS . 'pc4u/style' . DS);

require_once(LIB_PATH . 'databasecon.php');
