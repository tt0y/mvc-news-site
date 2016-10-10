<?php

/**
 * Description of Db
 *
 * @author AntonKC
 */
class Db {
    public static function getConnection() {
        
        $paramsPath = ROOT.'/config/db_params.php'; // Путь до параметров коннекта к бд
        $params = include_once($paramsPath); // Получим массив со всем необходимым
        
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        
        return $db;        
    }
    
}
