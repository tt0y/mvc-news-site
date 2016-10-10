<?php

// 1. Общие настройки
ini_set('display_errors', 1); // На время разработки
error_reporting(E_ALL);

// 2. Подключим классы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php'); // Подключаем класс
require_once (ROOT.'/components/Db.php'); // Подключаем класс


// 3. Соединение с БД


// 4. Вызов Router
$router = new Router(); // Создаем экземпляр класса
$router->run();         // чекаем, что все работает 