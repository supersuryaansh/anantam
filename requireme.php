<?php
//server root folder
$server_root = $_SERVER['DOCUMENT_ROOT'];
//includes folder
$includes = $_SERVER['DOCUMENT_ROOT']."/includes/";


//This is called automatically from PHP when resource not found or registered.
spl_autoload_register(function ($classname){
    global $includes;
   require_once "${includes}classes/$classname.php";
});