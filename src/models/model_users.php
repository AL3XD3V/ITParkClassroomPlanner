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
    return $pdo->query('SELECT name, surname, email, password, role, verified FROM users')->fetchAll();
  }

  public function getRegData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT email FROM users')->fetchAll();
  }

  public function setRegData($data)
  {
    include './src/db/db_connect.php';
    $stmt = $pdo->prepare("INSERT INTO users (surname, name, patron, division, position, phone, email, password) VALUES (:surname, :name, :patron, :division, :position, :phone, :email, :password)");
    $stmt->bindParam(':surname', $data[0]);
    $stmt->bindParam(':name', $data[1]);
    $stmt->bindParam(':patron', $data[2]);
    $stmt->bindParam(':division', $data[3]);
    $stmt->bindParam(':position', $data[4]);
    $stmt->bindParam(':phone', $data[5]);
    $stmt->bindParam(':email', $data[6]);
    $stmt->bindParam(':password', MD5($data[7]));
    $stmt->execute();
  }

  public function setVerifyData($data)
  {
    include './src/db/db_connect.php';
    $stmt = $pdo->prepare("UPDATE users SET verified='1' WHERE email=:email");
    $stmt->bindParam(':email', $data);
    $stmt->execute();
  }

  public function getVerifyData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT * FROM users WHERE verified=0')->fetchAll();
  }

}
