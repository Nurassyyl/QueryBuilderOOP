<?php

$db = include "database/start.php";
$posts = $db->update('posts', [
  'posts' => $_POST['posts']
], $_GET['id']);
header('Location: /');
$db->flashMessage('update', 'Успешно обновлено');