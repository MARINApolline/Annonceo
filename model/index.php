<?php
  $host_name = 'db5003439452.hosting-data.io';
  $database = 'dbs2791371';
  $user_name = 'dbu2637653';
  $password = '8eb3G$m0SiT31oN0S';
  $pdo = null;

  try {
    $pdo = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }


// We require all the model functions for later
require('model/membres.php');
require('model/categories.php');
require('model/annonces.php');
require('model/security.php');
require('model/commentaires.php');
require('model/notes.php');
require('model/statistiques.php');
?>