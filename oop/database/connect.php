<?php

class Connect {
  public static function pdo($config) {
    return $pdo = new PDO("{$config['host']};dbname={$config['dbname']};", "{$config['user']}","{$config['password']}");
  }
}

