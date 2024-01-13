<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
case '/LP-XML-PROJECT/public/home':
require dirname(__DIR__) . '/public/pages/Home.php';
break;
case '/LP-XML-PROJECT/public/xmlData':
require dirname(__DIR__) . '/public/pages/data.php';
break;

default:
http_response_code(404);
require dirname(__DIR__) . '/public/pages/404.php';
break;
}
