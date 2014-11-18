<?php

// Define Directiories Name
define('APP_DIR', dirname(__DIR__));
define('CORE_DIR', APP_DIR.DS.'core');

define('VIEW_DIR', APP_DIR.DS.'views');
define('MODEL_DIR', APP_DIR.DS.'models');
define('TEMPLATE_DIR', APP_DIR.DS.'template');
define('LIB_DIR',  CORE_DIR.DS.'libs');
define('PUBLIC_DIR', dirname(APP_DIR).DS.'public');


require_once 'libs'.DS.'config'.DS.'config.php';