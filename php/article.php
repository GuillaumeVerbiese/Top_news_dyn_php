<?php

  // -----------------------
  // on s'occupe des données
  // -----------------------

  // on charge les données de tous les articles
  include("inc/data.php");
  
  // on charge notre bibliothèque à fonctions
  include("inc/functions.php");

  // on récupère l'ID de l'article à afficher
  // 
  // est-ce que le $_GET['id'] est défini ?
  if ( isset($_GET['id']) ) {


    // alors on récupère la valeur de $_GET['id]
    // via filter_input et un filtre adapté aux entiers
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

  } else {
    
    // non, $_GET['id'] n'existe pas

    // alors on donne une valeur par défaut à $id
    $id = 1;

  }

  // -----------------
  // on calibre cet ID
  // -----------------
  
  // est-ce que la valeur de $id n'est pas dans la fourchette 1 à 6 ?
  if ( $id < 1 OR $id > 6 ) {
    
    // oui $id n'est pas dans la fourchette

    // alors on lui donne une valeur par défaut
    $id = 1;

  }

  // var_dump($id);

  // on charge les données de l'article ayant cet ID
  // on place dans une variable $article (au singulier)
  // les données issues du tableau provenant de data.php : $articles (au pluriel)
  $article = $articles[$id];

  // on créé la variable $dateFr, utilisée dans la template article
  // en utilisant la fonction date2FR() provenant de functions.php
  $dateFr = date2FR( $article['created_at'] );

  // debug
  // var_dump($article, $dateFr);

  // ------------------------
  // on affiche les templates
  // ------------------------

  // on charge le HTML depuis plusieurs fichiers
  include("inc/header.tpl.php");
  include("inc/article.tpl.php");
  include("inc/footer.tpl.php");

?>