<?php

/**
 * Description of NewsController
 *
 * @author AntonKC
 */

include_once ROOT.'/models/News.php';

class NewsController {
    
    public function actionIndex(){
        echo('Список новостей <br>');
        
        $newsList = array();
        $newsList = News::getNewsList(); // Класс::Метод
        
        // Подключим web-морду
        require_once (ROOT.'/views/news/index.php');
        
        return true; // Чтобы router.php понял, что такой метод есть
    }
    
    public function actionView($category, $id){
        //echo('Просмотр одной новости');
        
        //$newsItem = array();
        $newsItem = News::getNewsItemById($id); // Класс::Метод
        
        echo '<pre>';
        print_r($newsItem);
        echo '</pre>';
        
        return true;    
    }
}
