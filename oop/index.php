<?php

$db = include "database/start.php";
$posts = $db->read('posts');
include "index.view.php";
























// function dd($word) {
//   echo "<pre>";
//   var_dump($word);
//   echo "</pre>";
// }
// // dd($_SERVER);
// dd($_SERVER["QUERY_STRING"]);
// dd($_SERVER["REQUEST_URI"]);
// $routes = [
//   '/' => __DIR__ . '../../database/homepage.php',
//   '/start' => __DIR__ . '../../database/start.php',
//   '/connect' => __DIR__ . '../../database/connect.php'
// ];


// dd($routes[$_SERVER["REQUEST_URI"]]);

// if (array_key_exists($_SERVER["REQUEST_URI"], $routes)) {
//   include $routes[$_SERVER["REQUEST_URI"]];exit;
// } else {
//   var_dump(404);
// }

// echo "hello world";



?>

