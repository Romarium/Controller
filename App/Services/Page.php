<?php

namespace app\services;

//Класс для загрузки компонентов страницы
class Page
{
    public static function component($component_name): void
    {
        require_once "views/components/" . $component_name . ".php";
    }
}