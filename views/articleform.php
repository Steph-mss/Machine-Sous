<?php
$headTitle = "TEST 1 ";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article->add(
        $_POST["title"],
        $_POST["content"],
        $_POST["author"],
    );
}
ob_start();
?>
<section>
    <H1> HELLO WOLRD </H1>
    <form action="/article/ajoute" method="POST">
        <label for="">Titre</label>
        <input type="text" id="title" name="title">
        <label for="">Content</label>
        <input type="text" id="content" name="content">
        <label for="">Author</label>
        <input type="text" id="author" name="author">
        <button type="submit"> Envoie</button>


    </form>



</section>

<?php
$mainContent = ob_get_clean();
