<?php

$config = [
    'db_host' => 'localhost',
    'db_port' => '3309',
    'db_name' => 'posts',
    'db_username' => 'root',
    'db_password' => 'root'
];
foreach ($config as $key=>$value){
    $GLOBALS[$key] = $value;
}
?>