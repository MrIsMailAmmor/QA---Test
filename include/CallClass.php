<?php 
spl_autoload_register("myAutoLoader");


function myAutoLoader($className){
    $path="./classes/";
    $ext = ".class.php";
    $fullpath = $path.$className.$ext;
    include_once $fullpath;
}