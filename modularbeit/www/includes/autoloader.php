<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($fileName){
$path = "includes/";
$extension = ".php";
$fullPath = $path . $fileName . $extension;

include_once $fullPath;

}