<?php

  if (isset($page) AND $page === "contact") {
    $headerClass = "left left--contact";
    $pageTitle = "contact - TopNews";
  } else {
    $headerClass = "left";
    $pageTitle = "TopNews";
  }

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
      <header class="<?= $headerClass ?>">
        <h1 class="left__title">TopNews</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our journalist</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <?php

              // mise en place de données dynamiques pour la <nav>
              $nav = [
                "Plan du site" => "./plan_de_site.php",
                "Mentions légales" => "./mentions_legales.php",
                "Contact" => "./contact.php"
              ];

              foreach ($nav as $name => $url):

            ?>

            <li class="left__nav-item"><a href="<?= $url ?>" class="left__nav-link"><?= $name ?></a></li>

            <?php endforeach; ?>

          </ul>
        </nav>
      </header>
      <main class="right">
      
      <!-- header.tpl.php : FIN -->
