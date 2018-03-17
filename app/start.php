<?php

require_once __DIR__.'/../vendor/autoload.php';
// подключаем класс ядра, с методом роутинга:
use App\Framework\Core;
// подключаем компонент Запроса:
use Symfony\Component\HttpFoundation\Request;
// подключаем компонент ответа:
use Symfony\Component\HttpFoundation\Response;

// формируем запрос: 
$request = Request::createFromGlobals();
// инициализируем объект ядра с маршрутизацией:
$app = new Core();
// формируем обращение методу с маршрутами:
$response = $app->handle($request);
// отправляем ответ
$response->send();





