<?php

echo "hello world1";

echo "<p>-->". $_SERVER['REQUEST_URI'];

echo "<pre>";
print_r(apache_get_modules());

var_dump($_SERVER);