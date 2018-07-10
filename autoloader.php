<?php
/**
* WP My Autoloader
*
* Simple autoloader to use in your WordPress plugins.
*
* @author Eduardo Pinuaga Linares - Did-web <info@did-web.com>
* @author http://www.did-web.com
*
* @version 1.0.7
* @license wp-my-autoloader/LICENSE LGPL-2.1
* @package wp-my-autolader
*/


function wp_my_autoloader($class_name)
{
    $plugin_name= PLUGIN_NAME_AUTOLOADER;

    if (false === strpos($class_name, $plugin_name)) {
        return;
    }

    $file_parts = explode('\\', $class_name);
    $namespace = '/';

    for ($i = 1; $i < count($file_parts); $i++) {
        $current = strtolower($file_parts[ $i ]);
        $namespace .=$current.'/';
    }
    $namespace = substr($namespace, 0, -1);

    $filepath  = dirname(dirname(__FILE__)) . '/../..'.$namespace.".php";

    if (file_exists($filepath)) {
        include_once($filepath);
    } else {
        wp_die(
              esc_html("[Autoloader Alert!] - The file attempting to be loaded at $filepath does not exist.")
            );
    }
}
