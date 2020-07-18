<?php

/**
 * larael - A HP framework for web artisans
 * 
 * @package laravel
 * @author zoubir
 */

use SebastianBergmann\CodeCoverage\Report\PHP;

$uri = urldecode(
     parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
// this file allows ue to emulate apach's "mod_rewrite" functionality from the
// built-in PHP web server, this provides a convenient way to test a laravel
// application without having installed a "real" web server software here
if ($uri!== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
} 


require_once __DIR__.'/public/index.php';