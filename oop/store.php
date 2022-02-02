<?php



$db = include "database/start.php";
$posts = $db->create('posts', [
  'posts' => $_POST['posts']
]);

header("Location: /");