<?php

// PROJET FIL ROUGE : Blog - Thème voyage - Sous-catégories : Culinaire / Art / Actus Sportives + Possibilité de reviews - Si possible, devis voyage.
/**
 * Galerie photo / formulaire via lien externes ?
 * Culinaire
 * Actus sportive
 * Voyage
 * Art
 * Reviews
 * Création de devis
 */

ini_set("date.timezone", "Europe/Paris");
require_once "./utils/Defines.php";
require_once "./models/Autoloader.php";
use Models\Autoloader;
use Models\BDD;

/**
 * Use autoloader to import all models
 */
Autoloader::register();

use Models\Router;
use Models\Article;
use Controllers\BlogController;
use Controllers\ArticlesController;
use Controllers\ADD;
use Controllers\ErrorsController;
use Controllers\SlotMachineController;

$article = new Article(BDD::connect());

// $article_test = [
//   "title" => "Test",
//   "content" => "Contenu de test",
//   "author" => "webdevoo"
// ];

/**
 * Utilisation classique de la méthode add(), de la classe Article
 */
// $article->add(
//   $article_test["title"],
//   $article_test["content"],
//   $article_test["author"],
// );

// var_dump($article::getList());
// echo "<hr/>";
// var_dump($article::getById(1));

// $article_updated = [
//   "id" => 1,
//   "title" => "Test modifié",
//   "content" => "Contenu modifié",
//   "author" => "WebdevooUpdated",
//   "created_date" => new \Datetime("now")
// ];

// $article::update(
//   $article_updated["id"],
//   $article_updated["title"],
//   $article_updated["content"],
//   $article_updated["author"],
//   $article_updated["created_date"]->sub(\DateInterval::createFromDateString("1 hour"))->format("Y/m/d H:i:s"),
// );

// On instancie le routeur
$router = new Router();

$uri = $_SERVER["REQUEST_URI"];
$idParam = (int) preg_replace("/[\D]+/", "", $uri);


// On définit les routes
switch (true) {
  case ($uri === "/"):
    $router->get("/", BlogController::index());
    break;
  // case (str_contains($uri, "/articles")):
  //   if ($idParam) {
  //     $router->get("/articles/$idParam", ArticlesController::getArticle($idParam));
  //     exit;
  //   }
  //   $router->get("/articles", Articlescontroller::getList());
  //   break;
  // case ($uri === "/article/ajoute"):
  //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //     $router->post("/article/ajoute", ADD::postADD());
  //     exit;
  //   }
  //   $router->get("/article/ajoute", ADD::getList());
  //   break;
  case ($uri === "/slot-machine"):
    $router->get(
      "/slot-machine",
      SlotMachineController::index()
    );
    break;
  case ($uri === "/play"):
    $router->get(
      "/play",
      SlotMachineController::play()
    );
    break;
  default:
    $router->get("/articles", ErrorsController::launchError(404));
    break;
}


// On exécute le routeur, sinon il ne fonctionnera pas 😶‍🌫️
$router->run();
