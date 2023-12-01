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


function genHash($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}