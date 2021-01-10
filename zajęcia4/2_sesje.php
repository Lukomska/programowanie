<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesja 2</title>
</head>
<body>
  <h4>Strona 2</h4>
  <?php 
    echo "identyfikator sesji: ",session_id(); 
    echo "<hr>Imię: $_SESSION[name]<br>";
    unset($_SESSION['name']);
  ?>
  <a href="./3_sesje.php">Sesje 3</a>
</body>
</html>