<?php

  // ------------------------------
  // notre bibliothèque à fonctions
  // ------------------------------
  // fonction permettant de retourner une date au format FR
  // à partir d'une date, passée en argument, au format EN
  function date2FR($input) {

    // on convertit la date d'entrée en timestamp
    // https://www.php.net/manual/fr/function.strtotime
    $timestamp = strtotime($input);

    // on demande à PHP de bien vouloir afficher des données en français
    // lorsque l'on fait appelle à strftime()
    setlocale(LC_TIME, 'fr_FR.UTF8');
    
    // on convertir le timestamp en date au format français
    // https://www.php.net/manual/fr/function.strftime
    $dateFr = strftime('%d %B %Y', $timestamp); // exemple : 02 Janvier 2022

    // on retourne la chaîne de caractère obtenue
    return $dateFr;

    // alternative durable (mais POO)
    // https://www.php.net/manual/fr/intldateformatter.format.php
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    return $formatter->format( new DateTime($input) );

  }