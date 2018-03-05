<?php

include './src/models/model.php';

class ModelClasses extends Model
{
  public function getAllData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT * FROM classes')->fetchAll();
  }

  public function getCheckData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT day, time_start, time_stop FROM classes')->fetchAll();
  }

  public function setEventData($data)
  {
    include './src/db/db_connect.php';
    $stmt = $pdo->prepare("INSERT INTO classes (class, day, time_start, time_stop, name, user, confirm, reg, comment) VALUES (:class, :day, :time_start, :time_stop, :name, :user, :confirm, :reg, :comment)");
    $stmt->bindParam(':class', $data[0]);
    $stmt->bindParam(':day', $data[1]);
    $stmt->bindParam(':time_start', $data[2]);
    $stmt->bindParam(':time_stop', $data[3]);
    $stmt->bindParam(':name', $data[4]);
    $stmt->bindParam(':user', $data[5]);
    $stmt->bindParam(':confirm', $data[6]);
    $stmt->bindParam(':reg', MD5($data[7]));
    $stmt->bindParam(':comment', $data[8]);
    $stmt->execute();
  }

  // public function setVerifyData($data)
  // {
  //   include './src/db/db_connect.php';
  //   $stmt = $pdo->prepare("UPDATE users SET verified='1' WHERE email=:email");
  //   $stmt->bindParam(':email', $data);
  //   $stmt->execute();
  // }
  //
  // public function getVerifyData()
  // {
  //   include './src/db/db_connect.php';
  //   return $pdo->query('SELECT * FROM users WHERE verified=0')->fetchAll();
  // }
  //
  // public function getEvent($id)
  // {
  //   include './src/db/db_connect.php';
  //   return $pdo->query('SELECT * FROM classes WHERE id='.$id.'')->fetchAll();
  // }

}
