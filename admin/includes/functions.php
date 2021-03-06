<?php
function classAutoLoader($class) {
    $class = strtolower($class);
    // $the_path = 'includes/'.$class.'.php';
    $the_path = "includes/{$class}.php";
    // if (file_exists($the_path)) {
    //     require_once($the_path);
    // } else {
    //     // die('This file named '.$class.' was not found !');
    //     die("This file named {$class} was not found !");
    // }
    if (is_file($the_path) && !class_exists($class)) {
        require_once($the_path);
    }
}

function redirect($location) {
    header('Location: '.$location.'');
}

spl_autoload_register('classAutoLoader');
?>