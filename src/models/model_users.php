<?php

include './src/models/model.php';

class ModelUsers extends Model
{
  public function getAllData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT * FROM users')->fetchAll();
  }

  public function getAuthData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT name, surname, email, password, role FROM users')->fetchAll();
  }
}
