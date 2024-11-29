<?php

namespace Controllers;

use Models\BDD;
use Models\Article;

class ArticlesController
{

  public static function index()
  {
    self::getList();
  }

  public static function getList()
  {
    $articlesList = Article::getList();
    require_once ROOT . "/views/articles_list.php";
    require_once ROOT . "/templates/global.php";
  }

  public static function getArticle(int $id)
  {
    $article = Article::getById($id);
    require_once ROOT . "/views/show_article.php";
    require_once ROOT . "/templates/global.php";
  }

}