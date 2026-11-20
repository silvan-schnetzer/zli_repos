<?php

if (!extension_loaded('gd') || !function_exists('gd_info')) {
    exit('PHP GD library is NOT installed on your web server <br>');
}

echo 'PHP GD library is installed on your web server <br>';

foreach (gd_info() as $key => $value) {
    echo $key . ' => ' . var_export($value, true) . ' <br>';
}
