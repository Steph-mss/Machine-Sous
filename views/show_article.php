<?php
if (!isset($article) || !$article) {
  $mainContent = "Erreur 404";
  exit;
}
$headTitle = $article->title;

ob_start();
?>

<section>
  <article>
    <h1><?= $article->title ?> - Par <?= $article->author ?></h1>
    <p>
      <?= $article->content ?>
    </p>
  </article>
</section>

<?php
$mainContent = ob_get_clean();
