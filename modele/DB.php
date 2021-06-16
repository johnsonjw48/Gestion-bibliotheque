<?php

class DB {

 private $pdo;

  function connect(){
    $this->pdo = new PDO(
      'mysql:host=localhost; dbname=article', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );

    $this->pdo->exec("SET NAMES UTF8");

    return $this->pdo;
  }

}