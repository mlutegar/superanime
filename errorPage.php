<?php
  if(!isset($_COOKIE['notify'])){
    header('location: index.php');
    exit;
  }
?>

<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error - Supreanime</title>
  </head>
  <body>
      <h1><?= $_COOKIE['notify'] ?></h1>
  </body>
</html>