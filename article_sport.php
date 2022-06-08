<?php
// parametres bdd
define("DB_HOST", "localhost");
define("DB_NAME", "mglsi_news");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");
 
// connexion
try {
  $pdo = new PDO(
    "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

// articles
$stmt = $pdo->prepare("SELECT * FROM `Article` where categorie = 1 ");
$stmt->execute();
$Article = $stmt->fetchAll();