<?php

/* 
    Маршруты для обработки запросов
 */

// Структура: Запрос - адрес обработки
return array(
    
    // Мегауниверсальная регулярка
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
    
    'news/([0-9]+)' => 'news/view', // Любое число - идентификатор

    // Должно быть ниже остальных, т.к. перебор в цикле идет сверху вниз
    'news' => 'news/index',         //actionIndex в NewsController

    'weather' => 'weather/list',   //actionList в WeatherController
);

