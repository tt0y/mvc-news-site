<?php

/**
 * Description of News
 *
 * @author AntonKC
 */
class News {
    /*
     * return single news item with specified id
     * @param inteeger $id
     */
    public static function getNewsItemById($id) {
        
        $id = intval($id);
        
        if ($id) {
            // Коннектимся к базе через метод
            $db = Db::getConnection();

            $result = $db->query(' SELECT id, title, date, short_content '.
                                 ' FROM news '.
                                 ' WHERE id = '.$id
                                 );
            // Чтобы в массиве элементы были именованы
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
    
    /* 
     * Returns an array of news items
     */
    public static function getNewsList() {
        
        // Коннектимся к базе через метод
        $db = Db::getConnection();
        
        // Для списка новостей
        $newsList = array();
        
        $result = $db->query(' SELECT id, title, date, short_content '.
                             ' FROM news '.
                             ' ORDER BY date DESC '.
                             ' LIMIT 10');
        
        $i = 0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        
        return $newsList;
    }
}
