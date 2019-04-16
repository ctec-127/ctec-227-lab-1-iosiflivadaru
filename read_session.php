<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Read Session</title>
</head>
<body>

  <?php 
  if (isset($_SESSION['views'])) {
    echo "<p>".$_SESSION['views']."</p>";
  } 
  if (isset($_SESSION['browser'])) {
    echo "<p>".$_SESSION['browser']."</p>";
  } 
  if (isset($_SESSION['role'])) {
    echo "<p>".$_SESSION['role']."</p>";
  } 
  ?>

  <a href="create_session.php">Create Session</a>
  <a href="destroy_session.php">Destroy Session</a>
  <a href="destroy_all_session.php">Destroy All Session</a>

</body>
</html>