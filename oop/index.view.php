
<?php 
session_start();
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
  
  <?php if ($_SESSION['update']): ?>
    <h4><?php echo $_SESSION['update']; unset($_SESSION['update']); ?></h4>
  <?php endif; ?>
  
  <div class="container">
    <h1><label>Posts</label></h1>
    <a class="btn btn-success" href="create.php">Add Post</a>
    <table>
      <th>ID</th>
      <th>Actions</th>
      <th>Last</th>
      <tr>
        <?php foreach ($posts as $post): ?>
           <tr>
           <td><?php echo $post['id']; ?></td>  
           <td><?php echo $post['posts']; ?></td>
             <td>
             <a class="btn btn-primary" href="update.php?id=<?php echo $post['id']; ?>">Update</a>
             <a class="btn btn-danger" href="delete.php?id=<?php echo $post['id']; ?>">Delete</a>
             </td>
           </tr>
        <?php endforeach; ?>
      </tr>
    </table>
  </div>
</body>
</html>