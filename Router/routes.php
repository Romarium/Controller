<?php

//Команда для использования класса Router в файле router.php
use app\services\Router;

/*
 * Вызов метода page класса Router для внесения страницы в список маршрутов
 */
Router::page("/login", "login");
Router::page("/register", "register");
Router::page("/", "home");


Router::enable();