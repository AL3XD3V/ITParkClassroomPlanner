<?php

include './src/models/model.php';

class ModelUsers extends Model
{
  public function getData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT * FROM users')->fetchAll();
  }
}
