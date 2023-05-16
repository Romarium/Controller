<?php

namespace app\services; //Открывает пространство имен для обращения к классу

class Router
{
    //Свойство, который наполняется урлами сайта
    private static array $list = [];

     // Метод, который наполняет массив $list[] урлами,
     // принимая uri (адрес, по которому должны перейти) и название файла этой страницы
    public static function page($uri, $page_name): void
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable(): void
    {
        $query = '';
        //Передача строки в переменную. Строка идет после "domain/" из $_GET массива
        if (isset($_GET['q']) && $_GET['q'] == NULL)
        {
            $query = 'home';
        }
        else if (isset($_GET['q']))
            $query = $_GET['q'];

        //Перебор массива list для поиска совпадений наименования страницы
        foreach (self::$list as $item) {
            if ($item["uri"] === '/' . $query) {
                require_once 'views/pages/' . $item['page'] . '.php';
                die();
            }
        }
        self::page_not_found();
    }

    public static function page_not_found(): void
    {
        require_once "views/errors/404.php";
    }
}