<?php
$headTitle = "Machine à Sous ";
ob_start();
?>
<section class="container">
    <h1>🎰 Machine à Sous 🎰</h1>
    <article class="slot-machine">
        <div class="reel" id="reel1">🍒</div>
        <div class="reel" id="reel2">🍒</div>
        <div class="reel" id="reel3">🍒</div>
    </article>
    <button id="spinButton">🎲 Lancer</button>
    <div id="result"></div>
</section>



<?php
$mainContent = ob_get_clean();