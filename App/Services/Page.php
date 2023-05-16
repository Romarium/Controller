<?php

namespace app\services;

class Page
{
    public static function component($component_name): void
    {
        require_once "views/components/" . $component_name . ".php";
    }
}