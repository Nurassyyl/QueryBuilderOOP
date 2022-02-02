<?php

$db = include "database/start.php";
$posts = $db->getOne('posts', $_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <form action="update.handler.php?id=<?php echo $posts['id']; ?>" method="POST">
    <input type="text" name="posts" value="<?php echo $posts['posts']; ?>">
    <button class="btn btn-primary" input="submit" >Update</button>
  </form>
</body>
</html>