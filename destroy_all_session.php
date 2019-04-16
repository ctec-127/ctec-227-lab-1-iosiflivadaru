<?php 
  session_start(); 
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Destroy All Sessions</title>
</head>
<body>

  <a href="create_session.php">Create Session</a>
  <a href="read_session.php">Read Session</a>
  <a href="destroy_session.php">Destroy Session</a>

</body>
</html>