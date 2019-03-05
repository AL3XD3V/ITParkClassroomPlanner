<?php

include_once './src/models/model.php';

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

    public function getCheckDataNew($connection, $date)
    {
        return $connection->query('SELECT class, day, time_start, time_stop FROM classes WHERE day=\''.$date.'\'')->fetchAll();
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

    public function setEventDataNew($connection, $data)
    {
        $stmt = $connection->prepare("INSERT INTO classes (class, day, time_start, time_stop, name, user, reg, comment) VALUES (:class, :day, :time_start, :time_stop, :name, :user, :reg, :comment)");
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

  public function getAudWeekData($week)
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT class, day, time_start, time_stop, name, confirm FROM classes WHERE WEEK(day)=\''.$week.'\' ORDER BY class, time_start ASC')->fetchAll();
  }

  public function getUserRequests($id)
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT class, day, time_start, time_stop, name, confirm FROM classes WHERE user='.$id.' ORDER BY class, time_start ASC')->fetchAll();
  }

  public function setVerifyData($data)
  {
    include './src/db/db_connect.php';
    $stmt = $pdo->prepare("UPDATE classes SET confirm='1' WHERE reg=:reg AND user=:user");
    $stmt->bindParam(':reg', $data[0]);
    $stmt->bindParam(':user', $data[1]);
    $stmt->execute();
  }

  public function getVerifyData()
  {
    include './src/db/db_connect.php';
    return $pdo->query('SELECT * FROM classes WHERE confirm=0')->fetchAll();
  }
}
