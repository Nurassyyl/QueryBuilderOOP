<?php

$db = include "database/start.php";
$db->delete('posts', $_GET['id']);
header('Location: /');