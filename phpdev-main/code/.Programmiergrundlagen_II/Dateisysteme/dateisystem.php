<?php

if (file_exists("dateisystem.php")) {
} echo 'file exists' . PHP_EOL;


if (is_readable("dateisystem.php")) {
} echo 'file is readable' . PHP_EOL;


if (is_writable("dateisystem.php")) {
} echo 'file is writable' . PHP_EOL;

if (is_file("dateisystem.php")) {
} echo 'file is normal' . PHP_EOL;

if (is_dir("dateisystem.php")) {
} echo 'file is in directory' . PHP_EOL;

if (is_link("dateisystem.php")) {
    echo 'file is systemlink' . PHP_EOL;
} else {
    echo 'file is not systemlink' . PHP_EOL;
}

if (is_executable("dateisystem.php")) {
} echo 'file is executable' . PHP_EOL;

print (filesize("dateisystem.php")) . PHP_EOL;
