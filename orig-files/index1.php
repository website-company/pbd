<?php
require('public/html/_constants.php');
$page_url = ($_GET['page_url']) ? :'home';
$page_url = preg_replace('/.html/','',$page_url);

if(!file_exists('public/html/'.$page_url.'.php')){
    header("HTTP/1.0 404 Not Found");
    include('public/html/404.php');
}else{
    include('public/html/'.$page_url.'.php');
}