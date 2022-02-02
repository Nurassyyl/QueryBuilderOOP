<?php 

session_start();

class QueryBuilder {
  public $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function read($table) {
    $sql = "SELECT * FROM {$table}";
    $statement = $this->pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create($table, $data) {
    $keys = implode(', ' , array_keys($data));
    $tags = ':'.implode(', :' , array_keys($data));
    $sql = "INSERT INTO {$table} ({$keys}) VALUES ($tags)";
    $statement = $this->pdo->prepare($sql);
    $statement->execute($data);
  }

  public function getOne($table, $key) {
    $sql = "SELECT * FROM {$table} WHERE {$table}.`id` = :id ";
    $statement = $this->pdo->prepare($sql);
    $statement->execute(['id' => $key]);
    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public function update($table, $data, $id) {
    $keys = array_keys($data);
    $string = '';
    foreach($keys as $key) {
      $string .= $key . "= :" . $key . ", ";
    }
    $keys = rtrim($string, ', ');
    $data['id'] = $id;
    $sql = "UPDATE {$table} SET {$keys} WHERE id = :id ";
    $statement = $this->pdo->prepare($sql);
    $statement->execute($data);
  }

  public function delete($table, $id) {
    $sql = "DELETE FROM {$table} WHERE id = :id ";
    $statement = $this->pdo->prepare($sql);
    $statement->execute(['id' => $id]);
  }

  public function flashMessage($msg, $word) {
    $_SESSION[$msg] = $word;
  }

}

class Router {
  
}