<?php

namespace Controllers;

use Models\BDD;
use Models\Article;

class ADD
{

    public static function index()
    {
        self::getList();
    }

    public static function getList()
    {
        require_once ROOT . "/views/articleform.php";
        require_once ROOT . "/templates/global.php";

    }

    public static function postADD()
    {
        $article = new Article(BDD::connect());
        require_once ROOT . "/views/articleform.php";
        require_once ROOT . "/templates/global.php";
    }

}