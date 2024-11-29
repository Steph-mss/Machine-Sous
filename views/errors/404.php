<?php
$headTitle = "Erreur 404";
ob_start();
;?>

<section class="main-sections error-sections">
  <h1 class="main-sections-title error-sections-title">
    Erreur 404
  </h1>
  <p>
    Le contenu que vous recherchez n'est pas disponible à cet endroit.
  </p>
  <a href="/" class="cta-links">
    Retour à l'accueil
  </a>
</section>

<?php
$mainContent = ob_get_clean();