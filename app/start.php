<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();

switch($request->getPathInfo()){
    case '/':
        echo '<p>Home Page</p>'; 
    break;
    case '/about':
        echo 'This is page about us';
    break;
    case '/contact':
        echo 'This is page contact';
    break;
    default:
        echo '404 page';
}


