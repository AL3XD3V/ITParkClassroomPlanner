<?php

include './src/models/model.php';

class ModelClasses extends Model
{
  public function getAllData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT * FROM classes')->fetchAll();
  }

  public function getCheckData($date)
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT class, day, time_start, time_stop FROM classes WHERE day=\''.$date.'\'')->fetchAll();
  }

  public function setEventData($data)
  {
    include './src/db/db_connect.php';
    $stmt = $pdo->prepare("INSERT INTO classes (class, day, time_start, time_stop, name, user, reg, comment) VALUES (:class, :day, :time_start, :time_stop, :name, :user, :reg, :comment)");
    $stmt->bindParam(':class', $data[0]);
    $stmt->bindParam(':day', $data[1]);
    $stmt->bindParam(':time_start', $data[2]);
    $stmt->bindParam(':time_stop', $data[3]);
    $stmt->bindParam(':name', $data[4]);
    $stmt->bindParam(':user', $data[5]);
    $stmt->bindParam(':reg', $data[6]);
    $stmt->bindParam(':comment', $data[7]);
    $stmt->execute();
  }
}
